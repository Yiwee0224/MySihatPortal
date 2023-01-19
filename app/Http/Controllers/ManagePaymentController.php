<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Payment;
use App\Models\Customer;
use Dompdf\Dompdf;
use Dompdf\Options;
use Illuminate\Support\Facades\Auth;



class ManagePaymentController extends BaseController
{
    public function Payment()
    {
        $user = Auth::user();
        $paymentDetails = Payment::where('userID', Auth::user()->userID)->get();

        return view('User.Payment', ['paymentDetails' => $paymentDetails]);
    }

    public function ViewInv()
    {
        $user = Auth::user();
        $paymentDetails = Payment::where('userID', Auth::user()->userID)->get();

        return view('User.PaymentInv', ['paymentDetails' => $paymentDetails]);
    }
    public function store(Request $request)
    {
        $paymentDetail = new Payment;
        $paymentDetail->user_id = Auth::id();
        $paymentDetail->payment_date = $request->payment_date;
        $paymentDetail->save();

        return redirect()->route('User.Payment');
    }

    public function Viewplist($userID)
    {
        $pay = DB::table('users')
            ->join('payment', 'payment.userID', '=', 'users.userID')
            ->select('users.userID', 'users.userName', 'payment.payID', 'payment.payName', 'payment.payDate', 'payment.payAmount')
            ->where('Users.userID', '=', $userID)
            ->get();


        return view('ManagePayment.PaymentInvoice', ['paymentdetail' => $pay]);
    }
    public function PaymentList()
    {

        $pay = DB::table('users')
            ->join('payment', 'payment.userID', '=', 'users.userID')
            ->select('users.userID', 'users.userName', 'payment.payID', 'payment.payName', 'payment.payDate', 'payment.payAmount')
            ->get();

        $lec_report = DB::table('users')
            ->join('Customer', 'Customer.lecturerID', 'users.userID')
            ->select('customerID', 'userID', 'userName')
            ->get();

        foreach ($pay as $user_payment) {
            foreach ($lec_report as $lecReport) {
                if ($user_payment->userID == $lecReport->customerID) {
                    $user_payment->lecName = $lecReport->userName;
                }
            }
        }
        return view('ManagePayment.PaymentList', ['paymentdetail' => $pay]);
    }
    // Download file
    public function downloadFile($file_name)
    {
        //PDF file is stored under project/public/download/info.pdf
        $file = public_path("storage/documents/") . $file_name;
        return response()->download($file, $file_name);
    }

    public function Addpayment()
    {


        return view('ManagePayment.Addpayment');
    }

    public function insertpayment(Request $req)
    {
        //GET FORM INTERFACE
        $userID = $req->input('userID'); // from admin
        $username = $req->input('userName'); //from admin

        // dd($reportDoc);
        $req->file('reportDocument');
        // var_dump($req->file('reportDocument'));

        $customer = User::where('userID', $userID)->first(); //query


        // $name = $req->file('reportDocument')->getClientOriginalName();


        DB::table('payment')->insert([
            'userID' => $customer->userID, //access from cus table

            'payName' => $req->payName, // from interface
            'payDate' => $req->payDate, // from interface
            'payAmount' => $req->payAmount,

        ]);

        // $reportDetail = DB::table('LabReport')
        //     ->join('users', 'users.userID', '=', 'LabReport.userID')
        //     ->select("appointment.userID", "users.userName", "LabReport.reportTitle", "LabReport.reportDate", "LabReport.reportDocument")
        //     ->get();

        $pay = DB::table('payment')
            ->join('users', 'users.userID', '=', 'payment.userID')
            ->select("payment.userID", "users.userName", "payment.payName", "payment.payDate", "payment.payAmount")
            ->get();
        return view('ManagePayment.PaymentList', ['paymentdetail' => $pay]);
    }
}
