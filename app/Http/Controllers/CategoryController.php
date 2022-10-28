<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use Response;
class CategoryController extends Controller
{
    public function showCategories()
    {
        $data = array();
        $data['title'] =  'Category Management';
        return view('pages.categories',$data);
    }
    public function listCategories(Request $request)
    {
        $columns = array(
            0 =>'id',
            1=> 'name',
            2=> 'created_at',
            3=> 'status',
            4=> 'action'
        );
        
        $totalData = Category::count();
        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');
        
       
        if(empty($request->input('search.value')))
        {
            $posts = Category::offset($start)
                    ->limit($limit)
                    ->orderBy($order,$dir)
                    ->get();
            $totalFiltered =  Category::count();
        }
        else{
            $search = $request->input('search.value');
            $posts = Category::where(function($q) use ($search){
                        $q->where('name', 'like', "%{$search}%")->orWhere('created_at', 'like', "%{$search}%");
                    })
                    ->offset($start)
                    ->limit($limit)
                    ->orderBy($order, $dir)
                    ->get();
            $totalFiltered = Category::where(function($q) use ($search){
                        $q->where('name', 'like', "%{$search}%")->orWhere('created_at', 'like', "%{$search}%");
                    })
                    ->count();
        }
        $data = array();

    if($posts){
        foreach($posts as $r)
        {   
            $nestedData['a'] = $r->id;
            $nestedData['b'] = $r->name;
            $nestedData['c'] = date('d,M Y', strtotime($r->created_at));
            $sts = ($r->status==1)?
                 '<div class="btn-group"><div class="badge badge-success dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="true" style="color:white"><span>Active</span></a>
                <div class="dropdown-menu" x-placement="top-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(4px, -165px, 0px);">
                    <a class="dropdown-item csts" data-cid="'.$r->id.'" data-sts="0" href="#">Disable</a></div>
                </div>
                 </div>':
                '<div class="btn-group"><div class="badge badge-danger dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="true" style="color:white"><span>Disabled</span></a>
                <div class="dropdown-menu" x-placement="top-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(4px, -165px, 0px);">
                    <a class="dropdown-item csts" data-cid="'.$r->id.'" data-sts="1" href="#">Active</a></div>
                </div>
                </div>';
            
            $nestedData['d']= $sts;
 
            $action = '<a class="editmdl" data-cid="'.$r->id.'"  data-cimg="'.asset($r->image).'" data-nm="'.$r->name.'" style="padding: 3px;color:#110436"><i class="ficon fa fa-edit info"></i></a>';

            $action .= '<a href="#" class="delbs" data-did="'.$r->id.'" data-ttl="'.$r->name.'" style="padding: 3px;color:red"><i class="ficon fa fa-trash danger"></i></a>'; 
            $nestedData['e'] = $action; 


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
    public function saveCategory(Request $request)
    {
//        $this->validate($request,
//        [
//            'first_name' => 'required|string|max:255',
//            'last_name' => 'required|string|max:255',
//        ]);
        $exists = Category::where('name',$request->name)->exists();
        if($exists)
        {
            $msg = 'Category Already Exists';
            $typ = 'error';

        }else{
            $category = new Category;
            $category->name = $request->name;
            $category->save();
            $msg = 'Category Information Saved Successfully';
            $typ = 'success';
            
        }
        $notification = array(
             'message' => $msg,
             'type' => $typ
         );
        return Response::json($notification);
    }
    public function updateCategory(Request $request)
    {
//        $this->validate($request,
//        [
//            'first_name' => 'required|string|max:255',
//            'last_name' => 'required|string|max:255',
//        ]);
        $exists = Category::where('name',$request->name)->where('id','!=',$request->cid)->exists();
        if($exists){
            $msg = 'Category Already Exists';
            $typ = 'error';
        }else{
            $category = Category::find($request->cid);
            $category->name = $request->uname;
            $category->save();
            $msg = 'Category Information Updated Successfully';
            $typ = 'success';
            
        }
        $notification = array(
             'message' => $msg,
             'type' => $typ
         );
        return Response::json($notification);
    }
    public function statusCategory(Request $request)
    {
        $user= Category::find($request->cid);
        $user->status = $request->sts;
        $user->save();
        if($request->sts==1){
            $msg= 'Category Activated';
            $typ= 'success';
        }else{
            $msg= 'Category Inactivated';
            $typ= 'warning';
        }
        $notification = array(
                'message' => $msg,
                'type' => $typ
            );
        return Response::json($notification);
    }
    public function delCategory(Request $request)
    {
        $agent = Category::find($request->did);
        $agent->delete();
        $notification = array(
                 'message' => 'Category Deleted Successfully',
                 'type' => 'success'
             );
        return Response::json($notification);
    }
}
