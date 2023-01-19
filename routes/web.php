<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ManageCusInfoController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\DashBoardController;
use App\Models\Payment;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//register


Route::get('/', function () {
    return view('welcome');
});


Route::get('/download_files/{file_name}', 'App\Http\Controllers\ManagePaymentController@downloadFile');

/*exampleRoute::get('/managePSMEvaluation/managepsmevaluation', [ManagePSMEvaluationController::class, 'showPSMEvaluation']);*/


//Route::group(['middleware' => ['cusMid', 'auth']], function () {});
Route::get('/ManageLabReport/LabReport', 'App\Http\Controllers\ManageLabReportController@labreport');
Route::get('/download_files/{file_name}', 'App\Http\Controllers\ManageLabReportController@downloadFile');
Route::get('/ManageLabReport/AddLabReport', 'App\Http\Controllers\ManageLabReportController@AddLabReport');
Route::post('/ManageLabReport/new', 'App\Http\Controllers\ManageLabReportController@insertnewLR');
Route::get('/User/LabReport', 'App\Http\Controllers\ManageLabReportController@viewLR');

Route::get('/ManageHosInfo/HospitalInfo', 'App\Http\Controllers\ManageHosInfoController@hospitalInfo');

Route::get('/ManageAppointment/Appointment', 'App\Http\Controllers\ManageAppointmentController@appointment');

Route::get('/ManageAppointment/AptList', 'App\Http\Controllers\ManageAppointmentController@aptlist');
Route::get('/ManageAppointment/AptDetail/{userID}', 'App\Http\Controllers\ManageAppointmentController@aptdetail');

Route::get('/ManageAppointment/UpdateApt/{userID}', 'App\Http\Controllers\ManageAppointmentController@UpdateApt');
Route::post('/ManageAppointment/update/{userID}', 'App\Http\Controllers\ManageAppointmentController@Update');

Route::get('/ManageHealthContent/HealthContent', 'App\Http\Controllers\ManageHealthContentController@healthContent');
Route::get('/ManageCustomerInfo/CusProfile/{id}', [ManageCusInfoController::class, 'CusProfile'])->name("User.CusProfile");



//Auth::routes();

//For logged in users
Route::group(['middleware' => ['cusMid', 'auth']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/profile', [App\Http\Controllers\ManageCusInfoController::class, 'index'])->name('profile');
    Route::post('/profile', [App\Http\Controllers\ManageCusInfoController::class, 'updateuser']);

    //apt

    Route::get('/ManageAppointment/CreateApt', 'App\Http\Controllers\ManageAppointmentController@createapt');
    Route::post('/ManageAppointment/new', 'App\Http\Controllers\ManageAppointmentController@insertApt');
    Route::get('/User/AptHis', 'App\Http\Controllers\ManageAppointmentController@AptHis');
    Route::get('/User/HisDet/{id}', 'App\Http\Controllers\ManageAppointmentController@HisDet');
    //labreport

    //contact us
    Route::get('/ManageCs/Cs', 'App\Http\Controllers\ManageCsController@ContactUs');
    Route::post('/ManageCs/new', 'App\Http\Controllers\ManageCsController@insertCs');
    Route::get('/User/Cslist', 'App\Http\Controllers\ManageCsController@Cs');
    Route::get('/User/viewlist/{userID}', 'App\Http\Controllers\ManageCsController@view');
    //payment
    Route::get('/User/Payment', 'App\Http\Controllers\ManagePaymentController@Payment');
    Route::get('/User/PaymentInv/{id}', 'App\Http\Controllers\ManagePaymentController@ViewInv');
});

Route::group(['middleware' => ['adminMid', 'auth']], function () {
    // Route::get('/dashboard', [App\Http\Controllers\DashBoardController::class, 'index']);
    Route::get('/dashboard', [DashBoardController::class, 'index']);

    //manage user
    Route::get('/ManageCustomerInfo/CusList', [ManageCusInfoController::class, 'cusList'])->name("User.CusList");
    Route::get('/ManageCustomerInfo/newCus', [ManageCusInfoController::class, 'newCus'])->name("User.newCus");
    Route::get('/ManageCustomerInfo/CusProfile/{id}', [ManageCusInfoController::class, 'CusProfile'])->name("User.CusProfile");
    Route::get('/ManageCustomerInfo/UpdateCus/{id}', [ManageCusInfoController::class, 'ShowupdateCus'])->name("User.UpdateCus");
    Route::post('/ManageCustomerInfo/new', 'App\Http\Controllers\ManageCusInfoController@insertcusProfile');
    Route::post('/ManageCustomerInfo/updateUserProfile/{id}', 'App\Http\Controllers\ManageCusInfoController@updateUserProfile');

    //contact Us
    Route::get('/ManageCs/Cslist', 'App\Http\Controllers\ManageCsController@CsList');
    Route::get('/ManageCs/viewlist/{userID}', 'App\Http\Controllers\ManageCsController@viewlist');
    Route::get('/ManageCs/UpdateCs/{userID}', 'App\Http\Controllers\ManageCsController@UpdateCs');
    Route::post('/ManageCs/update/{userID}', 'App\Http\Controllers\ManageCsController@Update');
    //apt

    //labreport

    //payment
    Route::get('/ManagePayment/PaymentList', [ManagePaymentController::class, 'PaymentList'])->name("Payment.PaymentList");
    Route::get('/ManagePayment/PaymentList', 'App\Http\Controllers\ManagePaymentController@PaymentList');
    Route::get('/ManagePayment/PaymentInvoice/{userID}', 'App\Http\Controllers\ManagePaymentController@Viewplist');
    Route::get('/ManagePayment/Addpayment', 'App\Http\Controllers\ManagePaymentController@Addpayment');
    Route::post('/ManagePayment/new', 'App\Http\Controllers\ManagePaymentController@insertpayment');
    Route::post('/ManagePayment/generate', 'App\Http\Controllers\ManagePaymentController@generate');
    Route::post('/download/ManagePayment/PaymentInvoice/{id}', function ($id) {
        $pay = Payment::find($id);

        return view('ManagePayment.PaymentInvoice', ['paymentdetail' => $pay]);
    });
    // Route::post('/download/payment/invoice/{id}', function ($id) {
    //     $payment = Payment::find($id);

    //     // Convert payment data to PDF using DOMPDF or Snappy
    //     $pdf = PDF::loadView('payment_invoice', ['payment' => $payment]);

    //     // Return the PDF as a download response
    //     return $pdf->download('payment_invoice.pdf');
    // });
});
Route::get('/logout', [LogoutController::class, 'perform'])->name('logout.perform');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/downloadPdf', [ManagePaymentController::class, 'downloadPdf']);
