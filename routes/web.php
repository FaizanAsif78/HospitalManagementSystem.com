<?php

use Illuminate\Support\Facades\Route;

// Backend Controller
use App\Http\Controllers\Admin\AuthenticationController;
use App\Http\Controllers\Admin\doctorspecialityContoller;
use App\Http\Controllers\Admin\doctorController;
use App\Http\Controllers\Admin\appointmentsController;

// frontend/ Controllers
use App\Http\Controllers\User\userdoctorController;
use App\Http\Controllers\User\UserAuthenticationContrller;


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
// Route::get('/hello',function(){
// return view('user/elements');
// });
Route::get('/tables',function(){
return view('dashboard/tables');
});


///////////////////////////////////////////// admin Routess
Route::get('/login',[AuthenticationController::class,'loginPage'] );
Route::post('/login',[AuthenticationController::class,'loginadmin'] );
Route::get('/index', function () {
    return view('dashboard/index');
})->name('admin.dashboard');
//////////////////////// Doctorspeciality Routes
Route::get('/doctorSpeiality',[doctorspecialityContoller::class,'doctorspeciallitypage'])->name('doctorspecialitypage');
Route::post('/doctorSpeiality',[doctorspecialityContoller::class,'specialityinert']);
Route::get('/viewdoctorSpeiality',[doctorspecialityContoller::class,'specialityview'])->name('viewspeciality');
Route::get('/deletedoctorSpeiality/{id}',[doctorspecialityContoller::class,'specialitydelete']);
Route::get('/updatedoctorSpeiality/{id}',[doctorspecialityContoller::class,'editview']);
Route::post('/updatedoctorSpeiality/{id}',[doctorspecialityContoller::class,'specialityupdate']);


//////////////// Doctor Routes
Route::get('admindoctor',[doctorController::class,'adminDoctorPage'])->name('admin.doctor');
Route::post('admindoctor',[doctorController::class,'doctorinert']);
Route::get('viewadmindoctor',[doctorController::class,'doctorview'])->name('viewadmin.doctor');
Route::get('admindoctordelete/{id}',[doctorController::class,'doctordelete']);
Route::get('admindoctorupdate/{id}',[doctorController::class,'editviewdoctor']);
Route::post('admindoctorupdate/{id}',[doctorController::class,'doctorupdate']);




////////// user Doctor Routs
Route::get('/',[userdoctorController::class,'Userfrontpage'])->name('home.page');
Route::post('/',[userdoctorController::class,'appoinmetbook1']);
Route::get('/userdoctors',[userdoctorController::class,'userdoctorpage'])->name('doctor.page');
Route::get('/singlrdoc/{id}',[UserAuthenticationContrller::class,'singledoctor']);
Route::post('/singlrdoc/{id}',[UserAuthenticationContrller::class,'appoinmetbook']);

////////////////////// User Login Routes
Route::get('/Userlogin',[UserAuthenticationContrller::class,'loginpage'])->name('user.login');
Route::post('/Userlogin',[UserAuthenticationContrller::class,'loginintohome']);
Route::get('/Usersignup',[UserAuthenticationContrller::class,'signpage'])->name('user.signup');
Route::get('/Usersprofile',[UserAuthenticationContrller::class,'userprofile'])->name('user.profile');

Route::get('/logoutuser',[UserAuthenticationContrller::class,'logoutuser'])->name('user.logout');
///////////////////// Appointment routes
Route::get('/appointment',[UserAuthenticationContrller::class,'UserAppointments'])->name('user.appointment');
Route::get('/doctorappointment',[appointmentsController::class,'GetSpecificDoctorAppointment'])->name('doctor.appointment');


////////////////////// Admin User Routes
Route::get('/adminusers',[AuthenticationController::class,'adminuser'])->name('admin.user');
Route::post('/adminusers',[AuthenticationController::class,'insertadminuser']);
Route::get('/viewadminuser',[AuthenticationController::class,'viewadminuser'])->name('view.adminuser');
////////////////////// Admin Appointsmets Routes
Route::group(['prefix'=>'Appointsment'],function(){
Route::get('viewappointment',[appointmentsController::class,'appointmentpage'])->name('Appointment.view');
Route::get('viewpatient/{id}',[appointmentsController::class,'patientshow']);
Route::post('viewpatient/{id}',[appointmentsController::class,'CheckPatient']);

});


