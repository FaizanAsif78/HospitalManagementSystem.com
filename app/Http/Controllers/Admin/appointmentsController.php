<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;

class appointmentsController extends Controller
{
    function appointmentpage(){
        $appoinments = Booking::join('doctor','Booking.doctor_id','=','doctor.doctor_id')->get();
            $data = compact('appoinments');
        return view('dashboard\Appointmets\viewAppointment')->with($data);
    }


    function patientshow($id){
        echo $id;
        $getpatient = Booking::find($id);
        $data = compact('getpatient');
        return view('dashboard\Appointmets\checkpatient')->with($data);

    }

    function CheckPatient(Request $request,$id){
                    
        echo $id;
        $updatepatient = Booking::find($id);
        $updatepatient->status=$request['status'];
        $updatepatient->save();
        return redirect()->back();
    }
    function GetSpecificDoctorAppointment(){

        $appoinments = Booking::join('doctor','Booking.doctor_id','=','doctor.doctor_id')->get();
            $data = compact('appoinments');
        return view('dashboard\Appointmets\doctorappoinment')->with($data);
    }

}
