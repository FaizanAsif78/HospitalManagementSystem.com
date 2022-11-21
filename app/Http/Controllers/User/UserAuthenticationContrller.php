<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user;
use App\Models\Admin;
use App\Models\Doctor;
use App\Models\Booking;


class UserAuthenticationContrller extends Controller
{
    function loginpage()
    {
        return view('user_auth/login');
    }
    function signpage()
    {
        return view('user_auth/signup');
    }
    function loginintohome(Request $request)
    {
        $email = $request['user_email'];
        $password = $request['user_password'];

        $query = user::all()->where('email', '=', $email)->where('password', '=', $password);
        $query2 = Admin::all()->where('email', '=', $email)->where('password', '=', $password);
         $query3 = $query2->value('role');
        // echo "<pre>";
        // print_r($query2->toArray());
        // echo "</pre>";

        // print_r($query3);

        if ($query->count() > 0) {
            session()->put('user_email', $email);
            return redirect('/');
        } elseif ($query3 == 'admin') {
            session()->put('user_email', $email);
            return view('dashboard/index');
        } elseif ($query3 == 'doctor') {
            
            session()->put('user_email', $email);
            return view('dashboard\Doctor\doctordashboard');
        } else {
            echo "invalid";
            return redirect('/Userlogin')->with('loginmessage', "Your Login detail Username or password is incorrect");
        }
        // print_r()
    }
    function logoutuser(){
        session()->forget('user_email');
        return redirect('/Userlogin');

    }

    function singledoctor($id){

        $getdocs = Doctor::find($id);
        $data = compact('getdocs');
        // echo $id;
    return view('user/single_doctor')->with($data);
    }

    function appoinmetbook(Request $request){

        echo   $useremail = session()->get('user_email');
            if (session()->has('user_email')) {
                $inserbooking = new Booking;
                $inserbooking->doctor_id=$request['D_specialist_id'];
                $inserbooking->patient_name=$request['patient_name'];
                $inserbooking->patient_no=$request['patient_phone'];
                $inserbooking->patiet_email=$request['patient_email'];
                $inserbooking->patiet_age=$request['patient_age'];
                $inserbooking->user_email=$useremail;
                $inserbooking->patient_desease=$request['patient_disease'];
                $inserbooking->appoint_date=$request['appointdate'];
                $inserbooking->save();
                return redirect('/userdoctors')->with('ok','23456789');
            }else{
                return redirect()->back()->with('logins_message','First you Sign Then You can Book Appoinment');
            }

    }
    function userprofile(){

          $useremail = session()->get('user_email');
        $userget = user::all()->where('email',$useremail);
        $data = compact('userget');
        return view('user/user_profile')->with($data);
    }
    function UserAppointments(){

        $Appoints=Booking::join('Doctor','Booking.doctor_id',"=",'Doctor.doctor_id')->get();
        // print_r($Appoints->toArray());
        $data= compact('Appoints');
        return view('/user/Appoinments')->with($data);

    }
}
