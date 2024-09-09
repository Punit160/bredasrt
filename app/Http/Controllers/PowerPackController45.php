<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PowerPack;
use App\Imports\PowerPackImport;
use Excel;

class PowerPackController extends Controller
{
    public function index(Request $request)
    {
        $data['role'] = $request->session()->get('role');
        $data['state'] = $request->session()->get('state');

        return view('powerpack.add-powerpack', $data);
    }
    public function create(Request $request)
    {
        $request->validate([
            'beneficiary_contact' => 'required|min:10|max:10',

        ]);

        $state = $request->session()->get('state');
        $created_by = $request->session()->get('login');
        $power = new PowerPack();
        $power->serial_num = $request->serial_num;
        $power->empanelled_agency = $request->empanelled_agency;
        $power->beneficiary_name = $request->beneficiary_name;
        $power->beneficiary_contact = $request->beneficiary_contact;
        $power->beneficiary_gender = $request->beneficiary_gender;
        $power->latitude = $request->latitude;
        $power->longitude = $request->longitude;
        $power->district = $request->district;
        $power->beneficiary_address = $request->beneficiary_address;
        $power->contractor_name = $request->contractor_name;
        $power->material_dispatch = $request->material_dispatch;
        $power->material_dispatch_date = $request->material_dispatch_date;
        $power->installation_status = $request->installation_status;
        $power->installation_date = $request->installation_date;
        $power->inspection_status = $request->inspection_status;
        $power->inspection_status_date = $request->inspection_status_date;
        $power->material_payment_80 = $request->material_payment_80;
        $power->material_payment_80_date = $request->material_payment_80_date;
        $power->material_payment_41 = $request->material_payment_41;
        $power->material_payment_41_date = $request->material_payment_41_date;
        $power->material_payment_42 = $request->material_payment_42;
        $power->material_payment_42_date = $request->material_payment_42_date;
        $power->material_payment_43 = $request->material_payment_43;
        $power->material_payment_43_date = $request->material_payment_43_date;
        $power->material_payment_44 = $request->material_payment_44;
        $power->material_payment_44_date = $request->material_payment_44_date;
        $power->material_payment_45 = $request->material_payment_45;
        $power->material_payment_45_date = $request->material_payment_45_date;
        if ($request->file('site_file_1')) {
            $image = $request->file('site_file_1');
            $imageName = "site_file_1" . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/image'), $imageName);
            $power->site_file_1 = $imageName;
        }
        if ($request->file('site_file_2')) {
            $image = $request->file('site_file_2');
            $imageName = "site_file_2" . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/image'), $imageName);
            $power->site_file_2 = $imageName;
        }
        if ($request->file('site_file_3')) {
            $image = $request->file('site_file_3');
            $imageName = "site_file_3" . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/image'), $imageName);
            $power->site_file_3 = $imageName;
        } 
        if ($request->file('site_file_4')) {
            $image = $request->file('site_file_4');
            $imageName = "site_file_4" . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/image'), $imageName);
            $power->site_file_4 = $imageName;
        }
      
        $power->remarks = $request->remarks;
        $power->state = $request->state;
        $power->created_by = $created_by;
        $power->state = $state;
        $power->save();
        return redirect()->back()->with('status', 'Data Saved Successfully !!!');
    }

    public function view(Request $request)
    {
        $data['power'] = PowerPack::get();
        $data['role'] = $request->session()->get('role');
        $data['state'] = $request->session()->get('state');
        return view('powerpack.view-powerpack', $data);
    }



    /**
     * Show the form for creating a new resource.
     */
    public function edit(Request $request, $id)
    {
        $data['role'] = $request->session()->get('role');
        $data['state'] = $request->session()->get('state');
        $data['power'] = PowerPack::find($id);

        return view('powerpack.update-powerpack', $data);
    }

    public function update(Request $request)
    {
        $request->validate([
            'beneficiary_contact' => 'required|min:10|max:10',

        ]);
        $id = $request->id;
        $power = PowerPack::findOrFail($id);
        $power->serial_num = $request->serial_num;
        $power->empanelled_agency = $request->empanelled_agency;
        $power->beneficiary_name = $request->beneficiary_name;
        $power->beneficiary_contact = $request->beneficiary_contact;
        $power->beneficiary_gender = $request->beneficiary_gender;
        $power->latitude = $request->latitude;
        $power->longitude = $request->longitude;
        $power->district = $request->district;
        $power->beneficiary_address = $request->beneficiary_address;
        $power->contractor_name = $request->contractor_name;
        $power->material_dispatch = $request->material_dispatch;
        $power->material_dispatch_date = $request->material_dispatch_date;
        $power->installation_status = $request->installation_status;
        $power->installation_date = $request->installation_date;
        $power->inspection_status = $request->inspection_status;
        $power->inspection_status_date = $request->inspection_status_date;
        $power->material_payment_80 = $request->material_payment_80;
        $power->material_payment_80_date = $request->material_payment_80_date;
        $power->material_payment_41 = $request->material_payment_41;
        $power->material_payment_41_date = $request->material_payment_41_date;
        $power->material_payment_42 = $request->material_payment_42;
        $power->material_payment_42_date = $request->material_payment_42_date;
        $power->material_payment_43 = $request->material_payment_43;
        $power->material_payment_43_date = $request->material_payment_43_date;
        $power->material_payment_44 = $request->material_payment_44;
        $power->material_payment_44_date = $request->material_payment_44_date;
        $power->material_payment_45 = $request->material_payment_45;
        $power->material_payment_45_date = $request->material_payment_45_date;
        if ($request->file('site_file_1')) {
            $image = $request->file('site_file_1');
            $imageName = "site_file_1" . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/image'), $imageName);
            $power->site_file_1 = $imageName;
        }
        if ($request->file('site_file_2')) {
            $image = $request->file('site_file_2');
            $imageName = "site_file_2" . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/image'), $imageName);
            $power->site_file_2 = $imageName;
        }
        if ($request->file('site_file_3')) {
            $image = $request->file('site_file_3');
            $imageName = "site_file_3" . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/image'), $imageName);
            $power->site_file_3 = $imageName;
        } 
        if ($request->file('site_file_4')) {
            $image = $request->file('site_file_4');
            $imageName = "site_file_4" . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/image'), $imageName);
            $power->site_file_4 = $imageName;
        }
        $power->remarks = $request->remarks;
        $power->save();
        return redirect()->back()->with('status', 'Details updated successfully!');
    }
    public function upload_power(Request $request)
    {
        $data['role'] = $request->session()->get('role');
        $data['state'] = $request->session()->get('state');
        $state = $request->session()->get('state');
        return view('powerpack.upload-powerpack', $data);
    }


    public function upload(Request $request)
    {

        set_time_limit(0);
        $state = $request->session()->get('state');
        $created_by = $request->session()->get('login');
        $filePath = $request->file('powerpack');
        $import = new PowerPackImport($state,$created_by);
        Excel::import($import, $filePath);
        $savedCount = $import->getSavedCount();

        return back()->with('status', $savedCount . ' Rows Imported Successfully');
    }
}
