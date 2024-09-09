<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Product;
use App\Models\User;
use DB;
use Session;
use file;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $warehouse = $request->session()->get('warehouse');
        $data['state'] = $request->session()->get('state');
        $states = $request->session()->get('state');
        $data['product'] = DB::table('products')->where('state', $states)->orderBy('name')->get();
        $data['username'] = $request->session()->get('loginName');
        $data['role'] = $request->session()->get('role');
        $username = $request->session()->get('loginName');
        $role = $request->session()->get('role');
        return view('product.view-product', $data);
    }
    
      public function index_kusum(Request $request)
    {
        $warehouse = $request->session()->get('warehouse');
        $data['product'] = DB::table('products')->orderBy('name')->get();
        $data['username'] = $request->session()->get('loginName');
        $data['role'] = $request->session()->get('role');
        $data['state'] = $request->session()->get('state');
        $username = $request->session()->get('loginName');
        $role = $request->session()->get('role');
        return view('kusum.product.view-product', $data);
    }

    public function add_product(Request $request){
        $data['username'] = $request->session()->get('login');
        $data['role'] = $request->session()->get('role');
          $data['state'] = $request->session()->get('state');
        return view('product.add-product', $data);
    }
    
    public function add_product_kusum(Request $request){
        $data['username'] = $request->session()->get('login');
        $data['role'] = $request->session()->get('role');
          $data['state'] = $request->session()->get('state');
        return view('kusum.product.add-product', $data);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
         $validator = $request->validate([
        'name' => 'required|min:5|max:250|unique:products',
    ]);
        $product = new product();
        $product->category = $request->category;
        $product->name = $request->name;
        $product->make = $product->make;
        $product->warehouse = $request->warehouse;
        $product->capacity = $request->capacity;
        $product->quantity = $request->quantity;
        $product->units = $request->units;
        $product->save();
        return redirect(route('view-product'))->with('status', 'Product Details Added Successfully!!!');
        
    }

    public function edit(Request $request, $id)
    {
        $data['product'] = DB::table('products')->where('id', $id)->first();
        $data['role'] = $request->session()->get('role');
          $data['state'] = $request->session()->get('state');
        return view('product.update-product', $data);
    }
    
      public function edit_kusum(Request $request, $id)
    {
        $data['product'] = DB::table('products')->where('id', $id)->first();
        $data['role'] = $request->session()->get('role');
          $data['state'] = $request->session()->get('state');
        return view('kusum.product.update-product', $data);
    }


    public function update(Request $request, $id)
    {
       $product = product::find($id);
       $product->capacity = $request->capacity;
       $product->quantity = $request->quantity;
       $product->units = $request->unit;
       $product->save();
       return redirect(route('view-product'))->with('status', 'Product Details Updated Successfully!!!');
       
    }

  
}
