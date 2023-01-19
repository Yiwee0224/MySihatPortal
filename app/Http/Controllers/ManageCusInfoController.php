<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
// use Redirect;
// use Illuminate\Support\Facades\Storage;
// use Illuminate\Support\Facades\Hash;
// use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
// use Illuminate\Foundation\Bus\DispatchesJobs;
// use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\Models\User;
// use Illuminate\Database\Query\JoinClause;
use Illuminate\Routing\Controller as BaseController;

class ManageCusInfoController extends BaseController
{


    public function index()
    {
        $user = Auth::user();

        return view('profile', ['user' => $user]);
    }
    public function updateuser(Request $request)
    {

        $request->validate([
            'userName' => ['required', 'string'],
            'contactNumber' => ['required', 'digit:10'],
            'email' => ['required', 'string'],
        ]);

        $user = User::findOrFail(Auth::user()->id);
        $user->update([
            'userName' => $request->userName,
            'contactNumber' => $request->contactNumber,
            'email' => $request->email,

        ]);
        $user->users()->updateOrCreate(
            [
                'userID' => $user->id,
            ],
            [

                'contactNumber' => $request->contactNumber,
                'email' => $request->email,
            ]
        );
        return redirect()->back()->with('message', 'User Profile Updated');
    }

    public function cusList()
    {
        $customer = DB::table('users')->where('userType', '=', 'customer')->count();
        $admin = DB::table('users')->where('userType', '=', 'admin')->count();
        $results = DB::table('users')->select('users.*')->get();

        return view('ManageCustomerInfo.cusList', ['datas' => $results, 'customer' => $customer, 'admin' => $admin]);
    }

    public function cusProfile($id)
    {
        $results = DB::table('users')->select('users.*')->where('users.userID', '=', $id)->get();
        return view('ManageCustomerInfo.CusProfile', ['datas' => $results]);
    }
    public function newCus()
    {
        return view('ManageCustomerInfo.newCus');
    }

    public function ShowupdateCus($id)
    {
        $results = DB::table('users')->select('users.*')->where('users.userID', '=', $id)->get();

        return view('ManageCustomerInfo.updateCus', ['datas' => $results]);
    }


    public function updateUserProfile(request $req, $id)
    {

        $data = User::find($id);
        $data->userName = $req->userName;
        $data->email = $req->email;
        $data->contactNumber = $req->contactNumber;
        $data->userType = $req->userType;

        $data->save();

        return redirect('ManageCustomerInfo/CusList');
    }

    public function insertcusProfile(request $req)
    {
        $det = User::find($req->userID);

        if (!$det) {


            $pass = bcrypt($req->password);
            DB::table('users')->insert([
                'userID' => $req->userID,
                'userName' => $req->userName,
                'contactNumber' => $req->contactNumber,
                'email' => $req->email,
                'userType' => $req->userType,
                'password' => $pass,

            ]);
        }

        return redirect('/ManageCustomerInfo/CusList');
    }
}
