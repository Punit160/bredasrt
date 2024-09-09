<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SrtComplaint;
use App\Models\Srtdata;
use Illuminate\Support\Facades\DB;
use GuzzleHttp\Client;
use Session;
use Mail;

class SrtComplaintController extends Controller
{
    public function index(Request $request)
    {
        $state = $request->session()->get('state');
       $data['state'] = $request->session()->get('state');
        $data['role'] = $request->session()->get('role');
        $data['username'] = $request->session()->get('login');
        $data['district'] = DB::table('srtdatas')->where('state',$state)->select('district')->distinct()->get();

        return view('complaint.srt.add-srt-complaint', $data);
    }

    public function create(Request $request)
    {
        $created_by = $request->session()->get('login');
        $email = $request->session()->get('loginName');
        $state = $request->session()->get('state');
        $complaint = new SrtComplaint();
        $complaint->state = $state;
        $complaint->discom = $request->discom;
        $complaint->district = $request->district;
        $complaint->dept_name = $request->dept_name;
        $complaint->site_name = $request->site_name;
        $complaint->location = $request->location;
        $complaint->firm_name = $request->firm_name;
        $complaint->ca_no = $request->ca_no;
        $complaint->sanction_load = $request->sanction_load;
        $complaint->plant_sc = $request->plant_sc;
        $complaint->wo_no = $request->wo_no;
        $complaint->phase = $request->phase;
        $complaint->vendor = $request->vendor;
       
        if ($request->file('file')) {
            $image = $request->file('file');
            $imageName = "srtcomp" . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/image'), $imageName);
            $complaint->file = $imageName;
        } 
        $complaint->complaint = $request->complaint;
        $complaint->start_date = date('d-m-Y');
        $complaint->complaint_id = rand(1000, 9999);
        $complaint->created_by = $created_by;
        $complaint->sms =  $request->sms;
        $complaint->save();

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
            return redirect()->back()->with('status', 'Complaint Added Successfully!');
        } else {
            return redirect()->back()->with('error', 'Failed to send SMS notification.');
    }
    }


    public function view(Request $request)
    {
        $created_by = $request->session()->get('login');
        $data['loginrole'] = $request->session()->get('role');
        $data['data'] = DB::table('srt_complaints')->where('status','=',1)->get();
        $data['open'] = DB::table('srt_complaints')->where('status','=',0)->get();
        $data['role'] = $request->session()->get('role');
               $data['state'] = $request->session()->get('state');
        $data['username'] = $request->session()->get('login');
        return view('complaint.srt.view-srt-complaint', $data);
    }

    public function edit(Request $request, $id)
    {
        $data['complaint'] = SrtComplaint::find($id);
        $data['role'] = $request->session()->get('role');
        $data['username'] = $request->session()->get('login');
               $data['state'] = $request->session()->get('state');
        return view('complaint.srt.update-srt-complaint', $data);
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $Complaint = SrtComplaint::find($id);
        $created_by = $request->session()->get('login');
        if ($request->hasfile('r_file')) {
            $file = $request->file('r_file');
            $extension = $file->getClientOriginalExtension();
            $filename = 'srtcomp_r'.time() . '.' . $extension;
            $file->move('uploads/image/', $filename);
             $Complaint->r_file = $filename;
        }
            $Complaint->resolved_by = $request->resolved_by ;
            $Complaint->r_email = $request->r_email ;
            $Complaint->r_mobile = $request->r_mobile ;
            $Complaint->close_date = date('d-m-Y') ;
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

             return redirect()->back()->with('error', 'Failed to send SMS notification.');
          }

        }
     }
 

    public function getsitenames(Request $request,$district)
    {
        $state = $request->session()->get('state' );
        $sites =Srtdata::where('state', $state)
        ->where('district', $district)
            ->distinct()
            ->pluck('site_name')
            ->toArray();
        return response()->json($sites);

    }

    public function getVendorDetails(Request $request)
{
    $district = $request->input('district');
    $site_name = $request->input('sid');
 

    $details = DB::table('srtdatas')
        ->select(
            'discom', 'district', 'dept_name',
             'site_name', 'location', 'firm_name', 'ca_no', 'sanction_load', 'plant_sc', 'wo_no', 'phase', 'vendor',
        )
        ->where('district', $district)
        ->where('site_name', $site_name)
    
        ->first(); 
    return response()->json($details);
}
}