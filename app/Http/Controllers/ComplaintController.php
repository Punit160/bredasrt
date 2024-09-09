<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Complaint;
use GuzzleHttp\Client;
use Session;
use Mail;

class ComplaintController extends Controller
{
    public function add_complaint(Request $request)
    {
        $data['role'] = $request->session()->get('role');
        $data['state'] = $request->session()->get('state');
        $data['username'] = $request->session()->get('login');
        return view('complaint.add-complaint', $data);
    }

    public function create(Request $request)
    {
        $created_by = $request->session()->get('login');
        $email = $request->session()->get('loginName');
        $state = $request->session()->get('state');
        $complaint = new Complaint();
        $complaint->state = $state;
        $complaint->name = $request->name;
        $complaint->mobile = $request->mobile;
        $complaint->district = $request->district;
        $complaint->block = $request->block;
        $complaint->village  = $request->village;
        $complaint->complaint  = $request->complaint;
        $complaint->complaint_id = rand(1000, 9999);
        $complaint->complain_date = date('Y-m-d');
        $complaint->created_by = $created_by;
        $complaint->save();
        if($complaint){
            Mail::send('complaintMail', array( 
            'name' => $created_by, 
            'district' => $request->district,
            'block' => $request->block, 
            'village' => $request->village,
            'subject' => 'Complaint Mail', 
            'form_message' => $request->complaint, 

        ), function($message) use ($request){
            
            $state = $request->session()->get('state');
            $user = DB::table('users')->where('state', $state)->get();
            $message->from('info@bredasrt.etsnetwork.in');
            foreach ($user as $users) {
            $message->to($users->email, 'User')->subject('Complaint Mail');
            }
        }); 
        }
    // Send Whatsapp notification
    $mobile = ['9760944849', '9560652530',$request->mobile];
    foreach($mobile as $number){
    $apiKey = '26f120f7d96ea0d1a7b9662dc027c56a';
    $district = $request->district;
    $block = $request->block;
    $village = $request->village;
    $date = date('Y-m-d');
    $paragraph = $request->complaint;
    $message = "Hello, A New Complaint Request,\n\n"
         . "Date: $date\n"
         . "District: $district\n"
         . "Location: $block\n"
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



    public function view_complaint(Request $request)
    {
        $created_by = $request->session()->get('login');
        $state = $request->session()->get('state');
        $data['loginrole'] = $request->session()->get('role');
        $data['data'] = DB::table('complaints')->where('state', $state)->get();
        $data['role'] = $request->session()->get('role');
        $data['state'] = $request->session()->get('state');
        $data['username'] = $request->session()->get('login');
        return view('complaint.view-complaint', $data);
    }

     public function edit(Request $request, $id)
    {
        $data['complaint'] = Complaint::find($id);
        $data['role'] = $request->session()->get('role');
        $data['state'] = $request->session()->get('state');
        $data['username'] = $request->session()->get('login');
        return view('complaint.update-complaint', $data);
    }

    public function update(Request $request)
    { 
        $id = $request->id;
        $Complaint = Complaint::find($id);
        $created_by = $request->session()->get('login');
                
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/image/', $filename);
            $Complaint->image = $filename;
            $Complaint->resolved_by = $created_by;
            $Complaint->resolve_date = date('Y-m-d');
        }
        
        $Complaint->save();
             if($Complaint){
            Mail::send('complaintresolveMail', array( 

             'name' => $Complaint->created_by, 
            'district' => $Complaint->district,
            'block' => $Complaint->block, 
            'village' => $Complaint->village,
            'subject' => 'Complaint Resolved Mail', 
            'form_message' => $Complaint->complaint, 

        ), function($message) use ($request){ 

            $state = $request->session()->get('state');
            $user = DB::table('users')->where('state', $state)->get();
            $message->from('info@bredasrt.etsnetwork.in');
            foreach ($user as $users) {
            $message->to($users->email, 'User')->subject('Complaint Resolved Mail');
            }

        }); 
        }
        return redirect(route('view-complaint'))->with('status', 'File Submitted Successfully');
    }
    
    public function approve(Request $request, $id)
    {
        $data['complaint'] = Complaint::find($id);
        $data['role'] = $request->session()->get('role');
        $data['state'] = $request->session()->get('state');
        $data['username'] = $request->session()->get('login');
        return view('complaint.approve', $data);
    }
    
    
     public function approve_update(Request $request)
    { 
        $id = $request->id;
        $Complaint = Complaint::find($id);
        $created_by = $request->session()->get('login');
        $Complaint->approve = $request->approve;
        $Complaint->remarks = $request->remarks;
          if($request->approve=="Approved")
        {
            $Complaint->status = 1;
            $Complaint->c_approve_date = date('Y-m-d');
                 }
        
        $Complaint->approved_by = $created_by;
        $Complaint->save();
        if($Complaint){
            Mail::send('complaintapproveMail', array( 

             'name' => $Complaint->created_by, 
            'district' => $Complaint->district,
            'block' => $Complaint->block, 
            'village' => $Complaint->village,
            'subject' => 'Complaint Approve by Complaint User Mail', 
            'form_message' => $Complaint->remarks, 

        ), function($message) use ($request){ 

           $state = $request->session()->get('state');
            $user = DB::table('users')->where('state', $state)->get();
            $message->from('info@bredasrt.etsnetwork.in');
            foreach ($user as $users) {
            $message->to($users->email, 'User')->subject('Complaint Approve by Complaint User Mail');
            }

        }); 
        }
        return redirect(route('view-complaint'))->with('status', 'Complaint Verified Successfully');
    }
    
    public function final_approve(Request $request,$id)
    {
        $data['complaint'] = Complaint::find($id);
        $data['role'] = $request->session()->get('role');
        $data['state'] = $request->session()->get('state');
        $data['username'] = $request->session()->get('login');
        return view('complaint.final-approve', $data);
    }
    
    public function final_approve_update(Request $request)
    { 
        $created_by = $request->session()->get('login');
        $data['role'] = $request->session()->get('role');
        $id = $request->id;
        $Complaint = Complaint::find($id);     
        $Complaint->final_approve = $request->approve;
       $Complaint->final_remarks = $request->remarks;
        if($request->approve =="Approved")
        {
            $Complaint->final_status = 1;
        }
        $Complaint->final_date = date('Y-m-d');

        $Complaint->final_approved_by = $created_by;

 
        $Complaint->final_approved_by = $created_by;
        $Complaint->save();
          if($Complaint){
            Mail::send('complaintfinalapproveMail', array( 
            'name' => $Complaint->created_by, 
            'district' => $Complaint->district,
            'block' => $Complaint->block, 
            'village' => $Complaint->village,
            'subject' => 'Finally Complaint Approve by User Mail', 
            'form_message' => $Complaint->remarks, 

        ), function($message) use ($request){ 

            $state = $request->session()->get('state');
            $user = DB::table('users')->where('state', $state)->get();
            $message->from('info@bredasrt.etsnetwork.in');
            foreach ($user as $users) {
            $message->to($users->email, 'User')->subject('Finally Complaint Approve by User Mail');
            }

        }); 
        }
        return redirect(route('view-complaint'))->with('status', 'Complaint Closed Successfully');
    }


}
