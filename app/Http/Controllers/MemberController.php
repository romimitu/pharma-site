<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\MemberRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Member;

class MemberController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $members = Member::orderBy('created_at', 'asc')->paginate(10);
        return view('admin.member.index', ['members' => $members]);  
    }

    public function create()
    {
        return view('admin.member.create');
    }

    public function store(MemberRequest $request)
    {
        $data = $request->except('image'); 
        $data['image']=uploadFile('image',$request,'uploads/member/');
        $member = Member::create($data);
        Session::flash('message','Added  Successfully');
        return redirect('/member');  
    }

    public function show(Member $member)
    {
        //
    }
    public function edit(Member $member)
    {
        return view('admin.member.edit', ['member' => $member]);
    }

    public function update(MemberRequest $request, Member $member)
    {
        $data = $request->except('image'); 
        if ($request->hasFile('image'))
        {
            $data['image']=uploadFile('image',$request,'uploads/member/');
        } 
        $member->update($data);
        Session::flash('message', 'Succesfully updated');
        return redirect('/member');
    }

    public function destroy(Member $member)
    {
        $member->delete();
        Session::flash('message', 'Successfully Deleted');
        return redirect('/member');
    }
}
