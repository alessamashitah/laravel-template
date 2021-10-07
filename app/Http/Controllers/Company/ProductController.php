<?php

namespace App\Http\Controllers\Company;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::all();
    
        return view('company.product.index',compact('product'));
    }

    public function create()
    {
        return view('company.product.add');
    }

    public function store(Request $request)
    {
        //STORE GUNA RELATIONSHIP
        $product = new Product();
        $product->name= $request->name;
        $product->save(); 
        //dd($request->file());
        if($request->hasFile('file'))
        {
            $filename = $request->file->getClientOriginalName();
            Storage::disk('public')->put('product/'.$filename, File::get($request->file));
            $product->image = $filename;
            $product->save();
        }
        $product->qty = $request->qty;
        $product->save(); 

        return redirect()->route('productIndex')->with([
            'alert-type' => 'alert-primary',
            'alert-message'=> 'New product has been added'
        ]);
    }

    public function edit(product $product)
    {
        $product = Product::all();
        
        return view('company.product.edit', compact('product'));

        //return view('motorcycle.edit',compact('motorcycle'));
    }

    public function update(Request $request, product $product)
    {
        $product->$request->name;
        $product->$request->image;
        $product->$request->qty;
        $product->save();

        return redirect()->route('productIndex')->with([
            'alert-type' => 'alert-primary',
            'alert-message'=> 'New product has been updated'
        ]);
    }

    public function delete(product $product)
    {
        $product->delete();

        return redirect()->route('productIndex')->with([
            'alert-type' => 'alert-danger',
            'alert-message'=> 'New product has been deleted'
        ]);
    }

}
