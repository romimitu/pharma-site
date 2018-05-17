<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\SliderRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Slider;

class SliderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $sliders = Slider::orderBy('created_at', 'asc')->paginate(10);
        return view('admin.slider.index', ['sliders' => $sliders]);  
    }

    public function create()
    {
        return view('admin.slider.create');
    }

    public function store(SliderRequest $request)
    {
        $data = $request->except('image');
        $data['image']=uploadFile('image',$request,'uploads/slider/');
        $slider = Slider::create($data);
        Session::flash('message','Added  Successfully');
        return redirect('/slider');  
    }

    public function show(Slider $slider)
    {
        //
    }
    public function edit(Slider $slider)
    {
        return view('admin.slider.edit', ['slider' => $slider]);
    }

    public function update(SliderRequest $request, Slider $slider)
    {
        $data = $request->except('image'); 
        if ($request->hasFile('image')){
            $data['image']=uploadFile('image',$request,'uploads/slider/');
        }
        $slider->update($data);
        Session::flash('message', 'Succesfully updated');
        return redirect('/slider');
    }

    public function destroy(Slider $slider)
    {
        $slider->delete();
        Session::flash('message', 'Successfully Deleted');
        return redirect('/slider');
    }
}
