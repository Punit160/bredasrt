<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use Excel;
use Illuminate\Contracts\Support\ValidatedData;
use DB;
use Session;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $data['wo'] = DB::table('workorders')->select('wo_id', 'work_order')->get();
        $data['ph'] = DB::table('workorders')->select('project_head')->get();
         $data['role'] = $request->session()->get('role');
        $data['state'] = $request->session()->get('state');
        return view('vendor.payment.add-payment', $data);
    }
  

    public function view(Request $request)
    {
        $data['payment'] = DB::table('payments')->get();
        $data['role'] = $request->session()->get('role');
        $data['state'] = $request->session()->get('state');
        return view('vendor.payment.view-payment', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $created_by = $request->session()->get('login');
        $payment = new Payment();
        $payment->work_order = $request->work_order;
        $payment->project_head = $request->project_head;
        $payment->payment_date = $request->payment_date;
        $payment->payment_mode = $request->payment_mode;
        $payment->amount = $request->amount;
        if ($request->hasfile('file')) {
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            $filename = 'file' . time() . '.' . $extension;
            $file->move('uploads/image/', $filename);
            $payment->file = $filename;
        }
        $payment->amount_text = $request->amount_text;
        $payment->created_by = $created_by;
        $payment->save();
        return redirect(route('view-payment'))->with('status', ' Data  Added Successfully');
    }

    public function edit($id)
    {
        $data['wo'] = DB::table('workorders')->select('wo_id', 'work_order')->get();
        $data['ph'] = DB::table('workorders')->select('project_head')->get();
         $data['role'] = $request->session()->get('role');
        $data['state'] = $request->session()->get('state');
        $data['payment'] = payment::find($id);
        return view('vendor.payment.update-payment', $data);
    }


    public function update(Request $request)
    {
        $created_by = $request->session()->get('login');
        $id = $request->id;
        $payment = Payment::find($id);
        $payment->work_order = $request->work_order;
        $payment->project_head = $request->project_head;
        $payment->payment_date = $request->payment_date;
        $payment->payment_mode = $request->payment_mode;
        $payment->amount = $request->amount;
        if ($request->hasfile('file')) {
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            $filename = 'file' . time() . '.' . $extension;
            $file->move('uploads/image/', $filename);
            $payment->file = $filename;
        }
        $payment->amount_text = $request->amount_text;
        $payment->save();
        return back()->with('status', 'Data Updated Successfully');
    }

    public function destroy($id)
    {
        $payment = Payment::find($id);
        $payment->delete();
        return redirect(route("view-payment"))->with('status', 'Data Deleted Successfully!!');
    }
}
