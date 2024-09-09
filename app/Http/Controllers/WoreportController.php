<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workorder;
use App\Models\Woassign;
use App\Models\Woreport;
use App\Models\Vendor;
use Illuminate\Support\Facades\DB;
use Session;
use PDF;
use file;

class WoreportController extends Controller
{
    public function index(Request $request)
    {
        $data['wo'] = Woassign::all();
        $data['username'] = $request->session()->get('loginName');
        $data['role'] = $request->session()->get('role');
        $data['vendor'] = DB::table('vendors')->get();
        return view('vendor.woreport.add-wo-report', $data);
    }

    public function create(Request $request)
    {
        $created_by = $request->session()->get('login');
        $wo = new Woreport();
        $rand = rand(10000, 99999);
        $date = date('d-m-y');
        $wrid = 'KLKWR'.$rand;
        $wo->daily_report_id = $wrid;
        $wo->date = $date;
        $wo->workorder = $request->workorder;
        $wo->state = $request->state;
        $wo->district = $request->district;
        $wo->block = $request->block;
        $wo->type = $request->type;
        $wo->quantity = $request->quantity;
        $wo->remarks = $request->remarks;
        $wo->created_by = $created_by;
        $wo->save();
        return redirect()->back()->with('status', 'Report Added Successfully !!!');
    }

    public function view_wo_report(Request $request)
    {
        $data['woreport'] = Woreport::all();
        $data['username'] = $request->session()->get('loginName');
        $data['role'] = $request->session()->get('role');
        $data['vendor'] = DB::table('vendors')->get();
        return view('vendor.woreport.view-wo-report', $data);
    }
}
