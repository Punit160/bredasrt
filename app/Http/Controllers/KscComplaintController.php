<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\KscComplaint;
use Session;
use Mail;

class KscComplaintController extends Controller
{
    public function add_complaint()
    {
        $data['district'] = DB::table('kscengineers')->select('district')->get();
        return view('up.ksbcomplaint.add-complaint', $data);
    }

    public function create(Request $request)
    {
        $created_by = $request->session()->get('login');
        $email = $request->session()->get('loginName');
        $eng = DB::table('kscengineers')->where('district', $request->district)->first();
        $complaint = new complaint();
        $complaint->district = $request->district;
        $complaint->block = $request->block;
        $complaint->village  = $request->village;
        $complaint->complaint_id = rand(1000, 9999);
        $complaint->complain_date = date('Y-m-d');
        $complaint->c_name = $request->c_name;
        $complaint->email = $request->email;
        $complaint->c_mobile = $request->c_mobile;
        $complaint->complaint = $request->complaint;
        $complaint->engineer_assign = $eng->id;
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
            
           $user = DB::table('users')->where('role', 'User')->get();
            $message->from('info@himachalcomplaint.etsservices.in');
            foreach ($user as $users) {
            $message->to($users->email, 'User')->subject('Complaint Mail');
            }

        }); 
        
          // Send SMS notifications
        $number = '9560652530';
        $number2 = $eng->contact;
        $apiKey = '26f120f7d96ea0d1a7b9662dc027c56a';
        $name = $request->c_name;
        $cmobile = $request->c_mobile;
        $district = $request->district;
        $block = $request->block;
        $village = $request->village;
        $complaintText = $request->complaint;
        $date = date('d-m-Y');

        $message = "Dear Team,\n\n"
            . "This is to inform you that a new client Complaint is there in the KLK. Below are the details for the same,\n\n"
            . "Date: $date\n"
            . "Name: $name\n"
            . "Mobile: $cmobile\n"
            . "District: $district\n"
            . "Block: $block\n"
            . "Village: $village\n"
            . "Complaint: $complaintText";

        $message2 = $message;

        // Construct SMS URLs
        $smsUrl = "https://demo.digitalsms.biz/api?apikey=$apiKey&mobile=$number&msg=" . urlencode($message);
        $smsUrl2 = "https://demo.digitalsms.biz/api?apikey=$apiKey&mobile=$number2&msg=" . urlencode($message2);

        // Send SMS
        $response1 = file_get_contents($smsUrl);
        $response2 = file_get_contents($smsUrl2);

        }
        return back()->with('status', 'Complaint Added Successfully');
    }

    public function view_complaint(Request $request)
    {
        $created_by = $request->session()->get('login');
        $data['loginrole'] = $request->session()->get('role');
        $data['data'] = DB::table('ksccomplaints')->paginate(50);
        return view('up.ksbcomplaint.view-complaint', $data);
    }
    
        
    public function view_eng_complaint(Request $request)
    {
        $created_by = $request->session()->get('login');
        $data['loginrole'] = $request->session()->get('role');
        $userid = $request->session()->get('loginId');
        $userdetail = DB::table('users')->where('id', $userid)->first();
        $eng = DB::table('kscengineers')->where('contact', $userdetail->mobile)->first();
        $data['data'] = DB::table('ksccomplaints')->where('engineer_assign', $eng->id)->paginate(50);
        return view('up.ksbcomplaint.view-eng-comp', $data);
    }
    
       public function final_complaint(Request $request)
    {
        $created_by = $request->session()->get('login');
        $data['loginrole'] = $request->session()->get('role');
        $data['data'] = DB::table('ksccomplaints')->where('solved', '!=' , '')->paginate(50);
        return view('up.ksbcomplaint.final-comp', $data);
    }


     public function edit($id)
    {
        $data['complaint'] = KscComplaint::find($id);
        return view('up.ksbcomplaint.update-complaint', $data);
    }

    public function update(Request $request)
    { 
        $id = $request->id;
        $Complaint = KscComplaint::find($id);
        $eng = DB::table('kscengineers')->where('id', $Complaint->engineer_assign)->first();
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
        $Complaint->solved = $request->solved;
        $Complaint->solved_remark = $request->solved_remark;
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

             $user = DB::table('users')->get();
            $message->from('info@himachalcomplaint.etsservices.in');
            foreach ($user as $users) {
            $message->to($users->email, 'User')->subject('Complaint Resolved Mail');
            }

        }); 
        
            // Send SMS notifications
        $number = '9560652530';
        $number2 = $eng->contact;
        $apiKey = '26f120f7d96ea0d1a7b9662dc027c56a';
        $name = $Complaint->c_name;
        $cmobile = $Complaint->c_mobile;
        $district = $Complaint->district;
        $block = $Complaint->block;
        $village = $Complaint->village;
        $complaintText = $request->solved_remark;
        $date = date('d-m-Y');

        $message = "Dear Team,\n\n"
            . "This is to inform you that your complaint has been resolved. Below are the details for the same,\n\n"
            . "Date: $date\n"
            . "Name: $name\n"
            . "Mobile: $cmobile\n"
            . "District: $district\n"
            . "Block: $block\n"
            . "Village: $village\n"
            . "Remarks: $complaintText";

        $message2 = $message;

        // Construct SMS URLs
        $smsUrl = "https://demo.digitalsms.biz/api?apikey=$apiKey&mobile=$number&msg=" . urlencode($message);
        $smsUrl2 = "https://demo.digitalsms.biz/api?apikey=$apiKey&mobile=$number2&msg=" . urlencode($message2);

        // Send SMS
        $response1 = file_get_contents($smsUrl);
        $response2 = file_get_contents($smsUrl2);

        }
        return redirect(route('view-kusumc-complaint'))->with('status', 'Complaint Verified Successfully');
    }
    
    public function final_approve($id)
    {
        $data['complaint'] = KscComplaint::find($id);
        return view('up.ksbcomplaint.final-approve', $data);
    }
    
    public function final_approve_update(Request $request)
    { 
        $created_by = $request->session()->get('login');
        $id = $request->id;
        $Complaint = KscComplaint::find($id);     
        $Complaint->final_approve = $request->approve;
       $Complaint->final_remarks = $request->remarks;
       $eng = DB::table('kscengineers')->where('id', $Complaint->engineer_assign)->first();
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

             $user = DB::table('users')->get();
            $message->from('info@himachalcomplaint.etsservices.in');
            foreach ($user as $users) {
            $message->to($users->email, 'User')->subject('Finally Complaint Approve by User Mail');
            }

        }); 
        
             // Send SMS notifications
        $number = '9560652530';
        $number2 = $eng->contact;
        $apiKey = '26f120f7d96ea0d1a7b9662dc027c56a';
        $name = $Complaint->c_name;
        $cmobile = $Complaint->c_mobile;
        $district = $Complaint->district;
        $block = $Complaint->block;
        $village = $Complaint->village;
        $complaintText = $request->solved_remark;
        $date = date('d-m-Y');

        $message = "Dear Team,\n\n"
            . "This is to inform you that your complaint has been Verified. Below are the details for the same,\n\n"
            . "Date: $date\n"
            . "Name: $name\n"
            . "Mobile: $cmobile\n"
            . "District: $district\n"
            . "Block: $block\n"
            . "Village: $village\n"
            . "Remarks: $complaintText";

        $message2 = $message;

        // Construct SMS URLs
        $smsUrl = "https://demo.digitalsms.biz/api?apikey=$apiKey&mobile=$number&msg=" . urlencode($message);
        $smsUrl2 = "https://demo.digitalsms.biz/api?apikey=$apiKey&mobile=$number2&msg=" . urlencode($message2);

        // Send SMS
        $response1 = file_get_contents($smsUrl);
        $response2 = file_get_contents($smsUrl2);
        }
        return redirect(route('view-kusumc-complaint'))->with('status', 'Complaint Closed Successfully');
    }


}
