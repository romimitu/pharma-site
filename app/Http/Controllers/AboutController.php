<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use App\About;

class AboutController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $abouts = About::orderBy('created_at', 'asc')->paginate(1);
        return view('admin.about.index', ['abouts' => $abouts]); 
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $about = About::find($id);
        return view('admin.about.edit', ['about' => $about]);
    }

    public function update(Request $request, $id)
    {
        $about = About::find($id);
        $data = $request->except('about_image','mission_img','growth_image','logo'); 
        if ($request->hasFile('about_image')){
            $data['about_image']=uploadFile('about_image',$request,'uploads/page/');
        }
        if ($request->hasFile('mission_image')){
            $data['mission_image']=uploadFile('mission_image',$request,'uploads/page/');
        } 
        if ($request->hasFile('growth_image')){            
            $data['growth_image']=uploadFile('growth_image',$request,'uploads/page/');
        } 
        if ($request->hasFile('logo')){            
            $data['logo']=uploadFile('logo',$request,'uploads/images/');
        } 
        $about->update($data);
        Session::flash('message', 'Succesfully updated');
        return redirect('/about-us');
    }


    public function destroy($id)
    {
        //
    }
}
