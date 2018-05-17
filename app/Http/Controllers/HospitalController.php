<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\HospitalRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Hospital;

class HospitalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $hospitals = Hospital::orderBy('created_at', 'asc')->paginate(10);
        return view('admin.hospital.index', ['hospitals' => $hospitals]);  
    }

    public function create()
    {
        return view('admin.hospital.create');
    }

    public function store(HospitalRequest $request)
    {
        $data = $request->all();
        $hospital = Hospital::create($data);
        Session::flash('message','Added  Successfully');
        return redirect('/hospital');  
    }

    public function show(Hospital $hospital)
    {
        //
    }
    public function edit(Hospital $hospital)
    {
        return view('admin.hospital.edit', ['hospital' => $hospital]);
    }

    public function update(HospitalRequest $request, Hospital $hospital)
    {
        $data = $request->all();
        $hospital->update($data);
        Session::flash('message', 'Succesfully updated');
        return redirect('/hospital');
    }

    public function destroy(Hospital $hospital)
    {
        $hospital->delete();
        Session::flash('message', 'Successfully Deleted');
        return redirect('/hospital');
    }
}
