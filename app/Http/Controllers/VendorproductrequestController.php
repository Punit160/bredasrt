<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workorder;
use App\Models\Woassign;
use App\Models\Product;
use App\Models\Vendorproductrequest;
use App\Models\Vendorproduct_productrequest;
use GuzzleHttp\Client;
use DB;
use Session;
use Mail;

class VendorproductrequestController extends Controller
{
       public function view(Request $request)
    {   
        $state = $request->session()->get('state');
        $loginId = $request->session()->get('loginId');
        $data['orders'] = Vendorproductrequest::with('products')->ORDERBY('id', 'DESC')->get();
        $data['role'] = $request->session()->get('role');
        $data['state'] = $request->session()->get('state');
        return view('vendor.request.view-request', $data);
    }
    
    public function accept_request(request $request){
        $id = $request->id;
        $username = $request->session()->get('login');
        $accept = Vendorproductrequest::find($id);
        $accept->dispatch_date = date('d-m-Y');
        $accept->status = $request->status;
        $accept->save();
        if($accept){
        if($request->status == '1'){
        Mail::send('AcceptrequestMail', array( 
            'name' => $username, 
            'Req_date' => $accept->required_date,
            'warehouse' => $accept->warehouse, 
            'subject' => 'Request Accepted  Mail', 
            'form_message' => $request->remarks, 
            
        ), function($message) use ($request){
            $state = $request->session()->get('state');
            $user = DB::table('users')->where('state', $state)->get();
            $message->from('info@bredasrt.etsnetwork.in');
            foreach ($user as $users) {
            $message->to($users->email, 'User')->subject('Request Accepted  Mail');
            }
        }); 
            }
        else{
        Mail::send('RejectrequestMail', array( 
            'name' => $username, 
            'Req_date' => $accept->required_date,
            'warehouse' => $accept->warehouse, 
            'subject' => 'Request Accepted  Mail', 
            'form_message' => $request->remarks, 
            
        ), function($message) use ($request){
            $state = $request->session()->get('state');
            $user = DB::table('users')->where('state', $state)->get();
            $message->from('info@bredasrt.etsnetwork.in');
            foreach ($user as $users) {
            $message->to($users->email, 'User')->subject('Request Rejected  Mail');
            }
        }); 
        }
        }
        return redirect()->back();
    }

}

