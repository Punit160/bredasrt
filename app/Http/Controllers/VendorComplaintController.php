<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VendorComplaint;
use Illuminate\Support\Facades\DB;
use App\Models\Workorder;
use App\Models\Woassign;
use App\Models\Woreport;
use App\Models\Vendor;

class VendorComplaintController extends Controller
{

    public function view(Request $request)
    {
        $vid = $request->session()->get('loginId');
        $data['loginrole'] = $request->session()->get('role');
        $data['data'] = DB::table('vendor_complaints')->where('status', '=', 1)->get();
        $data['open'] = DB::table('vendor_complaints')->where('status', '=', 0)->get();
        $data['assign'] = DB::table('vendor_complaints')->where('assigned_vid',$vid)->get();
        $data['vendor'] = DB::table('vendors')->get();

        $data['role'] = $request->session()->get('role');
        $data['username'] = $request->session()->get('login');
        return view('vendor.complaint.view-vendor-complaint', $data);
    }

    public function edit(Request $request, $id)
    {
        $data['complaint'] = VendorComplaint::find($id);
        $data['role'] = $request->session()->get('role');
        $data['username'] = $request->session()->get('login');
        return view('vendor.complaint.update-vendor-complaint', $data);
    }

    public function assign(Request $request)
    {

        $id = $request->input('complaint_id');
        $vc = VendorComplaint::find($id);
        $name = Vendor::select('name')->where('id', $request->vendor)->first();
        $vc->assigned_to = $name->name;
        $vc->assigned_vid = $request->vendor;
        $vc->assign_remarks = $request->assign_remarks;
        $vc->save();
        return redirect()->back()->with('status', 'Complaint Assigned Successfully!');
    }

    public function approve(Request $request)
    {
        $created_by = $request->session()->get('login');
        $id = $request->input('complaint_id');
        $vc = VendorComplaint::find($id);
        $vc->approval =  $request->approval;
        $vc->approve_by = $created_by;
        $vc->assign_remarks = $request->assign_remarks;
        $vc->save();
        return redirect()->back()->with('status', 'Complaint Approved Successfully!');
    }
    
}
