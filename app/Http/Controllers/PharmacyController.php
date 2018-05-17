<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\PharmacyRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Pharmacy;

class PharmacyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $pharmacies = Pharmacy::orderBy('created_at', 'asc')->paginate(10);
        return view('admin.pharmacy.index', ['pharmacies' => $pharmacies]);  
    }

    public function create()
    {
        return view('admin.pharmacy.create');
    }

    public function store(PharmacyRequest $request)
    {
        $data = $request->all();
        $pharmacy = Pharmacy::create($data);
        Session::flash('message','Added  Successfully');
        return redirect('/pharmacy');  
    }

    public function show(Pharmacy $pharmacy)
    {
        //
    }
    public function edit(Pharmacy $pharmacy)
    {
        return view('admin.pharmacy.edit', ['pharmacy' => $pharmacy]);
    }

    public function update(PharmacyRequest $request, Pharmacy $pharmacy)
    {
        $data = $request->all();   
        $pharmacy->update($data);
        Session::flash('message', 'Succesfully updated');
        return redirect('/pharmacy');
    }

    public function destroy(Pharmacy $pharmacy)
    {
        $pharmacy->delete();
        Session::flash('message', 'Successfully Deleted');
        return redirect('/pharmacy');
    }
}
