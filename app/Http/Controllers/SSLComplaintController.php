<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SslComplaint;
use Illuminate\Support\Facades\DB;
use App\Models\BiharSsl;
use GuzzleHttp\Client;
use Session;
use Mail;

class SSLComplaintController extends Controller
{
    public function index(Request $request)
    {
        $state = $request->session()->get('state');
        $data['role'] = $request->session()->get('role');
        $data['username'] = $request->session()->get('login');
        $data['state'] = $request->session()->get('state');
        $data['district'] = DB::table('bihar_ssls')->where('state', $state)->select('district')->distinct()->get();
        return view('complaint.ssl.add-ssl-complaint', $data);
    }

    public function create(Request $request)
    {
        $created_by = $request->session()->get('login');
        $email = $request->session()->get('loginName');
        $state = $request->session()->get('state');
        $complaint = new SslComplaint();
        $complaint->state = $state;
        $complaint->district = $request->district;
        $complaint->block = $request->block;
        $complaint->panchyat = $request->panchyat;
        $complaint->ward_no = $request->ward_no;
        $complaint->pole_no = $request->pole_no;
        $complaint->beneficiary_name = $request->beneficiary_name;
        $complaint->contact_no = $request->contact_no;
        $complaint->latitude = $request->latitude;
        $complaint->longitude = $request->longitude;
        $complaint->along_with_pole = $request->along_with_pole;
        $complaint->luminary_no = $request->luminary_no;
        $complaint->sim_no = $request->sim_no;
        $complaint->battery_serial_no = $request->battery_serial_no;
        $complaint->module_no = $request->module_no;
        $complaint->date_of_installation = $request->date_of_installation;
        // $complaint->installed_by = $request->installed_by;
        if ($request->file('file')) {
            $image = $request->file('file');
            $imageName = "sslcomp" . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/image'), $imageName);
            $complaint->file = $imageName;
        }
        $complaint->complaint = $request->complaint;
        $complaint->start_date = date('d-m-Y');
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


    public function view(Request $request)
    {
        $created_by = $request->session()->get('login');
        $data['loginrole'] = $request->session()->get('role');
        $data['data'] = DB::table('ssl_complaints')->where('status', '=', 1)->get();
        $data['open'] = DB::table('ssl_complaints')->where('status', '=', 0)->get();
        $data['role'] = $request->session()->get('role');
               $data['state'] = $request->session()->get('state');
        $data['username'] = $request->session()->get('login');
        return view('complaint.ssl.view-ssl-complaint', $data);
    }

    public function edit(Request $request, $id)
    {
        $data['complaint'] = SslComplaint::find($id);
               $data['state'] = $request->session()->get('state');
        $data['role'] = $request->session()->get('role');
        $data['username'] = $request->session()->get('login');
        return view('complaint.ssl.update-ssl-complaint', $data);
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $Complaint = SslComplaint::find($id);
        $created_by = $request->session()->get('login');
        if ($request->hasfile('r_file')) {
            $file = $request->file('r_file');
            $extension = $file->getClientOriginalExtension();
            $filename = 'r_file' . time() . '.' . $extension;
            $file->move('uploads/image/', $filename);
            $Complaint->r_file = $filename;
        }
        $Complaint->resolved_by = $request->resolved_by;
        $Complaint->r_email = $request->r_email;
        $Complaint->r_mobile = $request->r_mobile;
        $Complaint->close_date = date('d-m-Y');
        $Complaint->remarks = $request->remarks;
        $Complaint->close_sms = $request->close_sms;
        $Complaint->status = 1;
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
                    return redirect()->back()->with('status', 'Complaint Added Successfully!');
                } else {
                    return redirect()->back()->with('error', 'Failed to send SMS notification.');
                }

        }
        return redirect(route('view-ssl-complaint'))->with('status', 'File Submitted Successfully');
    }
   
    public function getblocks(Request $request,$district)
    {
        $state = $request->session()->get('state');
        $blocks = BiharSsl::where('district', $district)
            ->distinct()
            ->pluck('block')
            ->toArray();
        return response()->json($blocks);
    }
  
    public function getpanchyats(Request $request)
{
    $district = $request->get('district');
    $block = $request->get('block');

    $panchyats = BiharSsl::where('district', $district)
        ->where('block', $block)
        ->distinct()
        ->pluck('panchyat')
        ->toArray();
    
    return response()->json($panchyats);
}
public function getwards(Request $request)
{
    $district = $request->get('district');
    $block = $request->get('block');
    $panchyat = $request->get('panchyat');


    $wards= BiharSsl::where('district', $district)
        ->where('block', $block)
        ->where('panchyat', $panchyat)
        ->distinct()
        ->pluck('ward_no')
        ->toArray();
    
    return response()->json($wards);
}

public function getpoles(Request $request)
{
    $district = $request->get('district');
    $block = $request->get('block');
    $panchyat = $request->get('panchyat');
    $ward_no = $request->get('ward_no');
    $poles= BiharSsl::where('district', $district)
        ->where('block', $block)
        ->where('panchyat', $panchyat)
        ->where('ward_no', $ward_no)
        ->distinct()
        ->pluck('pole_no')
        ->toArray();
    return response()->json($poles);
}

public function getVendorDetails(Request $request)
{
    $district = $request->input('district');
    $block = $request->input('block');
    $panchyat = $request->input('panchyat');
    $ward_no = $request->input('ward_no');
    $cid = $request->input('pid'); 

    $details = DB::table('bihar_ssls')
        ->select(
            'beneficiary_name',
            'contact_no',
            'latitude',
            'longitude',
            'along_with_pole',
            'luminary_no',
            'sim_no',
            'battery_serial_no',
            'module_no',
            'date_of_installation',
            'installed_by'
        )
        ->where('district', $district)
        ->where('block', $block)
        ->where('panchyat', $panchyat)
        ->where('ward_no', $ward_no)
        ->where('pole_no', $cid)
        ->first(); 
    return response()->json($details);
}


}