<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\CompanyInfo;
use Hash;
use Response;
class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function profile()
    {
        $data = array();
        $data['info'] = User::where('id',Auth::user()->id)->first();
        $data['company_info']=CompanyInfo::where('id',1)->first();
        $data['title'] = 'Admin profile';
        return view('pages.profile',$data);
    }
    public function updateBasic(Request $request)
    {
        $up = User::find(Auth::user()->id);
        $up->name =  $request->name;
        $up->email =  $request->email;
        $image=$request->file('new_img');
        if($image)
        {
            $image_name=rand(1000,3000).$up->name;
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/img/admin/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if($success)
            {
                $up->image=$image_url;
                if(file_exists($request->old_img))
                {
                    unlink($request->old_img);
                }
            }
        }
        $up->save();
        $notification = array(
                'message' => 'Basic Info Updated Successfully',
                'type' => 'success',
                'img' => $up->image
        );
        return Response::json($notification);  
    }
    public function updatePass(Request $request)
    {
        $upPass = User::find(Auth::user()->id);
        $succ = '';
        if(Hash::check($request->old_pass,$upPass->password))
        {
            if($request->new_pass==$request->con_pass)
            {
               $upPass->password =  Hash::make($request->new_pass);
               $upPass->save();
               $msg = 'Password Changed Successfully';
               $typ = $succ = 'success';
            }else{
               $msg = 'Confirmed Password is not Matched';
               $typ = 'warning'; 
            }
        }else{
            $msg = 'Your Old Password is not Correct';
            $typ = 'error'; 
        }
        $notification = array(
                'message' => $msg,
                'type' => $typ,
                'succ' =>$succ
        );
        return Response::json($notification);  
    }

        public function updateCompany(Request $request)
    {
        $up = CompanyInfo::find(1);
        $up->address =  $request->adrs;
        $up->email =  $request->mail;
        $up->phone =  $request->phone;
        // dd($up);
        $up->save();
        $notification = array(
                'message' => 'Company Info Updated Successfully',
                'type' => 'success'
        );
        return Response::json($notification);  
    }
}
