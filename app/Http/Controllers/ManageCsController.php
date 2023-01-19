<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Cs;
use Carbon\Carbon;

class ManageCsController extends BaseController
{

    public function Cs()
    {
        $user = Auth::user();
        $cs = Cs::where('userID', Auth::user()->userID)->get();

        return view('User.Cslist', ['Cs' => $cs]);
    }
    public function View()
    {
        $user = Auth::user();
        $cs = Cs::where('userID', Auth::user()->userID)->get();

        return view('User.viewlist', ['Cs' => $cs]);
    }


    public function ContactUs()
    {
        $user = Auth::user()->name;

        return view('ManageCs.Cs', ['user' => $user]);
    }
    public function insertCs(Request  $req)
    {

        // $user = Auth::user()->name;

        if (Auth::check()) {
            // Get the authenticated user
            $user = Auth::user()->userID;

            // Access user data
            echo $user;
            // $date = Carbon::now();
            // $date = Carbon::createFromFormat('d/m/Y', $req->apDate)->format('Y-m-d');
            // echo $date;


            DB::table('cslist')->insert([
                'userID' => $user,
                'CsTitle' => $req->CsTitle, // from interface
                'CsSolution' => $req->CsSolution, // from interface
            ]);

            $cs = DB::table('cslist')
                ->select("cslist.userID", "cslist.CsTitle", "cslist.CsSolution")
                ->get();
        }
        return view('ManageCs.CsSuccess', ['Cs' => $cs]);
    }
    public function Viewlist($userID)
    {
        $cs = DB::table('users')
            ->join('cslist', 'cslist.userID', '=', 'users.userID')
            ->select('users.userID', 'users.userName', 'cslist.CsTitle', 'cslist.CsSolution', 'users.email')
            ->where('Users.userID', '=', $userID)
            ->get();


        return view('ManageCs.viewlist', ['Cs' => $cs]);
    }

    public function CsList()
    {

        $cs = DB::table('users')
            ->join('cslist', 'cslist.userID', '=', 'users.userID')
            ->select('users.userID', 'users.userName', 'cslist.CsTitle', 'cslist.CsSolution', 'users.email')
            ->get();

        $lec_report = DB::table('users')
            ->join('Customer', 'Customer.lecturerID', 'users.userID')
            ->select('customerID', 'userID', 'userName')
            ->get();

        foreach ($cs as $Cs) {
            foreach ($lec_report as $lecReport) {
                if ($Cs->userID == $lecReport->customerID) {
                    $Cs->lecName = $lecReport->userName;
                }
            }
        }
        return view('ManageCs.Cslist', ['Cs' => $cs]);
    }
    public function UpdateCs($userID)
    {


        $results = DB::table('users')->select('users.*')->where('users.userID', '=', $userID)

            ->join('Cslist', 'Cslist.userID', '=', 'users.userID')
            ->select('users.userID', 'users.userName', 'cslist.CsTitle', 'cslist.CsSolution', 'users.email')
            ->get();


        return view('ManageCs.UpdateCs', ['Cs' => $results]);
    }
    public function Update(request $req, $userID)
    {

        $cs = DB::table('users')
            ->join('Cslist', 'Cslist.userID', '=', 'users.userID')
            ->select('users.userID', 'users.userName', 'cslist.CsTitle', 'cslist.CsSolution', 'users.email')
            ->get();

        // $cs->userName = $req->userName;
        // $cs->email = $req->email;
        // $cs->CsTitle = $req->CsTitle;

        // $cs->CsDate = $req->CsDate;

        $cs = Cs::find($userID);
        $cs->CsTitle = $req->CsTitle;
        $cs->CsSolution = $req->CsSolution;
        $cs->save();

        return redirect('ManageCs/Cslist');
    }
}
