<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workorder;
use App\Models\Woassign;
use App\Models\Vendor;
use Illuminate\Support\Facades\DB;
use Session;
use PDF;
use file;

class WorkOrderController extends Controller
{

    public function index(Request $request)
    {
        $data['username'] = $request->session()->get('loginName');
        $data['role'] = $request->session()->get('role');
        $data['vendor'] = DB::table('vendors')->get();
        return view('vendor.workorder.add-workorder', $data);
    }
    public function create(Request $request)
    {
        $created_by = $request->session()->get('login');
        $wo = new Workorder();
        $wo_id = 'KLK' . '-' . mt_rand(1, 9999);
        $wo->wo_id =  $wo_id;
        $wo->work_order = $request->workorder;
        $wo->type = $request->type;
        $wo->state = $request->state;
        $wo->wo_number = $request->wo_number;
        $wo->project_head = $request->project_head;
        $wo->email = $request->email;
        $wo->phone = $request->contact;
        $wo->created_by = $created_by;
        if ($request->file('file_input')) {
            $image = $request->file('file_input');
            $imageName = "file_input-" . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload_images'), $imageName);
            $wo->file_input = $imageName;
        }
        $wo->order_qty = $request->order_qty;
        $wo->date = date('d-m-Y');

        $wo->created_by = $created_by;
        $wo->save();
        return redirect()->back()->with('status', 'Data Saved Successfully !!!');
    }

    public function view(Request $request)
    {
        $data['wo'] = Workorder::all();
        $data['username'] = $request->session()->get('loginName');
        $data['role'] = $request->session()->get('role');
        return view('vendor.workorder.view-workorder', $data);
    }

    public function edit(Request $request, $id)
    {
        $data['wo'] = Workorder::find($id);
        $data['username'] = $request->session()->get('loginName');
        $data['role'] = $request->session()->get('role');
        return view('vendor.workorder.update-workorder', $data);
    }

    public function update(Request $request)
    {
        $created_by = $request->session()->get('login');
        $id = $request->wid;
        $wo = Workorder::findOrFail($id);
        $wo->work_order = $request->workorder;
        $wo->state = $request->state;
        $wo->wo_number = $request->wo_number;
        $wo->project_head = $request->project_head;
        $wo->email = $request->email;
        $wo->phone = $request->phone;
        if ($request->file('file_input')) {
            $image = $request->file('file_input');
            $imageName = "file_input-" . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('upload_images'), $imageName);
            $wo->file_input = $imageName;
        }
        $wo->order_qty = $request->order_qty;
        // $wo->updated_by = $created_by;
        $wo->save();
        return redirect()->back()->with('status', 'Details updated successfully!');
    }

    public function destroy($id)
    {
        $wo = Workorder::find($id);
        $wo->delete();
        return back()->with('status', 'Work order Data Deleted Successfully!!');
    }


    public function wo_assign(Request $request)
    {
        $data['wo']=Db::table('workorders')->select('work_order')->get();
        $data['username'] = $request->session()->get('loginName');
        $data['role'] = $request->session()->get('role');
        $data['vendor'] = DB::table('vendors')->get();
        return view('vendor.workorder.vendor-workorder-assign',$data);
    }
    public function create_wo_assign(Request $request)
    {
        $created_by = $request->session()->get('login');
        $wo = new Woassign();
        $rand = rand(10000, 99999);
        $waid = 'KLKWA'.$rand;
        $wo->wassign_id = $waid;
        $wo->wo = $request->workorder;
        $wo->vendor_id = $request->vendor;
        $wo->state = $request->state;
        $wo->s_date = $request->s_date;
        $wo->d_date = $request->d_date;
        $wo->district = $request->district;
        $wo->block = $request->block;
        $wo->quantity = $request->order_qty;
        $wo->remarks = $request->remarks;
        $wo->created_by = $created_by;
        $wo->save();
        return redirect()->back()->with('status', 'Data Saved Successfully !!!');
    }

    public function view_wo_assign(Request $request)
    {
        $data['woassign'] = Woassign::all();
        $data['username'] = $request->session()->get('loginName');
        $data['role'] = $request->session()->get('role');
        $data['vendor'] = DB::table('vendors')->get();
        return view('vendor.workorder.view-workorder-assign', $data);
    }
}
