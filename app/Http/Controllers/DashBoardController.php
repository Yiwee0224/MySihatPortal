<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class DashBoardController extends Controller
{
    // Prevent guest from going to dashboard
    public function __construct()
    {
        // $this->middleware('auth');
    }
    public function index()
    {

        // if (Auth::user()->userType  == 'customer') {
        //     return view('home');
        // };
        $adminCount = User::where('userType', 'admin')->count();
        $customerCount = User::where('userType', 'customer')->count();
      
        return view('dashboard', compact('adminCount', 'customerCount'));
        // return view('dashboard');
    }
}
