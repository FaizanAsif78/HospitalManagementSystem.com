<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Doctorspeciality;
use Illuminate\Support\Facades\DB;
class doctorController extends Controller
{
    function adminDoctorPage(){
        $speciality = Doctorspeciality::all();
        $data = compact('speciality');
        return view('dashboard/Doctor/doctor')->with($data);
    }
    function doctorinert(Request $request){
        
       $demail=$request['D_email'];
         $filename  =time() . "doctor." . $request->file('D_img')->getClientOriginalExtension();
          $request->file('D_img')->storeAs('public/doctorimg',$filename);
         $doctorquery = DB::table('doctor')->where('doctor_email','=',$demail);
            if ($doctorquery->count()>0) {
                return redirect()->back()->with('already1','This doctor is already Register');
            }else {
                $inertdoctor =new Doctor;
                $inertdoctor->doctor_name=$request['D_name'];
                $inertdoctor->doctor_phone=$request['D_phone'];
                $inertdoctor->doctor_email=$request['D_email'];
                $inertdoctor->doctor_speciallist=$request['D_specialist'];
                $inertdoctor->doctor_image=$filename;
                $inertdoctor->doctor_Degree=$request['D_degree'];
                $inertdoctor->doctor_address=$request['D_address'];
                $inertdoctor->save();
                return redirect()->back()->with('successfully1',' doctor Has been created Successfully');
            }
        
    }
    function doctorview(){
        $viewdoctor = Doctor::all();
        $data = compact('viewdoctor');
        return view('dashboard/Doctor/viewdoctor')->with($data);
    }
    function doctordelete($id){
        Doctor::find($id)->delete();
        return redirect()->back();
    }
    function editviewdoctor($id){

            $eidtviewdoctor = Doctor::find($id);
            $data = compact('eidtviewdoctor');
            return view('dashboard/Doctor/doctorupdate')->with($data);
            
    }
    function doctorupdate(Request $request,$id ){
        // $ststus=$request['status'];
        if($request['status']==null){
            $ststus = "0";
        }else{
            $ststus = "1";

        }

        $update = Doctor::find($id);
        $update->doctor_name=$request['upD_name'];
        $update->doctor_phone=$request['upD_phone'];
        $update->doctor_email=$request['upD_email'];
        $update->doctor_address=$request['upD_address'];
        $update->doctor_Degree=$request['upD_degree'];
        $update->doctor_status=$ststus;
        $update->save();
        return redirect('viewadmindoctor');
    }
   
}
