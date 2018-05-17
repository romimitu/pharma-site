<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\DoctorRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Doctor;

class DoctorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $doctors = Doctor::orderBy('created_at', 'asc')->paginate(10);
        return view('admin.doctor.index', ['doctors' => $doctors]);  
    }

    public function create()
    {
        return view('admin.doctor.create');
    }

    public function store(DoctorRequest $request)
    {
        $data = $request->all();
        $doctor = Doctor::create($data);
        Session::flash('message','Added  Successfully');
        return redirect('/doctor');  
    }

    public function show(Doctor $doctor)
    {
        //
    }
    public function edit(Doctor $doctor)
    {
        return view('admin.doctor.edit', ['doctor' => $doctor]);
    }

    public function update(DoctorRequest $request, Doctor $doctor)
    {
        $data = $request->all();
        $doctor->update($data);
        Session::flash('message', 'Succesfully updated');
        return redirect('/doctor');
    }

    public function destroy(Doctor $doctor)
    {
        $doctor->delete();
        Session::flash('message', 'Successfully Deleted');
        return redirect('/doctor');
    }
}
