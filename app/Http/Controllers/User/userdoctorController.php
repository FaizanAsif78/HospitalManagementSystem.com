<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user\userdoctor;
use App\Models\Booking;

class userdoctorController extends Controller
{
        function Userfrontpage(){
            $doctorsfet =  userdoctor::all();
        $data = compact('doctorsfet');
            return view('user/index')->with($data);
        }

    function userdoctorpage(){
        $doctorsfet =  userdoctor::all();
        $data = compact('doctorsfet');
        return view('user/doctors')->with($data);
    }
    function appoinmetbook1(Request $request){

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
                $inserbooking->appoint_date=$request['appointmentdate'];
                $inserbooking->save();
                return redirect('/userdoctors');
            }else{
                return redirect()->back()->with('logins_message1','First you Sign Then You can Book Appoinment');
            }

    }
    
}
