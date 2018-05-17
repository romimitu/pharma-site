<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Product;
use App\Med_image;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $products = Product::with('med_images')->paginate(10);
        return view('admin.product.index', ['products' => $products]);
    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function store(ProductRequest $request)
    {
        $data = $request->except('prescribing_file'); 
        $data['prescribing_file']=uploadFile('prescribing_file',$request,'uploads/product/');
        $product = Product::create($data);

        foreach ($request->photos as $productImage) {
            $file = $productImage;
            $file->move('uploads/product/', $file->getClientOriginalName());
            Med_image::create([
                'product_id' => $product->id,
                'image' => $file->getClientOriginalName()
            ]);
        }

        Session::flash('message','Added  Successfully');
        return redirect('/product');  
    }

    public function show(Product $product)
    {
        //
    }
    public function edit(Product $product)
    {
        return view('admin.product.edit', ['product' => $product]);
    }

    public function update(ProductRequest $request, Product $product)
    {
        $data = $request->except('prescribing_file'); 
        if ($request->hasFile('prescribing_file')){
            $data['prescribing_file']=uploadFile('prescribing_file',$request,'uploads/product/');
        }        
        $product->update($data);
        Session::flash('message', 'Succesfully updated');
        return redirect('/product');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        Session::flash('message', 'Successfully Deleted');
        return redirect('/product');
    }
}
