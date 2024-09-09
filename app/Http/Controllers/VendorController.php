<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;
use Illuminate\Support\Facades\DB;
use Session;
use PDF;
use file;

class VendorController extends Controller
{


    
    public function vendordashboard(Request $request){
        $data['username'] = $request->session()->get('loginName');
        $data['role'] = $request->session()->get('role');
        $data['user'] = DB::table('users')->select('email')->get();
        $data['vendor'] = DB::table('vendors')->count();
        $data['vendor_state'] = DB::table('vendors')->distinct('state')->count('state');
        $data['workorder'] = DB::table('workorders')->count();
        $data['vcomplaint'] = DB::table('vendor_complaints')->count();
        $data['vrm'] = DB::table('vendorproductrequests')->count();
        $data['payment_request'] = DB::table('payments')->where('status', 0)->count();
        $data['vstate'] = DB::table('vendors')
        ->select('state', DB::raw('COUNT(*) as vendor'))
        ->groupBy('state')
        ->get();
        $data['vp'] = DB::table('vendor_progress')->get();
        return view('vendor.dashboard', $data);
    }
    
    
        
    public function dashboard(Request $request){
        $data['username'] = $request->session()->get('loginName');
        $data['role'] = $request->session()->get('role');
        $data['user'] = DB::table('users')->select('email')->get();
      
        return view('vendor.vendor.vendor-dashboard', $data);
    }
   
   
    public function add_vendor(Request $request){
        $data['username'] = $request->session()->get('loginName');
        $data['role'] = $request->session()->get('role');
        $data['user'] = DB::table('users')->select('email')->get();
        return view('vendor.vendor.add-vendor', $data);
    }


    public function create(Request $request)
    {
      $username = $request->session()->get('loginName');
      $messages = [
        'name.required' => 'The Contact Person Name field is required.',
        'name.string' => 'The Contact Person Name must be a string.',
        'name.max' => 'The Contact Person Name may not be greater than 255 characters.',
        'contact.required' => 'The contact field is required.',
        'contact.string' => 'The contact must be a string.',
        'contact.max' => 'The contact may not be greater than 255 characters.',
        'email.required' => 'The email field is required.',
        'email.email' => 'The email must be a valid email address.',
        'email.max' => 'The email may not be greater than 255 characters.',
        'firmIndi.required' => 'The Company/Firm field is required.',
        'firmIndi.string' => 'The Company/Firm must be a string.',
        'firmIndi.max' => 'The Company/Firm may not be greater than 255 characters.',
        'company.required' => 'The company field is required.',
        'company.string' => 'The company must be a string.',
        'company.max' => 'The company may not be greater than 255 characters.',
        'registerFor.required' => 'The Register to become field is required.',
        'registerFor.string' => 'The Register to become must be a string.',
        'registerFor.max' => 'The Register to become may not be greater than 255 characters.',
        'state.required' => 'The state field is required.',
        'state.string' => 'The state must be a string.',
        'state.max' => 'The state may not be greater than 255 characters.',
        'sow.required' => 'The scope of work field is required.',
    ];
        
         $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'contact' => 'required|string|max:255|unique:vendors,contact',
        'email' => 'required|email|max:255',
        'firmIndi' => 'required|string|max:255',
        'company' => 'required|string|max:255',
        'registerFor' => 'required|string|max:255',
        'state' => 'required|string|max:255',
        'sow' => 'required|string|max:2500',
    ], $messages);
       
        $rand = rand(10000, 99999);
        $vendorId = 'KLK'.$rand;
        $password = 'KLK@'.$rand.date('d');
        $reg = new Vendor();
        $reg->vendor_id = $vendorId;
        $reg->password = $password;
        $reg->name = $request->name;
        $reg->contact = $request->contact; 
        $reg->gst = $request->gst;
        $reg->email = $request->email;
        $reg->firm = $request->firmIndi;
        $reg->company = $request->company;
        $reg->register_for = $request->registerFor; 
        $reg->state = $request->state;
        $reg->sow = $request->sow;
        $reg->bank = $request->bank;
        $reg->account_no = $request->account_no;
        $reg->ifsc = $request->ifsc;
        $reg->status = $request->status;
        $reg->save();
        return back()->with('status', 'Vendor Added Successfully !!! ');
        }

        public function view_vendor(Request $request){
            $data['username'] = $request->session()->get('loginName');
            $data['role'] = $request->session()->get('role');
            $data['vendor'] = DB::table('vendors')->get();
            return view('vendor.vendor.view-vendor', $data);
        }
    


        public function edit(Request $request, $id)
        {
            $data['vendor'] = Vendor::find($id);
            $data['username'] = $request->session()->get('loginName');
            $data['role'] = $request->session()->get('role');
            return view('vendor.vendor.update-vendor', $data);
        }

        public function update(Request $request, $id)
        { 
        $reg = Vendor::find($id);
        $reg->name = $request->name;
        $reg->contact = $request->contact; 
        $reg->gst = $request->gst;
        $reg->email = $request->email;
        $reg->firm = $request->firmIndi;
        $reg->company = $request->company;
        $reg->register_for = $request->registerFor; 
        $reg->state = $request->state;
        $reg->sow = $request->sow;
        $reg->bank = $request->bank;
        $reg->account_no = $request->account_no;
        $reg->ifsc = $request->ifsc;
        $reg->status = $request->status;
        $reg->save();
        return back()->with('status', 'Vendor Added Successfully !!! ');
        }

        public function destroy($id)
        {
            $vendor = Vendor::find($id);
            $vendor->delete();
            return back()->with('status', 'Vendor Data Deleted Successfully!!');
        }
}
