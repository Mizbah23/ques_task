<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Auth;
use App\About;
use App\Duty;
use App\Heading;
use App\Service;
use App\Contact;
use Response;
use DB;

class AdminController extends Controller
{
        


  
         /////***** Heading *****/////

    public function showHeading()
    {
        $data = array();
        $data['title'] =  'Heading';
        return view('pages.heading',$data);
    }

        public function listHeading(Request $request)
    {
        $columns = array(0 =>'title',1 =>'details',2 =>'created_by',3=>'created_at',4=> 'action');
        $totalData =Heading::count();
        $limit = $request->input('length');$start = $request->input('start');
        $order = $columns[$request->input('order.0.column')]; $dir = $request->input('order.0.dir');
        if(empty($request->input('search.value')))
        {
            $posts = Heading::leftJoin('users','users.id','=','headings.created_by')
                    ->select('users.id','users.name as uname','headings.*')     
                    ->offset($start)->limit($limit)->orderBy($order,$dir)->get();
                    $totalFiltered = Heading::count();
        }
        else{
            $search = $request->input('search.value');
            $posts = Heading::leftJoin('users','users.id','=','headings.created_by')
                    ->select('users.id','users.name as uname','headings.*') 
                    ->where('title', 'like', "%{$search}%")
                    ->orwhere('details', 'like', "%{$search}%")
                    ->orwhere('users.name', 'like', "%{$search}%")
                    ->offset($start)->limit($limit)
                    ->orderBy($order, $dir)->get();
            $totalFiltered = Heading::leftJoin('users','users.id','=','headings.created_by')
                    ->select('users.id','users.name as uname','headings.*') 
                    ->where('title', 'like', "%{$search}%")
                    ->orwhere('details', 'like', "%{$search}%")
                    ->orwhere('users.name', 'like', "%{$search}%")
                    ->count();
        }
        $data = array();

    if($posts){
        foreach($posts as $r)
        {     
            $nestedData['title'] = $r->title;
            $nestedData['details'] = $r->details;
            $nestedData['created_by'] = $r->uname;
      
            $nestedData['created_at']=date('m/d/Y', strtotime($r->created_at));
            $nestedData['action'] = '<a class="editmdl" data-pid="'.$r->id.'" data-pttl="'.$r->title.'" '
                    . 'data-dtl="'.$r->details.'"  style="padding: 4px;"><i class="ficon feather icon-edit success"></i></a> ';
            $data[] = $nestedData;
        }
    }     
        $json_data = array(
            "draw"	      => intval($request->input('draw')),
            "recordsTotal"    => intval($totalData),
            "recordsFiltered" => intval($totalFiltered),
            "data"	      => $data
        );
        echo json_encode($json_data);    
        
    }

       public function saveHeading(Request $request) 
    {
        $events = new Heading;
        $events->title = $request->title;
        $events->details = $request->details;
        $events->created_by = Auth::guard('web')->user()->id;
        
            $events->save();
            $notification = array(
                'message' => 'Heading Section Saved Successfully',
                'type' => 'success'
        );
        return Response::json($notification); 
    }

    public function updateHeading(Request $request)
    {
        $event = Heading::find($request->id);
        $event->title = $request->utitle;
        $event->details = $request->udetails;
        $event->created_by = Auth::guard('web')->user()->id;
        $event->save();
        $msg = 'Heading Section Updated Successfully';$typ = 'success';   
        $notification = array('message' => $msg,'type' => $typ);
        return Response::json($notification); 
    }

    

}