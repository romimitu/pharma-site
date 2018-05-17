<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\GalleryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Photo;

class PhotoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $galleries = Photo::orderBy('created_at', 'asc')->paginate(10);
        return view('admin.gallery.index', ['galleries' => $galleries]);  
    }

    public function create()
    {
        return view('admin.gallery.create');
    }

    public function store(GalleryRequest $request)
    {
        $data = $request->except('image');
        if ($request->hasFile('image')){
            $data['image']=uploadFile('image',$request,'uploads/gallery/');
        }
        $gallery = Photo::create($data);
        Session::flash('message','Added  Successfully');
        return redirect('/photo');  
    }

    public function show(Photo $photo)
    {
        //
    }
    public function edit(Photo $photo)
    {
        return view('admin.gallery.edit', ['gallery' => $photo]);
    }

    public function update(GalleryRequest $request, Photo $photo)
    {
        $data = $request->except('image'); 
        if ($request->hasFile('image')){
            $data['image']=uploadFile('image',$request,'uploads/photo/');
        } 
        $photo->update($data);
        Session::flash('message', 'Succesfully updated');
        return redirect('/photo');
    }

    public function destroy(Photo $photo)
    {
        $photo->delete();
        Session::flash('message', 'Successfully Deleted');
        return redirect('/photo');
    }
}
