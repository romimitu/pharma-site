<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\DepotRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Depot;

class DepotController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $depots = Depot::orderBy('created_at', 'asc')->paginate(10);
        return view('admin.depot.index', ['depots' => $depots]);  
    }

    public function create()
    {
        return view('admin.depot.create');
    }

    public function store(DepotRequest $request)
    {
        $data = $request->all();
        $depot = Depot::create($data);
        Session::flash('message','Added  Successfully');
        return redirect('/depot');  
    }

    public function show(Depot $depot)
    {
        //
    }
    public function edit(Depot $depot)
    {
        return view('admin.depot.edit', ['depot' => $depot]);
    }

    public function update(depotRequest $request, Depot $depot)
    {
        $data = $request->all();
        $depot->update($data);
        Session::flash('message', 'Succesfully updated');
        return redirect('/depot');
    }

    public function destroy(Depot $depot)
    {
        $depot->delete();
        Session::flash('message', 'Successfully Deleted');
        return redirect('/depot');
    }
}
