<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\BlogRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Blog;

class BlogController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $blogs = Blog::orderBy('created_at', 'asc')->paginate(10);
        return view('admin.blog.index', ['blogs' => $blogs]);  
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(BlogRequest $request)
    {
        $data = $request->except('image'); 
        $data['image']=uploadFile('image',$request,'uploads/blog/');
        $blog = Blog::create($data);
        Session::flash('message','Added  Successfully');
        return redirect('/blog');  
    }

    public function show(Blog $blog)
    {
        //
    }
    public function edit(Blog $blog)
    {
        return view('admin.blog.edit', ['blog' => $blog]);
    }

    public function update(BlogRequest $request, Blog $blog)
    {
        $data = $request->except('image'); 
        if ($request->hasFile('image')){
            $data['image']=uploadFile('image',$request,'uploads/blog/');
        }        
        $blog->update($data);
        Session::flash('message', 'Succesfully updated');
        return redirect('/blog');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();
        Session::flash('message', 'Successfully Deleted');
        return redirect('/blog');
    }
}
