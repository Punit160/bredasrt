<?php

namespace App\Http\Controllers;

use App\Models\VendorProgress;
use Illuminate\Http\Request;
use Excel;
use Illuminate\Contracts\Support\ValidatedData;
use DB;
use Session;

class VendorProgressController extends Controller
{

    public function index(Request $request)
    {

        $data['wo'] = DB::table('woassigns')->select('wassign_id')->get();
        $data['role'] = $request->session()->get('role');
        $data['state'] = $request->session()->get('state');
        return view('vendor.progress.add-vendor-progress', $data);
    }


    public function create(Request $request)
    {
        $created_by = $request->session()->get('login');
        $vp = new VendorProgress();
        $vp->workorder = $request->workorder;
        $vp->state = $request->state;
        $vp->district = $request->district;
        $vp->order_qty = $request->order_qty;
        $vp->r_date = date('Y-m-d');
        if ($request->hasfile('img1')) {


            $file = $request->file('img1');
            $extension = $file->getClientOriginalExtension();
            $filename = 'img1' . time() . '.' . $extension;
            $file->move('uploads/image/', $filename);
            $vp->img1 = $filename;
        }

        if ($request->hasfile('img2')) {
            $file = $request->file('img2');
            $extension = $file->getClientOriginalExtension();
            $filename = 'img2' . time() . '.' . $extension;
            $file->move('uploads/image/', $filename);
            $vp->img2 = $filename;
        }

        $vp->report = $request->report;

        $vp->created_by = $created_by;
        $vp->save();
        return redirect(route('view-vendor-progress'))->with('status', ' Data  Added Successfully');
    }


    public function dailyprogress(Request $request)
    {
          
    
        if ($request) {
            $sd = $request->input('start_date');
            $td = $request->input('till_date');
            $vd = $request->input('vendor');
            $data['sd'] = $request->input('start_date');
            $data['td']= $request->input('till_date');
            $data['vd']= $request->input('vendor');
            $data['wo'] = DB::table('vendor_progress')->whereBetween('r_date', [$sd, $td])->get();
            if( $vd )
            {
                $data['wo'] = DB::table('vendor_progress')->whereBetween('r_date', [$sd, $td])->where('created_by',$vd)->get();

            }
        }
       
         else {
            $data['wo'] = '';
        }
        $data['vendor'] = DB::table('vendor_progress')
        ->select('created_by')
        ->distinct()
        ->get();
      
        return view('vendor.progress.view-daily-progress', $data);
    }


    public function vendorprogress(Request $request)
    {
        $login = $request->session()->get('login');
         $data['role'] = $request->session()->get('role');
        $data['state'] = $request->session()->get('state');
        $data['wo'] = DB::table('vendor_progress')->get();

        return view('vendor.progress.view-vendor-progress', $data);
    }

    public function getDetails(Request $request)
    {
        $wo = $request->input('wo');
        $details = DB::table('woassigns')
            ->select(
                'state',
                'district',
                'quantity',

            )
            ->where('wassign_id', $wo)
            ->first();
        return response()->json($details);
    }
}
