<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Productrequest;
use App\Models\Product_productrequest;
use GuzzleHttp\Client;
use DB;
use Session;
use Mail;

class ProductrequestController extends Controller
{
    public function index(Request $request){
        $data['product'] = DB::table('products')->distinct()->get();
        $data['role'] = $request->session()->get('role');
        $data['state'] = $request->session()->get('state');
        $state = $request->session()->get('state');
        $data['warehouse'] = DB::table('products')->distinct()->select('warehouse')->where('state', $state)->get();
        return view('request.add-request', $data);  
       }
       
    public function index_kusum(Request $request){
        $data['product'] = DB::table('products')->distinct()->get();
        $data['role'] = $request->session()->get('role');
        $data['state'] = $request->session()->get('state');
        $state = $request->session()->get('state');
        $data['warehouse'] = DB::table('products')->distinct()->select('warehouse')->where('state', $state)->get();
        return view('kusum.request.add-request', $data);  
       }
    
       public function view(Request $request)
    {   
        $state = $request->session()->get('state');
        $data['orders'] = Productrequest::with('products')->where('state', $state)->ORDERBY('id', 'DESC')->get();
        $data['role'] = $request->session()->get('role');
          $data['state'] = $request->session()->get('state');
        return view('request.view-request', $data);
    }
    
          public function view_kusum(Request $request)
    {
        $state = $request->session()->get('state');
        $data['orders'] = Productrequest::with('products')->where('state', $state)->ORDERBY('id', 'DESC')->get();
        $data['role'] = $request->session()->get('role');
        return view('kusum.request.view-request', $data);
    }
    
    
    public function store(Request $request)
    {
        $username = $request->session()->get('login');
        $productRequest = Productrequest::create($request->all());
        $products = $request->input('products', []);
        $quantities = $request->input('quantitiess', []);
        $units = $request->input('units', []);
        for ($product = 0; $product < count($products); $product++) {
            if ($products[$product] != '') 
                $productRequest->products()->attach($products[$product], [
                    'quantity' => $quantities[$product],
                    'unit' => $units[$product]
                ]);
            }
            
            Mail::send('RequestMail', array( 
            'name' => $username, 
            'Req_date' => $request->required_date,
            'warehouse' => $request->warehouse, 
            'subject' => 'Product Requirement  Mail', 
            'form_message' => $request->remarks, 
            
        ), function($message) use ($request){
            $state = $request->session()->get('state');
            $user = DB::table('users')->where('state', $state)->get();
            $message->from('info@bredasrt.etsnetwork.in');
            foreach ($user as $users) {
            $message->to($users->email, 'User')->subject('Product Requirement  Mail');
            }
        });
        
                 // Send SMS notification
    $apiKey = '26f120f7d96ea0d1a7b9662dc027c56a';
    $mobile = '9560652530';
    $location = $request->warehouse;
    $date = $request->required_date;
    $paragraph = $request->remarks;
    $message = "Hello, A New Product Request,\n\n"
         . "Required Date: $date\n"
         . "Location: $location\n\n"
         . "$paragraph";
    $smsUrl = "https://demo.digitalsms.biz/api?apikey=$apiKey&mobile=$mobile&msg=$message";

    $client = new Client();
    $response = $client->request('GET', $smsUrl);

    if ($response->getStatusCode() == 200) {
        // SMS sent successfully
        return redirect()->back()->with('status', 'Request sent successfully!');
    } else {
        // Handle error if SMS sending failed
        return redirect()->back()->with('error', 'Failed to send SMS notification.');
    }
    
        return redirect()->back()->with('status', 'Request sent successfully!');
    }

    public function accept_request(request $request){
        $id = $request->id;
        $username = $request->session()->get('login');
        $accept = Productrequest::find($id);
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

