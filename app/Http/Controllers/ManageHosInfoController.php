<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ManageHosInfoController extends BaseController
{

    public function hospitalInfo()
    {

        return view('ManageHospitalInfo.HospitalInfo');
    }
    public function ContactUs()
    {

        return view('ManageHospitalInfo.Cs');
    }
}

