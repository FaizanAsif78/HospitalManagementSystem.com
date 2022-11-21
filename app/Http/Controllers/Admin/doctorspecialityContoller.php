<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctorspeciality;

class doctorspecialityContoller extends Controller
{
    function doctorspeciallitypage(){
        return view('dashboard/DoctorSpeciality/doctorspecial');
    }
    function specialityinert(Request $request){
        
        $request->validate([
                    "speciality"=>'required'
        ]);
            $inertspeciality =new Doctorspeciality;
            $inertspeciality->doctor_speciality=$request['speciality']." "."Specialist";
            $inertspeciality->save();
            return redirect()->back();
        
    }
    function specialityview(){
        $viewspeciality = Doctorspeciality::all();
        $data = compact('viewspeciality');
        return view('dashboard/DoctorSpeciality/viewspeciality')->with($data);
    }
    function specialitydelete($id){
        Doctorspeciality::find($id)->delete();
        return redirect()->back();
    }
    function editview($id){

            $eidtview = Doctorspeciality::find($id);
            $data = compact('eidtview');
            return view('dashboard/DoctorSpeciality/updatespeciality')->with($data);
            
    }
    function specialityupdate(Request $request,$id ){
        $update = Doctorspeciality::find($id);
        $update->doctor_speciality=$request['updatespeciality'];
        $update->save();
        return redirect('/viewdoctorSpeiality');
    }
}
