<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Session;
use DB;
use Hash;

class LoginController extends Controller
{

  public function index(Request $request){
    $data['username'] = $request->session()->get('loginName');
    $username = $request->session()->get('loginName');
    if($username){
        return redirect(route('state'));
    }
    else{
       return view('login', $data); 
    }
    
   }


    public function loginuser(Request $request){
        $validator = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
       

        $user = DB::table('users')->where('email', '=', $request->email)->first();
        if($user){
            if($request->password == $user->password){
                $request->session()->put('loginId', $user->id );
                $request->session()->put('loginName', $user->email);
                $request->session()->put('login', $user->name);
                $request->session()->put('role', $user->role);
                 $request->session()->put('state', $user->state);
                if($user->role == '0' || $user->role == '1'){
                return redirect(route('state'));
               }
               elseif($user->role == '2'){
                return redirect(route('state'));
               }
               elseif($user->role == '3'){
                return redirect(route('inhouse-product-dispatch'));
               }
               elseif($user->role == '4'){
               return redirect(route('add-product-dispatch'));
               }
               elseif($user->role == '5'){
               return redirect(route('view-request'));
               }
               elseif($user->role == '6'){
               return redirect(route('add-request'));
               }
            }
            else{
                return back()->with('status','Password not matches!!!');
            }
        }
        else{
                return back()->with('status','Email Id not exist!!!');
            }
        
    }


    public function logout(){
        if (Session::has('loginName')){
            Session::pull('loginName');
            Session::pull('loginId');
            Session::pull('role');
            return redirect(route('login'));
        }
    }
    
    
    public function solartype(Request $request){
        $data['username'] = $request->session()->get('loginName');
        $data['role'] = $request->session()->get('role');
        $role = $request->session()->get('role');
        $state_data = $request->session()->get('state');
        if($role != '0'){
         $data['state'] = $state_data;
        }
        else{
         $data['state']  = 'bihar';
         DB::table('users')
        ->where('role', '0')
        ->update(['state' => 'bihar']);
         $request->session()->put('state', 'bihar');
        }
        return view('pages.solartype', $data);
       }
       
    public function jammu_solartype(Request $request){
        $data['username'] = $request->session()->get('loginName');
         $data['role'] = $request->session()->get('role');         
         $role = $request->session()->get('role');
         $loginId = $request->session()->get('loginId');
         $state_data = $request->session()->get('state');
         if($role != '0' && $role != '1'){
         $data['state'] = $state_data;
        }
         elseif($role == '1'){
        if($state_data == 'jammu' || $state_data == 'kashmir'){
            $data['state']  = 'jammu';
            DB::table('users')
            ->where('role', '1')
            ->where('id', $loginId)
            ->where(function($query) {
             $query->where('state', 'jammu')
             ->orWhere('state', 'kashmir');
             })->update(['state' => 'jammu']);
          $request->session()->put('state', 'jammu');
         }
         }
        else{
          $data['state']  = 'jammu';
         DB::table('users')
        ->where('role', '0')
        ->update(['state' => 'jammu']);
         $request->session()->put('state', 'jammu');
        }
        return view('pages.jammu-solartype', $data);
    }
        
    public function kashmir_solartype(Request $request){
        $data['username'] = $request->session()->get('loginName');
         $data['role'] = $request->session()->get('role'); 
         $loginId = $request->session()->get('loginId');
         $role = $request->session()->get('role');
        $state_data = $request->session()->get('state');
        if($role != '0' && $role != '1'){
         $data['state'] = $state_data;
        }
        elseif($role == '1'){
        if($state_data == 'jammu' || $state_data == 'kashmir'){
        $data['state']  = 'kashmir';
         DB::table('users')
            ->where('role', '1')
            ->where('id', $loginId)
            ->where(function($query) {
             $query->where('state', 'jammu')
             ->orWhere('state', 'kashmir');
             })->update(['state' => 'kashmir']);
         $request->session()->put('state', 'kashmir');
        }
         }
        else{
         $data['state']  = 'kashmir';
         DB::table('users')
        ->where('role', '0')
        ->update(['state' => 'kashmir']);
         $request->session()->put('state', 'kashmir');
        }
        
        return view('pages.jammu-solartype', $data);
       }
       
     public function up_solartype(Request $request){
        $data['username'] = $request->session()->get('loginName');
         $data['role'] = $request->session()->get('role');         
         $role = $request->session()->get('role');
        $state_data = $request->session()->get('state');
        if($role != '0'){
         $data['state'] = $state_data;
        }
        else{
          $data['state']  = 'up';
              DB::table('users')
        ->where('role', '0')
        ->update(['state' => 'up']);
        $request->session()->put('state', 'up');
        }
        return view('pages.up-solartype', $data);
       }
       
    public function karnataka_solartype(Request $request){
        $data['username'] = $request->session()->get('loginName');
         $data['role'] = $request->session()->get('role');         
         $role = $request->session()->get('role');
        $state_data = $request->session()->get('state');
        if($role != '0'){
         $data['state'] = $state_data;
        }
        else{
          $data['state']  = 'karnataka';
          DB::table('users')
        ->where('role', '0')
        ->update(['state' => 'karnataka']);
          $request->session()->put('state', 'karnataka');
        }
        return view('pages.karnataka-solartype', $data);
       }
       
        
    public function state(Request $request){
        $data['username'] = $request->session()->get('loginName');
         $data['role'] = $request->session()->get('role');
         $data['state'] = $request->session()->get('state');
         $role = $request->session()->get('role');
        return view('pages.states', $data);
       }
}
