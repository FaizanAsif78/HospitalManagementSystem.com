<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;

class AuthenticationController extends Controller
{
    ////////////////////    admin Login Module Modules 
    function loginPage()
    {
        return view('dashboard_auth/login');
    }
    function loginadmin(Request $request)
    {

        // echo "fghjikopl;";
        $adminemail =   $request['admin_email'];
        $adminpass =  $request['admin_password'];
        $querys = Admin::all()->where('email', '=', $adminemail)->where('password', '=', $adminpass)->count();
       
        if ($querys > 0) {
            session()->put('$email', $request['admin_email']);
            $vals = session()->all();
            // print_r($vals);
            return redirect('/index');
        } else {
            return redirect('/login');
        }
    }
    function adminuser(){
        return view('dashboard/Users/adminuser');
    }
    function insertadminuser(Request $request){
        $adminemail=$request['adminuser_email'];
        $filename  = time() . "adminuser." . $request->file('adminuser_img')->getClientOriginalExtension();

        $request->file('adminuser_img')->storeAs('public/adminuserimg/',$filename);
        $insertadminuser = new Admin();
        $insertadminuser->email=$request['adminuser_email'];
        $insertadminuser->password=$request['adminuser_password'];
        $insertadminuser->address=$request['adminuser_address'];
        $insertadminuser->phone=$request['adminuser_number'];
        $insertadminuser->role=$request['role'];
        $insertadminuser->admin_img=$filename;
        $insertadminuser->username=$request['adminuser_name'];
        $insertadminuser->save();
        return redirect()->back()->with('adminusermsg','User Has Been Created Successfully');

    }
    function viewadminuser(){
       $viewadmins =  Admin::all();
       $data = compact('viewadmins');
       return view('dashboard/Users/viewadminuser')->with($data);
    }
}
