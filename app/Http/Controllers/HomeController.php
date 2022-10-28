<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\About;
use App\Duty;
use App\Heading;
use App\Service;
use App\Contact;
use App\CompanyInfo;
use Auth;
use Response;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth:web');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data =  array();
        
        $data['abouts'] = About::all();
        $data['duties'] = Duty::all();
        $data['headings'] = Heading::all();
        $data['services'] = Service::all();
        $data['info']=CompanyInfo::where('id',1)->first();
        // dd($data['info']);

        return view('user.index',$data);
    }

    public function contactPost(Request $request)
    {
        $up = new Contact;
        $up->name =  $request->name;
        $up->email =  $request->email;
        $up->subject =  $request->subject;
        $up->message =  $request->message;
   
        $up->save();

        $notification = array(
                'message' => 'Message has sent Successfully',
                'type' => 'success'
        );
        
        return Response::json($notification);  
    }
}
    

