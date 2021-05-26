<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Admin;

class All extends Controller
{
    //
    function feedback(Request $req){
        Contact::create([
            "name"=>$req->name,
            "email"=>$req->email,
            "msg"=>$req->msg,
            "date"=>date("Y-m-d")
        ]);
        return response("good",200);
    }

    function adminlogin(Request $req){
        $check=Admin::where('email',$req->email)->value('password');
             

        if($req->password==$check){
         $req->session()->put('adminemail', $req->email);
      
         return response()->json(['msg'=>'Valid'], 200);
        }
        return response()->json(['err'=>"Invalid email or password!"],200);
       
    }

    function admin(Request $req){
        $array=[];
        $ids=Contact::pluck('id');


        foreach($ids as $aa){
            $array[$aa]['email']=Contact::where('id',$aa)->first('email')->email;
            $array[$aa]['about']=Contact::where('id',$aa)->first('msg')->msg;
            $array[$aa]['date']=Contact::where('id',$aa)->first('date')->date;
            $array[$aa]['id']=Contact::where('id',$aa)->first('id')->id;
        }
        return view('adashboard',["data"=>array_reverse($array)]);
    }

    function admin_logout(Request $request){
        $request->session()->forget('adminemail');
        return redirect('/admin/dashboard');
     }
    

}
