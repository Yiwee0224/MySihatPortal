<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Customer;
use App\Models\Labreport;
use DateTime;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class ManageLabReportController extends BaseController
{
    public function viewLR()
    {
        $user = Auth::user();
        $report = LabReport::where('userID', Auth::user()->userID)->get();

        return view('User.LabReport', ['reportDetail' => $report]);
    }

    public function labreport()
    {
        // $report = DB::table('users')
        //     ->join('Customer', 'Customer.customerID', '=', 'users.userID')
        //     ->join('labreport', 'labreport.cusID', '=', 'Customer.cusID')
        //     ->select('userID', 'userName', 'reportTitle', 'reportDate', 'reportDocument')
        //     ->get();


        $report = DB::table('users')
            ->join('labreport', 'labreport.userID', '=', 'users.userID')
            ->select('users.userID', 'users.userName',  'labreport.reportTitle', 'labreport.reportDate', 'labreport.reportDocument')
            ->get();

        $lec_report = DB::table('users')
            ->join('Customer', 'Customer.lecturerID', 'users.userID')
            ->select('customerID', 'userID', 'userName')
            ->get();

        // foreach ($report as $std_report) {
        //     foreach ($lec_report as $lecReport) {
        //         if ($std_report->userID == $lecReport->customerID) {
        //             $std_report->lecName = $lecReport->userName;
        //         }
        //     }
        // }

        return view('ManageLabReport.LabReport', ['reportDetail' => $report]);
    }

    // Download file
    public function downloadFile($file_name)
    {
        //PDF file is stored under project/public/download/info.pdf
        $file = public_path("documents/") . $file_name;
        return response()->download($file, $file_name);
    }

    public function AddLabReport()
    {
        $report = DB::table('users')

            ->join('labreport', 'labreport.userID', '=', 'users.userID')
            ->select('users.userID', 'users.userName', 'labreport.reportTitle', 'labreport.reportDate', 'labreport.reportDocument')
            ->get();

        return view('ManageLabReport.AddLabReport', ['reportDetail' => $report]);
    }

    public function insertnewLR(Request $req)
    {



        //GET FORM INTERFACE
        $cusId = $req->input('userID'); // from admin
        $userName = $req->input('userName'); //from admin
        $reportDoc = $req->file('reportDocument');
        // dd($reportDoc);
        $req->file('reportDocument');
        // var_dump($req->file('reportDocument'));

        $customer = User::where('userID', $cusId)->first(); //query
        $user = User::where('userName', $userName)->first(); //query

        // $name = $req->file('reportDocument')->getClientOriginalName();


        $uniqid = Str::random(9) . ".pdf";
        $path = $reportDoc->move(public_path('documents/'), $uniqid);

        DB::table('LabReport')->insert([
            'userID' => $customer->userID, //access from cus table
            'userName' => $user->userName, //from user table
            'reportTitle' => $req->reportTitle, // from interface
            'reportDate' => $req->reportDate, // from interface
            'reportDocument' => $uniqid,
        ]);

        // $reportDetail = DB::table('LabReport')
        //     ->join('users', 'users.userID', '=', 'LabReport.userID')
        //     ->select("appointment.userID", "users.userName", "LabReport.reportTitle", "LabReport.reportDate", "LabReport.reportDocument")
        //     ->get();

        $reportDetail = DB::table('LabReport')
            ->join('users', 'users.userID', '=', 'LabReport.userID')
            ->select("LabReport.userID", "users.userName", "LabReport.reportTitle", "LabReport.reportDate", "LabReport.reportDocument")
            ->get();
        return view('ManageLabReport.labreport', ['reportDetail' => $reportDetail]);
    }
}

        // $user = User::where('username', $userName)->first();
        // $userId = $user->id;

        // DB::table('Labreport')

        //     ->insert([
        //         'userName' => $req->userName,
        //         'reportTitle' => $req->reportTitle,
        //         'reportDate' => $req->reportDate,
        //     ]);
