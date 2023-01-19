<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Apt;
use Carbon\Carbon;

class ManageAppointmentController extends BaseController
{


    public function AptHis()
    {
        $user = Auth::user();
        $Apt = Apt::where('userID', Auth::user()->userID)->get();

        return view('User.AptHis', ['Apt' => $Apt]);
    }

    public function HisDet()
    {
        $user = Auth::user();
        $Apt = Apt::where('userID', Auth::user()->userID)->get();

        return view('User.HisDet', ['Apt' => $Apt]);
    }
    public function appointment()
    {

        return view('ManageAppointment.Appointment');
    }
    public function createapt()
    {
        $user = Auth::user()->name;
        return view('ManageAppointment.CreateApt', ['user' => $user]);
    }
    public function insertapt(Request  $req)
    {

        // $user = Auth::user()->name;

        if (Auth::check()) {
            // Get the authenticated user
            $user = Auth::user()->userID;

            // Access user data

            // echo $user->userName;
            // echo $user->email;
            // echo $user->contactNumber;

            // $table->date("apDate")->nullable();
            // $table->string('apTime');
            // $table->string('apName');
            // $table->unsignedInteger('cusID');

            //cusID -> customer table, find ID , get other data
            // 'userName' => $req->userName,
            // 'contactNumber' => $req->contactNumber,
            // 'email' => $req->email,
            //     $apt = DB::table('users')
            //     ->join('Customer', 'Customer.customerID', '=', 'users.userID')
            //     ->join('appointment', 'appointment.cusID', '=', 'Customer.cusID')
            //     ->select('userID', 'userName', 'apName', 'apDate', 'apTime', 'contactNumber', 'email')
            //     ->get();

            // $det = Apt::find($req->userID);
            // if (!$det) {
            //     $date = Carbon::createFromFormat('d/m/Y', $req->apDate)->format('Y-m-d');
            //
            $date = Carbon::createFromFormat('d/m/Y', $req->apDate)->format('Y-m-d');

            // $name = $user->userName;
            // $email = $user->email;

            DB::table('appointment')->insert([
                'userID' => $user,
                'apDate' => $date, // from interface
                'apTime' => $req->apTime, // from interface
                'apPlace' => $req->apPlace,
                'apName' => $req->apName,
            ]);

            $apt = DB::table('appointment')
                ->select("appointment.userID", "appointment.apDate", "appointment.apTime", "appointment.apName", "appointment.apPlace")
                ->get();
        }
        return view('ManageAppointment.AptSucess', ['Apt' => $apt]);
    }
    public function aptlist()
    {

        $apt = DB::table('users')
            ->join('appointment', 'appointment.userID', '=', 'users.userID')
            ->select('users.userID', 'users.userName', 'users.contactNumber', 'users.email', 'appointment.apName', 'appointment.apDate', 'appointment.apTime', "appointment.apPlace")
            ->get();

        // $apt = DB::table('users')
        //     ->join('Customer', 'Customer.customerID', '=', 'users.userID')
        //     ->join('appointment', 'appointment.cusID', '=', 'Customer.cusID')
        //     ->select('userID', 'userName', 'apName', 'apDate', 'apTime', 'email')
        //     ->get();

        $lec_report = DB::table('users')
            ->join('Customer', 'Customer.lecturerID', 'users.userID')
            ->select('customerID', 'userID', 'userName')
            ->get();

        foreach ($apt as $Aptt) {
            foreach ($lec_report as $lecReport) {
                if ($Aptt->userID == $lecReport->customerID) {
                    $Aptt->lecName = $lecReport->userName;
                }
            }
        }

        return view('ManageAppointment.AptList', ['Apt' => $apt]);
    }
    public function insertcusProfile(request $req)
    {

        return redirect('/ManageAppointment/Aptlist');
    }
    public function aptdetail($userID)
    {
        $apt = DB::table('users')
            ->join('appointment', 'appointment.userID', '=', 'users.userID')
            ->select('users.userID', 'users.userName', 'appointment.apName', 'appointment.apDate', 'appointment.apTime', 'users.email', "appointment.apPlace")
            ->where('Users.userID', '=', $userID)
            ->get();

        return view('ManageAppointment.AptDetail', ['Apt' => $apt]);
    }

    public function UpdateApt($userID)
    {


        $results = DB::table('users')->select('users.*')->where('users.userID', '=', $userID)

            ->join('appointment', 'appointment.userID', '=',  'users.userID')
            ->select('users.userID', 'users.userName', 'appointment.apName', 'appointment.apDate', 'appointment.apTime', 'users.email', "appointment.apPlace")
            ->get();


        return view('ManageAppointment.UpdateApt', ['Apt' => $results]);
    }
    public function Update(request $req, $userID)
    {

        $apt = DB::table('users')
            ->join('appointment', 'appointment.userID', '=', 'users.userID')
            ->select('users.userID', 'users.userName', 'appointment.apName', 'appointment.apDate', 'appointment.apTime', 'users.email', "appointment.apPlace")
            ->get();

        $apt = Apt::find($userID);
        $apt->apName = $req->apName;
        $apt->apDate = $req->apDate;
        $apt->apTime = $req->apTime;
        $apt->apPlace = $req->apPlace;
        $apt->save();

        return redirect('ManageAppointment/AptList');
    }
}
