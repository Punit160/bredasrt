<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Srtdata;
use DB;
use Session;

class SrtreportController extends Controller
{
    public function phase(Request $request){
        $data['username'] = $request->session()->get('loginName');
        $data['role'] = $request->session()->get('role');
        $username = $request->session()->get('loginName');
        $role = $request->session()->get('role');
        $data['query'] =DB::table('srtdatas')
        ->select(
            'phase',
            DB::raw('COUNT(firm_name) AS site_count'),
            DB::raw('SUM(sanction_load) AS sanction_load'),
            DB::raw('SUM(CASE WHEN material_i_date != "N/A" THEN sanction_load ELSE 0 END) AS material_i_date'),
            DB::raw('SUM(CASE WHEN material_payment = "Yes" THEN plant_sc ELSE 0 END) AS material_payment'),
            DB::raw('SUM(CASE WHEN installation_status = "Installed" THEN sanction_load END) AS installation_status'),
            DB::raw('SUM(CASE WHEN ic_bill_submit = "Yes" THEN plant_sc ELSE 0 END) AS ic_bill_submit'),
            DB::raw('COUNT(CASE WHEN metering_status = "Installed" THEN site_name END) AS metering_status'),
            DB::raw('COUNT(CASE WHEN rms_status = "Installed" THEN firm_name END) AS rms_status'),
            DB::raw('COUNT(CASE WHEN abc_format = "Yes" THEN firm_name END) AS abc_format'),
            DB::raw('COUNT(CASE WHEN geo_image_status = "Yes" THEN firm_name END) AS geo_image_status'),
            DB::raw('COUNT(CASE WHEN insurance = "Yes" THEN firm_name END) AS insurance'),
            DB::raw('SUM(CASE WHEN bill_i_no != "N/A" THEN sanction_load ELSE 0 END) AS bill_i_no'),
            DB::raw('SUM(CASE WHEN final_i_dt = "Yes" THEN sanction_load ELSE 0 END) AS ic_payment')
        )
        ->groupBy('phase')
        ->get();

        return view('report.phase-report', $data);
    }

    public function district(Request $request){
        $data['username'] = $request->session()->get('loginName');
        $data['role'] = $request->session()->get('role');
        $username = $request->session()->get('loginName');
        $role = $request->session()->get('role');
        $data['query'] = DB::table('srtdatas')
        ->select(
            'district',
            DB::raw('COUNT(firm_name) AS site_count'),
            DB::raw('SUM(sanction_load) AS sanction_load'),
            DB::raw('SUM(CASE WHEN material_i_date != "N/A" THEN sanction_load ELSE 0 END) AS material_i_date'),
            DB::raw('SUM(CASE WHEN material_payment = "Yes" THEN plant_sc ELSE 0 END) AS material_payment'),
            DB::raw('SUM(CASE WHEN installation_status = "Installed" THEN sanction_load END) AS installation_status'),
            DB::raw('SUM(CASE WHEN ic_bill_submit = "Yes" THEN plant_sc ELSE 0 END) AS ic_bill_submit'),
            DB::raw('COUNT(CASE WHEN metering_status = "Installed" THEN site_name END) AS metering_status'),
            DB::raw('COUNT(CASE WHEN rms_status = "Installed" THEN firm_name END) AS rms_status'),
            DB::raw('COUNT(CASE WHEN abc_format = "Yes" THEN firm_name END) AS abc_format'),
            DB::raw('COUNT(CASE WHEN geo_image_status = "Yes" THEN firm_name END) AS geo_image_status'),
            DB::raw('COUNT(CASE WHEN insurance = "Yes" THEN firm_name END) AS insurance'),
            DB::raw('SUM(CASE WHEN bill_i_no != "N/A" THEN sanction_load ELSE 0 END) AS bill_i_no'),
            DB::raw('SUM(CASE WHEN final_i_dt = "Yes" THEN sanction_load ELSE 0 END) AS ic_payment')
        )
        ->groupBy('district')
        ->get();

        return view('report.district-report', $data);
    }


    public function vendor(Request $request){
        $data['username'] = $request->session()->get('loginName');
        $data['role'] = $request->session()->get('role');
        $username = $request->session()->get('loginName');
        $role = $request->session()->get('role');
        $data['query'] =DB::table('srtdatas')
        ->select(
            'vendor',
            DB::raw('COUNT(firm_name) AS site_count'),
            DB::raw('SUM(sanction_load) AS sanction_load'),
            DB::raw('SUM(CASE WHEN material_i_date != "N/A" THEN sanction_load ELSE 0 END) AS material_i_date'),
            DB::raw('SUM(CASE WHEN material_payment = "Yes" THEN plant_sc ELSE 0 END) AS material_payment'),
            DB::raw('SUM(CASE WHEN installation_status = "Installed" THEN sanction_load END) AS installation_status'),
            DB::raw('SUM(CASE WHEN ic_bill_submit = "Yes" THEN plant_sc ELSE 0 END) AS ic_bill_submit'),
            DB::raw('COUNT(CASE WHEN metering_status = "Installed" THEN site_name END) AS metering_status'),
            DB::raw('COUNT(CASE WHEN rms_status = "Installed" THEN firm_name END) AS rms_status'),
            DB::raw('COUNT(CASE WHEN abc_format = "Yes" THEN firm_name END) AS abc_format'),
            DB::raw('COUNT(CASE WHEN geo_image_status = "Yes" THEN firm_name END) AS geo_image_status'),
            DB::raw('COUNT(CASE WHEN insurance = "Yes" THEN firm_name END) AS insurance'),
            DB::raw('SUM(CASE WHEN bill_i_no != "N/A" THEN sanction_load ELSE 0 END) AS bill_i_no'),
            DB::raw('SUM(CASE WHEN final_i_dt = "Yes" THEN sanction_load ELSE 0 END) AS ic_payment')
        )
        ->groupBy('vendor')
        ->get();

        return view('report.vendor-report', $data);
    }
}
