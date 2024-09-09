<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use Carbon\Carbon;
use GuzzleHttp\Client;
use DB;
use Session;
use Mail;

class WeekCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
     protected $signature = 'weekcommand:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
   public function handle()
    {

        $date = Carbon::now()->toDateString();
        $time = Carbon::now()->format('H:i');
        $single = DB::table('notifications')->where('task_type', '2')->where('frequency', '2')->get();
        foreach($single as $singles){
          $userdetail =  DB::table('notifications')->where('id', $singles->id)->whereDate('before_date','<=',$date)->first();
          if($userdetail){
            Mail::send('notificationMail', array( 
            'name' => $userdetail->name, 
            'email' => $userdetail->email,
            'task' => $userdetail->task,
            'subject' => 'New Task Assign !!', 
            'form_message' => $userdetail->instruction, 

        ), function($message) use ($userdetail){
            $usermail = DB::table('users')->where('id', $userdetail->id)->first();
            $message->from('info@bredasrt.etsnetwork.in');
            $message->to($usermail->email, 'User')->subject('New Task Assign !!');
        }); 
        
    // Send Whatsapp notification
    $userwhts = DB::table('users')->where('id', $userdetail->id)->first();
    $mobile = ['9760944849', '9560652530'];
    foreach($mobile as $number){
    $apiKey = '26f120f7d96ea0d1a7b9662dc027c56a';
    $name = $userdetail->name;
    $email = $userdetail->email;
    $task = $userdetail->task;  
    $date = date('Y-m-d');
    $paragraph = $userdetail->instruction;
    $message = "Hello, A New Complaint Request,\n\n"
         . "Date: $date\n"
         . "Name: $name\n"
         . "Email: $email\n"
         . "Task: $task\n"
         . "$paragraph";

    $smsUrl = "https://demo.digitalsms.biz/api?apikey=$apiKey&mobile=$number&msg=$message";
    try {
        $client = new Client();
        $response = $client->request('GET', $smsUrl);
        if ($response->getStatusCode() != 200) {
            return redirect()->back();
        }
    } catch (\Exception $e) {
        return redirect()->back();
    }
    
}
}
        }
        $this->info('Success'); 
    }
    
}
