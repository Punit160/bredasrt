<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Vendor;
use App\Models\Dispatchproduct;
use GuzzleHttp\Client;
use DB;
use Session;
use Mail;

class DispatchproductController extends Controller
{
    

    public function add_dispatch_product(Request $request){
        $state = $request->session()->get('state');
        $data['product'] = DB::table('products')->distinct()->get();
        $data['vendor'] = DB::table('vendors')->distinct()->get();
        $data['warehouse'] = DB::table('products')->distinct()->select('warehouse')->where('state', $state)->get();
        $data['role'] = $request->session()->get('role');
        $data['state'] = $request->session()->get('state');
        $role = $request->session()->get('role');
        $data['username'] = $request->session()->get('login');
        if($role == '1' || $role == '4'|| $role == '0' || $role == '2'){
        return view('dispatch.add-dispatch-product', $data);
        }
        elseif($role == '3'){
            return redirect(route('inhouse-product-dispatch'));
        }
        elseif($role == '5'){
            return redirect(route('view-request'));
        }
          elseif($role == '6'){
            return redirect(route('add-request'));
        }
    }
    
    
        public function add_dispatch_product_kusum(Request $request){
        $state = $request->session()->get('state');
        $data['product'] = DB::table('products')->distinct()->get();
        $data['warehouse'] = DB::table('products')->distinct()->select('warehouse')->where('state', $state)->get();
        $data['role'] = $request->session()->get('role');
        $data['state'] = $request->session()->get('state');
        $role = $request->session()->get('role');
        $data['username'] = $request->session()->get('login');
        if($role == '1' || $role == '4'){
        return view('kusum.dispatch.add-dispatch-product', $data);
        }elseif($role == '2'){
            return redirect(route('kusum-dashboard'));
        }
        elseif($role == '3'){
            return redirect(route('inhouse-kusum-product-dispatch'));
        }
        elseif($role == '5'){
            return redirect(route('view-kusum-request'));
        }
          elseif($role == '6'){
            return redirect(route('add-kusum-request'));
        }
    }


    public function inhouse_dispatch_product(Request $request){
        $data['product'] = DB::table('products')->distinct()->get();
         $state = $request->session()->get('state');
        $data['warehouse'] = DB::table('products')->distinct()->select('warehouse')->where('state', $state)->get();
        $data['role'] = $request->session()->get('role');
        $data['state'] = $request->session()->get('state');
        $data['username'] = $request->session()->get('login');
        return view('dispatch.inhouse-dispatch', $data);
        
         if($role == '1' || $role == '3' ||  $role == '4' || $role == '5'){
         return view('kusum.dispatch.inhouse-dispatch', $data);
        }elseif($role == '2'){
            return redirect(route('dashboard'));
        }
          elseif($role == '6'){
            return redirect(route('add-request'));
        }
    }
    
    
       public function inhouse_dispatch_product_kusum(Request $request){
        $data['product'] = DB::table('products')->distinct()->get();
          $state = $request->session()->get('state');
        $data['warehouse'] = DB::table('products')->distinct()->select('warehouse')->where('state', $state)->get();
        $data['role'] = $request->session()->get('role');
        $data['state'] = $request->session()->get('state');
        $data['username'] = $request->session()->get('login');
        return view('kusum.dispatch.inhouse-dispatch', $data);
        
         if($role == '1' || $role == '3' ||  $role == '4' || $role == '5'){
         return view('kusum.dispatch.inhouse-dispatch', $data);
        }elseif($role == '2'){
            return redirect(route('kusum-dashboard'));
        }
          elseif($role == '6'){
            return redirect(route('add-kusum-request'));
        }
    }



    public function getProducts($warehouse)
    {
        $products = Product::where('warehouse', $warehouse)->get();

        return response()->json($products);
    }

    public function view(Request $request)
    {
         $state = $request->session()->get('state');
        $data['orders'] = Dispatchproduct::with('products')->where('dispatch_status', 'external')->where('state', $state)->ORDERBY('id', 'DESC')->get();
        $data['role'] = $request->session()->get('role');
          $data['state'] = $request->session()->get('state');
        $data['username'] = $request->session()->get('login');
        return view('dispatch.view-dispatch-product', $data);
        
    }
    
      public function view_kusum(Request $request)
    { 
          $state = $request->session()->get('state');
        $data['orders'] = Dispatchproduct::with('products')->where('dispatch_status', 'external')->where('state', $state)->ORDERBY('id', 'DESC')->get();
        $data['role'] = $request->session()->get('role');
          $data['state'] = $request->session()->get('state');
        $data['username'] = $request->session()->get('login');
        return view('kusum.dispatch.view-dispatch-product', $data);
        
    }

    public function view_inhouse(Request $request)
    {
        $state = $request->session()->get('state');
        $data['orders'] = Dispatchproduct::with('products')->where('dispatch_status', 'internal')->where('state', $state)->ORDERBY('id', 'DESC')->get();
        $data['role'] = $request->session()->get('role');
          $data['state'] = $request->session()->get('state');
        $data['username'] = $request->session()->get('login');
        return view('dispatch.view-inhouse-dispatch', $data);
    }
    
        public function view_inhouse_kusum(Request $request)
    {
          $data['state'] = $request->session()->get('state');
        $state = $request->session()->get('state');
        $data['orders'] = Dispatchproduct::with('products')->where('dispatch_status', 'internal')->where('state', $state)->ORDERBY('id', 'DESC')->get();
        $data['role'] = $request->session()->get('role');
        $data['username'] = $request->session()->get('login');
        return view('dispatch.view-inhouse-dispatch', $data);
    }

    public function store_product(Request $request)
    {
    $username = $request->session()->get('login');
    $dispatchproduct = Dispatchproduct::create($request->all());
            $products = $request->input('products', []);
            $quantities = $request->input('quantitiess', []);
            $units = $request->input('units', []);
            for ($product=0; $product < count($products); $product++) {
                if ($products[$product] != ''){
                    $dispatchproduct->products()->attach($products[$product], [
                        'quantity' => $quantities[$product],
                        'unit' => $units[$product],
                        'warehouse' => $request->warehouse,
                    ]);
            }
        }
        if($dispatchproduct){
           Mail::send('DispatchMail', array( 
            'name' => $username, 
            'date' => $request->datedispatch,
            'truck' => $request->truck,
            'phone' => $request->phone, 
            'challan' => $request->challan,
            'warehouse' => $request->warehouse,
            'remarks' => $request->remarks,
            'subject' => 'Product Dispatch Mail', 
            'form_message' => 'Product Dispatched Successfully!!!', 
            
        ), function($message) use ($request){
            $user = DB::table('users')->where('role', '0')->get();
            $message->from('info@bredasrt.etsnetwork.in');
            foreach ($user as $users) {
            $message->to($users->email, 'User')->subject('Product Dispatch Mail');
            }

        });
        
            // Send Whatsapp notification
    $mobile = ['9760944849', '9560652530', '9971043929',$request->phone];
    foreach($mobile as $number){
    $apiKey = '26f120f7d96ea0d1a7b9662dc027c56a';
    $name = $username;
    $truck = $request->truck;
    $challan = $request->challan;
    $phone = $request->phone;
    $warehouse = $request->warehouse;
    $date = $request->datedispatch;
    $remarks = $request->remarks;
    $message = "Hello,Inhouse Product Dispatched Successfully,\n\n"
         . "Date: $date\n"
         . "Name: $name\n"
         . "Truck: $truck\n"
         . "Challan: $challan\n"
         . "Warehouse: $warehouse\n"
         . "phone: $phone\n"
         . "Remarks: $remarks";

    $smsUrl = "https://demo.digitalsms.biz/api?apikey=$apiKey&mobile=$number&msg=$message";
    $client = new Client();
    $response = $client->request('GET', $smsUrl);
    
}
    if ($response->getStatusCode() == 200) {
        // SMS sent successfully
        return redirect()->back()->with('status', 'Product Dispatch Successfully !!!');
    } else {
        // Handle error if SMS sending failed
        return redirect()->back()->with('error', 'Failed to send SMS notification.');
    }
        }
}

public function outer_dispatch(Request $request){
    $dispatchproduct = Dispatchproduct::create($request->all());
    $username = $request->session()->get('login');
    $products = $request->input('products', []);
    $quantities = $request->input('quantitiess', []);
    $units = $request->input('units', []);
    for ($product=0; $product < count($products); $product++) {
        if ($products[$product] != ''){
        $quantity = DB::table('products')->where('id', '=', $products[$product])->select('quantity')->first();
        $available_quantity = floatval($quantity->quantity);
        $dispatch_quantity = floatval($quantities[$product]);
        if($available_quantity >=  $dispatch_quantity){
            $total_quantity = $available_quantity - $dispatch_quantity;
            $dispatchproduct->products()->attach($products[$product], [
                'quantity' => $quantities[$product],
                'unit' => $units[$product],
                'warehouse' => $request->d_warehouse,
            ]);
            DB::table('products')->where('id', '=', $products[$product])->update(['quantity' => $total_quantity]);
    }
    }
}
        if($dispatchproduct){
           Mail::send('OuterdispatchhMail', array( 
            'name' => $username, 
            'date' => $request->datedispatch,
            'truck' => $request->truck, 
            'challan' => $request->challan,
            'phone' => $request->phone,
            'sitename' => $request->site_name,
            'warehouse' => $request->d_warehouse,
            'location' => $request->location,
            'remarks' => $request->remarks,
            'subject' => 'Product Dispatch Mail', 
            'form_message' => 'Product Dispatched To Site Successfully!!!', 
            
        ), function($message) use ($request){
            $user = DB::table('users')->where('role', '0')->get();
            $message->from('info@bredasrt.etsnetwork.in');
            foreach ($user as $users) {
            $message->to($users->email, 'User')->subject('Product Dispatch To Site Mail');
            }

        });
        
                    // Send Whatsapp notification
    $mobile = ['9760944849', '9560652530', '9971043929',$request->phone];
    foreach($mobile as $number){
    $apiKey = '26f120f7d96ea0d1a7b9662dc027c56a';
    $name = $username;
    $site = $request->site_name;
    $truck = $request->truck;
    $challan = $request->challan;
    $warehouse = $request->d_warehouse;
    $phone = $request->phone;
    $date = $request->datedispatch;
    $remarks = $request->remarks;
    $message = "Hello, Outer Product Dispatched Successfully,\n\n"
         . "Site: $site\n"
         . "Date: $date\n"
         . "Name: $name\n"
         . "Truck: $truck\n"
         . "Challan: $challan\n"
         . "Warehouse: $warehouse\n"
         . "phone: $phone\n"
         . "Remarks: $remarks";

    $smsUrl = "https://demo.digitalsms.biz/api?apikey=$apiKey&mobile=$number&msg=$message";
    $client = new Client();
    $response = $client->request('GET', $smsUrl);
    
}
    if ($response->getStatusCode() == 200) {
        // SMS sent successfully
        return redirect()->back()->with('status', 'Product Dispatch Successfully !!!');
    } else {
        // Handle error if SMS sending failed
        return redirect()->back()->with('error', 'Failed to send SMS notification.');
    }
        }
}

public function accept_order(request $request){
    $id = $request->id;
    $username = $request->session()->get('login');
    if($request->status == '1'){
        $accept = Dispatchproduct::find($id);
        $accept->status = $request->status;
        $accept->save();
        if($accept){
        $pq = DB::table('dispatchproduct_product')->where('dispatchproduct_id', $id)->get();
        foreach($pq as $pqs){
        $product = DB::table('products')->where('id', $pqs->product_id)->first();
        $available_quantity = floatval($product->quantity);
        $dispatch_quantity = floatval($pqs->quantity);
        $total_quantity = $available_quantity + $dispatch_quantity;
        DB::table('products')->where('id', $pqs->product_id)->update(['quantity' => $total_quantity]);
        }
        }
         Mail::send('AcceptdispatchMail', array( 
            'name' => $username, 
            'date' => $accept->datedispatch,
            'truck' => $accept->truck, 
            'challan' => $accept->challan,
            'phone' => $accept->phone,
            'warehouse' => $accept->warehouse,
            'subject' => 'Order Accept Mail', 
            'form_message' => 'Product Accepted Successfully!!!', 
            
        ), function($message) use ($request){
            $user = DB::table('users')->where('role', '!=', '6')->get();
            $message->from('info@bredasrt.etsnetwork.in');
            foreach ($user as $users) {
            $message->to($users->email, 'User')->subject('Product Dispatch Mail');
            }

        });
        
                
                    // Send Whatsapp notification
    $mobile = ['9760944849', '9560652530', '9971043929',$request->phone];
    foreach($mobile as $number){
    $apiKey = '26f120f7d96ea0d1a7b9662dc027c56a';
    $name = $username;
    $truck = $accept->truck;
    $challan = $accept->challan;
    $warehouse = $accept->warehouse;
    $phone = $accept->phone;
    $date = date('Y-m-d');
    $message = "Hello, Order Accepted Successfully,\n\n"
         . "Date: $date\n"
         . "Name: $name\n"
         . "Truck: $truck\n"
         . "Challan: $challan\n"
         . "Warehouse: $warehouse\n"
         . "Phone: $phone";

    $smsUrl = "https://demo.digitalsms.biz/api?apikey=$apiKey&mobile=$number&msg=$message";
    $client = new Client();
    $response = $client->request('GET', $smsUrl);
    
}
    if ($response->getStatusCode() == 200) {
        // SMS sent successfully
        return redirect()->back()->with('status', 'Order Accepted Successfully !!!');
    } else {
        // Handle error if SMS sending failed
        return redirect()->back()->with('error', 'Failed to send SMS notification.');
    }
    }
    else{
    $accept = Dispatchproduct::find($id);
    $accept->status = $request->status;
    $accept->save();
    if($accept){
         Mail::send('DispatchMail', array( 
            'name' => $username, 
            'Date' => $accept->datedispatch,
            'Truck Number' => $accept->truck, 
            'Challan' => $accept->challan,
            'Driver Number' => $accept->phone,
            'subject' => 'Order Reject Mail', 
            'form_message' => 'Product Rejected Successfully!!!', 
            
        ), function($message) use ($request){
            $user = DB::table('users')->where('role', '!=', '6')->get();
            $message->from('info@complaint.etsservices.in');
            foreach ($user as $users) {
            $message->to($users->email, 'User')->subject('Product Rejected Mail');
            }

        }); 
    }
    return redirect()->back()->with('status', 'Order Rejected Successfully !!!');
    }
}
}