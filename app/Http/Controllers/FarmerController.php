<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\farmer;
use App\Imports\FarmerImport;
use Excel;
use Illuminate\Support\Facades\DB;
use Session;


class FarmerController extends Controller

{
    /**
     * Display a listing of the resource.
    


    
     * Show the form for creating a new resource.
     */
    
    public function view_farmer(Request $request)
    {   $data['role'] = $request->session()->get('role');
        $data['farmer'] = DB::table('farmers')->get();
        $data['userprofile'] = $request->session()->get('profile');
        return view('farmer.view-farmer', $data);
    }

    public function farmerImport(Request $request)
    {
        set_time_limit(0);
        $filePath = $request->file('farmerexcel');
        $import = new FarmerImport();
        Excel::import($import, $filePath);
        $savedCount = $import->getSavedCount();
        return back()->with('status', $savedCount . ' Rows Imported Successfully');
    }
  
}

