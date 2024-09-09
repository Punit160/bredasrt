<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Notification;
use App\Models\User;
use GuzzleHttp\Client;
use Session;
use Carbon\Carbon;
use Mail;

class NotificationController extends Controller
{
    public function add_notification(Request $request)
    {
        $data['role'] = $request->session()->get('role');
        $data['state'] = $request->session()->get('state');
        $data['username'] = $request->session()->get('login');
        $state = $request->session()->get('state');
        $data['user'] = DB::table('users')->where('state', $state)->get();
        return view('notification.add-notification', $data);
    }
    
        public function getUsers($id)
    {
        $users = User::where('id', $id)->first();

        return response()->json($users);
    }


    public function create(Request $request)
    {
        $created_by = $request->session()->get('login');
        $email = $request->session()->get('loginName');
        $state = $request->session()->get('state');
        $user = DB::table('users')->where('id', $request->userId)->first();
        $notification = new Notification();
        $notification->name = $request->name;
        $notification->email = $user->email;
        $notification->task_type = $request->task_type;
        $notification->frequency = $request->frequency;
        $notification->task  = $request->task;
        $notification->instruction = $request->instruction;
        $notification->deadline_date = $request->date;
        $carbonDate = Carbon::createFromFormat('Y-m-d', $request->date)->startOfDay();
        $newDate = $carbonDate->subDay();
        $formattedDate = $newDate->toDateString();
        $notification->before_date = $formattedDate;
        $notification->deadline_time  = $request->time;
        $notification->created_by = $created_by;
        $notification->save();
        if($notification){
            Mail::send('notificationMail', array( 
            'name' => $created_by, 
            'email' => $request->email,
            'task' => $request->task,
            'subject' => 'New Task Assign !!', 
            'form_message' => $request->instruction, 

        ), function($message) use ($request){
            $usermail = DB::table('users')->where('id', $request->userId)->first();
            $message->from('info@bredasrt.etsnetwork.in');
            $message->to($usermail->email, 'User')->subject('New Task Assign !!');
        }); 
        }
    // Send Whatsapp notification
    $userwhts = DB::table('users')->where('id', $request->userId)->first();
    $mobile = ['9760944849', '9560652530'];
    foreach($mobile as $number){
    $apiKey = '26f120f7d96ea0d1a7b9662dc027c56a';
    $name = $request->name;
    $email = $request->email;
    $task = $request->task;
    $date = date('Y-m-d');
    $paragraph = $request->instruction;
    $message = "Hello, A New Complaint Request,\n\n"
         . "Date: $date\n"
         . "Name: $name\n"
         . "Email: $email\n"
         . "Task: $task\n"
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



    public function view_notification(Request $request)
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


}
