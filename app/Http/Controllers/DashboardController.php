<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
use App\Category;
use App\User;
use App\Supplier;
use App\Product;
use App\Order;
use App\Supply;
use App\Role;

class DashboardController extends Controller
{
    public function __construct()
    {
         $this->middleware('auth:web');
    }
    public function index()
    {
        $data =  array();
        $data['title'] = 'Dashboard';
        
        // $data['suppliers'] = Supplier::count();
        // $data['categories'] = Category::count();
        // $data['tsup'] = Supply::count();
 

        // $data['tsupplies']=Supply::where('created_at', '>=', Carbon::now()->subDays(14))->count();
     
 
        // //=========================================================
        // $dcollect = collect();
        // foreach( range( 0, 13 ) as $i )
        // {
        //     $date = Carbon::now()->subDays( $i )->format( 'Y-m-d' );
        //     $dcollect->put($date,0);
        // }
        // $data['supplies']=Supply::where( 'created_at', '>=', Carbon::now()->subDays(14))
        //         ->orderBy('date','desc')->groupBy(DB::raw('Date(created_at)'))
        //         ->get(array(DB::raw('Date(created_at) as date'),DB::raw('COUNT(*) as "count"')))
        //         ->pluck( 'count', 'date' );
        // $dgraph = $dcollect->merge( $data['supplies'] ); 
        // $data['dgraph']=$dgraph;
        // $dcount = $sdate = [];
        // foreach ($data['dgraph'] as $count)
        // {
        //    array_push($dcount, $count);
        // }
        // $data['dcount'] = implode(",",$dcount);
        //=========================================================

        
        return view('pages.dashboard',$data);
    }
}
