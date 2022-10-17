<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function index()
    {

        $data = Customer::all();
        return view('dataCustomer', compact('data'));
    }

    public function tambah()
    {
        return view('tambah');
    }

    public function insertdata(Request $request)
    {
        // dd($request->all());
        Customer::create($request->all());
        return redirect()->route('customer')->with('success','Data Berhasil Ditambahkan');
    }

    public function tampildata($id)
    {
        $data = Customer::find($id);
        // dd($data);

        return view('tampildata', compact('data'));
    }

    public function updatedata(Request $request, $id)
    {   
        $data = Customer::find($id);
        $data->update($request->all());
        return redirect()->route('customer')->with('success', 'Data Berhasil di Update');
    }
    
    public function delete($id)
    {
        $data = Customer::find($id);
        $data->delete();
        return redirect()->route('customer')->with('success', 'Data Berhasil di Delete');
    }
}
