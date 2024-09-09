<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\SSLImport;
use App\Models\Ssl;
use Illuminate\Support\Facades\DB;
use Excel;

class SSlController extends Controller
{
    public function index(Request $request)
    {
        $data['role'] = $request->session()->get('role');
        $data['state'] = $request->session()->get('state');

        return view('ssl.add-SSL', $data);
    }
    public function create(Request $request)
    {
       
        $state = $request->session()->get('state');
        $created_by = $request->session()->get('login');
        $ssl = new Ssl();
        $ssl->project_name = $request->project_name;
        $ssl->loi_no = $request->loi_no;
        $ssl->district = $request->district;
        $ssl->bill_sign_date = $request->bill_sign_date;
        $ssl->work_order_no = $request->work_order_no;
        $ssl->invoice_no = $request->invoice_no;
        $ssl->invoice_date = $request->invoice_date;
        $ssl->invoice_qty = $request->invoice_qty;
        $ssl->total_installed = $request->total_installed;
        $ssl->jcr_submitted = $request->jcr_submitted;
        $ssl->under_sdm_verification = $request->under_sdm_verification;
        $ssl->sdm_submission_date = $request->sdm_submission_date;
        $ssl->not_submitted_to_sdm = $request->not_submitted_to_sdm;
        $ssl->under_approved = $request->under_approved;
        $ssl->approved_date = $request->approved_date;
        $ssl->payment_status = $request->payment_status;
        $ssl->pay_85 = $request->pay_85;
        $ssl->scheme_name = $request->scheme_name;
        $ssl->first_year_amc_payment = $request->first_year_amc_payment;
        $ssl->second_year_amc_payment = $request->second_year_amc_payment;
        $ssl->created_by = $created_by;
        $ssl->state = $state;
        $ssl->save();
        return redirect()->back()->with('status', 'Data Saved Successfully !!!');
    }

    public function view(Request $request)
    {
        $data['ssl'] = Ssl::get();
        $data['role'] = $request->session()->get('role');
        $data['state'] = $request->session()->get('state');
        return view('ssl.view-SSL', $data);
    }



    /**
     * Show the form for creating a new resource.
     */
    public function edit(Request $request, $id)
    {
        $data['ssl'] = Ssl::find($id);

        return view('ssl.update-SSL', $data);
    }

    public function update(Request $request)
    {
       
        $id = $request->id;
        $ssl = Ssl::findOrFail($id);
        $ssl->project_name = $request->project_name;
        $ssl->loi_no = $request->loi_no;
        $ssl->district = $request->district;
        $ssl->bill_sign_date = $request->bill_sign_date;
        $ssl->work_order_no = $request->work_order_no;
        $ssl->invoice_no = $request->invoice_no;
        $ssl->invoice_date = $request->invoice_date;
        $ssl->invoice_qty = $request->invoice_qty;
        $ssl->total_installed = $request->total_installed;
        $ssl->jcr_submitted = $request->jcr_submitted;
        $ssl->under_sdm_verification = $request->under_sdm_verification;
        $ssl->sdm_submission_date = $request->sdm_submission_date;
        $ssl->not_submitted_to_sdm = $request->not_submitted_to_sdm;
        $ssl->under_approved = $request->under_approved;
        $ssl->approved_date = $request->approved_date;
        $ssl->payment_status = $request->payment_status;
        $ssl->pay_85 = $request->pay_85;
        $ssl->scheme_name = $request->scheme_name;
        $ssl->first_year_amc_payment = $request->first_year_amc_payment;
        $ssl->second_year_amc_payment = $request->second_year_amc_payment;
        $ssl->save();
        return redirect()->back()->with('status', 'Details updated successfully!');
    }



    public function upload_SSL(Request $request)
    {
        $data['role'] = $request->session()->get('role');
        $data['state'] = $request->session()->get('state');
        $state = $request->session()->get('state');
        return view('ssl.upload-SSL', $data);
    }


    public function upload(Request $request)
    {

        set_time_limit(0);
        $state = $request->session()->get('state');
        $created_by = $request->session()->get('login');
        $filePath = $request->file('SSL');
        $import = new SSLImport($state, $created_by);
        Excel::import($import, $filePath);
        $savedCount = $import->getSavedCount();

        return back()->with('status', $savedCount . ' Rows Imported Successfully');
    }
    

}
