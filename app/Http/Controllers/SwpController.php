<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Swp;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;
use Mail;

class SwpController extends Controller
{
    public function add_swp_complaint(Request $request)
    {
        $data['role'] = $request->session()->get('role');
        $data['state'] = $request->session()->get('state');
        $state = $request->session()->get('state');
        $data['username'] = $request->session()->get('login');
        if($state == 'jammu' || $state == 'kashmir'){
          $data['jammu'] = DB::table('jammus')->where('state', $state)->get();
        }elseif($state == 'up'){
          $data['jammu'] = DB::table('upsurveys')->where('state', $state)->get();
        }
        return view('complaint.swp.add-swp-complaint', $data);
    }

    public function create(Request $request)
    {
        $created_by = $request->session()->get('login');
        $email = $request->session()->get('loginName');
        $state = $request->session()->get('state');
        $complaint = new Swp();
        $complaint->state = $state;
        $complaint->customer_no = $request->customer_no;
        $complaint->name = $request->name;
        $complaint->father_name = $request->father_name;
        $complaint->email = $request->email;
        $complaint->mobile = $request->mobile;
        $complaint->district = $request->district;
        $complaint->village = $request->village;
        $complaint->tehsil = $request->tehsil;
        $complaint->post = $request->post;
        $complaint->pin = $request->pin;
        $complaint->pump_type = $request->pump_type;
        $complaint->pump_capacity = $request->pump_capacity;
        $complaint->pump_subtype = $request->pump_subtype;
        $complaint->complaint = $request->complaint;
        $complaint->start_date = $request->start_date;
        $complaint->complaint_id = rand(1000, 9999);
        $complaint->created_by = $created_by;
        $complaint->sms =  $request->sms;
        $complaint->save();

        // Send Whatsapp notification
        if($request->sms == 'Yes'){
        $mobile = ['9560652530', $request->mobile];
        }
        else{
         $mobile = ['9560652530'];  
        }
        foreach ($mobile as $number) {
            $apiKey = '26f120f7d96ea0d1a7b9662dc027c56a';
            $farmer = $request->name;
            $phone = $request->mobile;
            $district = $request->district;
            $village = $request->village;
            $pump_type = $request->pump_type;
            $pump_capacity = $request->pump_capacity . 'HP';
            $pump_subtype = $request->pump_subtype;
            $date = date('Y-m-d');
            $paragraph = $request->complaint;
            $message = "Hello, A New Complaint Request,\n\n"
                . "Date: $date\n"
                . "Farmer Name : $farmer\n"
                . "Phone : $phone\n"
                . "Pump : $pump_subtype $pump_capacity $pump_type \n"
                . "District: $district\n"
                . "Site: $village\n"
                . "$paragraph";

            $smsUrl = "https://demo.digitalsms.biz/api?apikey=$apiKey&mobile=$number&msg=$message";
            $client = new Client();
            $response = $client->request('GET', $smsUrl);
        }
        if ($response->getStatusCode() == 200) {
            // SMS sent successfully
            return redirect()->back()->with('status', 'Complaint Added Successfully!');
        } else {
            // Handle error if SMS sending failed
            return redirect()->back()->with('error', 'Failed to send SMS notification.');
        }

    }



    public function view_swp_complaint(Request $request)
    {
        $created_by = $request->session()->get('login');
        $data['loginrole'] = $request->session()->get('role');
        $data['state'] = $request->session()->get('state');
        $state = $request->session()->get('state');
        $data['data'] = DB::table('swps')->where('state', $state)->where('status','=',1)->get();
        $data['open'] = DB::table('swps')->where('state', $state)->where('status','=',0)->get();

        $data['role'] = $request->session()->get('role');
        $data['username'] = $request->session()->get('login');
        return view('complaint.swp.view-swp-complaint', $data);
    }

    public function edit(Request $request, $id)
    {
        $data['complaint'] = Swp::find($id);
        $data['role'] = $request->session()->get('role');
        $data['username'] = $request->session()->get('login');
        $data['state'] = $request->session()->get('state');
        return view('complaint.swp.update-swp-complaint', $data);
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $Complaint = Swp::find($id);
        $created_by = $request->session()->get('login');

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/image/', $filename);
             $Complaint->file = $filename;
        }
            $Complaint->resolved_by = $request->resolved_by ;
            $Complaint->r_email = $request->r_email ;
            $Complaint->r_mobile = $request->r_mobile ;
            $Complaint->close_date = $request->close_date ;
            $Complaint->remarks = $request->remarks;
            $Complaint->close_sms = $request->close_sms;
            $Complaint->status = 1 ;
            $Complaint->save();
        if ($Complaint) {
      if($request->close_sms == 'Yes'){
        $mobile = ['9560652530', $Complaint->mobile , $request->r_mobile];
        }
        else{
         $mobile = ['9560652530', $request->r_mobile];  
        }
        foreach ($mobile as $number) {
            $apiKey = '26f120f7d96ea0d1a7b9662dc027c56a';
            $farmer = $Complaint->name;
            $phone = $Complaint->mobile;
            $district = $Complaint->district;
            $village = $Complaint->village;
            $pump_type = $Complaint->pump_type;
            $pump_capacity = $Complaint->pump_capacity . 'HP';
            $pump_subtype = $Complaint->pump_subtype;
            $date = $request->close_date;
            $paragraph = $request->remarks;
            $message = "Hello, Complaint Closed,\n\n"
                . "Date: $date\n"
                . "Farmer Name : $farmer\n"
                . "Phone : $phone\n"
                . "Pump : $pump_subtype $pump_capacity $pump_type \n"
                . "District: $district\n"
                . "Site: $village\n"
                . "$paragraph";

            $smsUrl = "https://demo.digitalsms.biz/api?apikey=$apiKey&mobile=$number&msg=$message";
            $client = new Client();
            $response = $client->request('GET', $smsUrl);
        }
        if ($response->getStatusCode() == 200) {
            // SMS sent successfully
            return redirect()->back()->with('status', 'Complaint Added Successfully!');
        } else {
            // Handle error if SMS sending failed
            return redirect()->back()->with('error', 'Failed to send SMS notification.');
        }

        }
        return redirect(route('view-swp-complaint'))->with('status', 'File Submitted Successfully');
    }
    
    
    public function getVendorDetails(Request $request)
    {
        $cid = $request->vid;

        $details = DB::table('jammus')
            ->select('f_farmer_name', 'f_father_name', 'contact_number', 'district', 'post', 'village', 'tehsil', 'f_pin', 'p_pump_capacity', 'p_pump_type', 'p_pump_subtype')
            ->where('f_customer_no', $cid)
            ->first();
            
        return response()->json([
            'f_farmer_name' => $details->f_farmer_name,
            'f_father_name' => $details->f_father_name,
            'contact_number' => $details->contact_number,
            'district' => $details->district,
            'post' => $details->post,
            'village' => $details->village,
            'tehsil' => $details->tehsil,
            'f_pin' => $details->f_pin,
            'p_pump_capacity' => $details->p_pump_capacity,
            'p_pump_type' => $details->p_pump_type,
            'p_pump_subtype' => $details->p_pump_subtype,
        ]);
    }
    
    
      public function getCustomerDetails(Request $request)
    {
        $cid = $request->vid;

        $details = DB::table('upsurveys')
            ->select('beneficiary', 'father_name', 'mobile', 'location', 'pump_capacity', 'pump_sub_type', 'required_pump', 'installation_dsitrict')
            ->where('beneficiary', $cid)
            ->first();
            
        return response()->json([
            'beneficiary' => $details->beneficiary,
            'father_name' => $details->father_name,
            'mobile' => $details->mobile,
            'village' => $details->location,
            'district' => $details->installation_dsitrict,
            'pump_capacity' => $details->pump_capacity,
            'required_pump' => $details->required_pump,
            'pump_sub_type' => $details->pump_sub_type,
        ]);
    }
}
