<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JammuMaterialStatus;
use Illuminate\Support\Facades\DB;

class MaterialStatusController extends Controller
{
    public function index(Request $request)
    {
       $data['role'] = $request->session()->get('role');
       $data['state'] = $request->session()->get('state');
        return view('jammu.material.add-material-status', $data);
    }
    public function create(Request $request)
    {
        $material = new JammuMaterialStatus();
        $material->order_pump_capacity = $request->order_pump_capacity;
        $material->head = $request->head;
        $material->actual_order = $request->actual_order;
        $material->pump_available = $request->pump_available;
        $material->pump_sent_site = $request->pump_sent_site;
        $material->pump_req = $request->pump_req;
        $material->bos_available = $request->bos_available;
        $material->bos_sent_site = $request->bos_sent_site;
        $material->bos_req = $request->bos_req;
        $material->module_available = $request->module_available;
        $material->module_sent_site = $request->module_sent_site;
        $material->module_req = $request->module_req;
        $material->structure_available = $request->structure_available;
        $material->structure_sent_site = $request->structure_sent_site;
        $material->structure_req = $request->structure_req;
        $material->created_by = $request->created_by;
        $material->save();
         return back()->with('status', 'material Status Added Successfully');

    
}
public function view_material(Request $request)
{
    $data['materials'] = DB::table('jammu_material_statuses')->get();
    $data['role'] = $request->session()->get('role');
    $data['state'] = $request->session()->get('state');
    return view('jammu.material.view-material-status', $data);
}
/**
 * Show the form for creating a new resource.
 */
public function edit(Request $request, $id)
{
    $data['material'] = JammuMaterialStatus::find($id);

    return view('jammu.material.update-material-status', $data);
}
    

public function update_material(Request $request)
    {
        $id = $request->mid;
        $material = JammuMaterialStatus::find($id);
        $material->order_pump_capacity = $request->order_pump_capacity;
        $material->head = $request->head;
        $material->actual_order = $request->actual_order;
        $material->pump_available = $request->pump_available;
        $material->pump_sent_site = $request->pump_sent_site;
        $material->pump_req = $request->pump_req;
        $material->bos_available = $request->bos_available;
        $material->bos_sent_site = $request->bos_sent_site;
        $material->bos_req = $request->bos_req;
        $material->module_available = $request->module_available;
        $material->module_sent_site = $request->module_sent_site;
        $material->module_req = $request->module_req;
        $material->structure_available = $request->structure_available;
        $material->structure_sent_site = $request->structure_sent_site;
        $material->structure_req = $request->structure_req;
        $material->created_by = $request->created_by;
        $material->save();
       
        return back()->with('status', 'Material Status  Updated Successfully');
    }
public function destroy($id)
{
    $site = JammuMaterialStatus::find($id);
    $site->delete();
    return redirect(route("view-material"))->with('status', 'Material Status Deleted Successfully!!');
}
}
