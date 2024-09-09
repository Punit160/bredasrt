<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Product;
use App\Models\User;
use DB;
use Session;

class CallController extends Controller
{
    public function index_kusum(Request $request){
         $data['role'] = $request->session()->get('role');
         $data['state'] = $request->session()->get('state');
        return view('kusum.pages.dashboard', $data);
    }
    
    
     public function all_complaints(Request $request){
         $data['role'] = $request->session()->get('role');
         $data['state'] = $request->session()->get('state');
         $data['kashmir_swp_com_open'] = DB::table('swps')->where('state', 'kashmir')->where('status','=', '0')->count();
         $data['kashmir_swp_com_close'] = DB::table('swps')->where('state', 'kashmir')->where('status','=', '1')->count();
         $data['jammu_swp_com_open'] = DB::table('swps')->where('state', 'jammu')->where('status','=', '0')->count();
         $data['jammu_swp_com_close'] = DB::table('swps')->where('state', 'jammu')->where('status','=', '1')->count();
         $data['bihar_ssl_com_close'] = DB::table('ssl_complaints')->where('state', 'bihar')->where('status', '=', 1)->count();
         $data['bihar_ssl_com_open'] = DB::table('ssl_complaints')->where('state', 'bihar')->where('status', '=', 0)->count();
         $data['bihar_srt_com_open'] = DB::table('srt_complaints')->where('state', 'bihar')->where('status','=',1)->count();
        $data['bihar_srt_com_close'] = DB::table('srt_complaints')->where('state', 'bihar')->where('status','=',0)->count();
         $data['up_swp_com_open'] = DB::table('swps')->where('state', 'up')->where('status','=', '0')->count();
         $data['up_swp_com_close'] = DB::table('swps')->where('state', 'up')->where('status','=', '1')->count();
         return view('complaintdash.complaintdashboard', $data);
    }
    
    public function add_up_swp(Request $request){
        $request->session()->put('state', 'up');
        return redirect(route('add-swp-complaint'));
    }
    
    public function add_jammu_swp(Request $request){
        $request->session()->put('state', 'jammu');
        return redirect(route('add-swp-complaint'));
    }
    
    public function add_kashmir_swp(Request $request){
        $request->session()->put('state', 'kashmir');
        return redirect(route('add-swp-complaint'));
    }
    
    
      public function view_up_swp(Request $request){
        $request->session()->put('state', 'up');
        return redirect(route('view-swp-complaint'));
    }
    
    public function view_jammu_swp(Request $request){
        $request->session()->put('state', 'jammu');
        return redirect(route('view-swp-complaint'));
    }
    
    public function view_kashmir_swp(Request $request){
        $request->session()->put('state', 'kashmir');
        return redirect(route('view-swp-complaint'));
    }
    
}
