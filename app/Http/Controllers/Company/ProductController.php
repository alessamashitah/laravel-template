<?php

namespace App\Http\Controllers\Company;

use App\Models\Product;
use App\Models\Component;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        
        $products = Product::with('components')->get();
        // dd($products);
       

    
        return view('company.product.index',compact('products'));
    }

    public function create()
    {
        $components = Component::all();
        return view('company.product.add',compact('components'));
    }

    public function store(Request $request)
    {
        //STORE GUNA RELATIONSHIP
        $product = new Product();
        $product->name = $request->name;
        $product->save(); 
        
        if($request->hasFile('file'))
        {
            $filename = $request->file->getClientOriginalName();
            Storage::disk('public')->put('product/'.$filename, File::get($request->file));
            $product->image = $filename;
            $product->save();
        }
        $product->qty = $request->qty;
        $product->save();
        
        // dd($request->component);
        
        for($i=0; $i<count($request->component); $i++)
                {
                $component = Component::find($request->component[$i]);
                $product->components()->attach($component);
                }

        return redirect()->route('productIndex')->with([
            'alert-type' => 'alert-primary',
            'alert-message'=> 'New product has been added'
        ]);
    }

    public function edit(Product $product)
    {
        //$product = Product::all();
        $components = Component::all();
        
        return view('company.product.edit', compact('product','components'));

        //return view('motorcycle.edit',compact('motorcycle'));
    }

    public function update(Request $request, Product $product)
    {
        $product->name = $request->name;
        $product->image = $request->image;
        $product->qty = $request->qty;
        $product->save();

        for($i=0; $i<count($request->component); $i++)
                {
                $component = Component::find($request->component[$i]);
                $product->components()->attach($component);
                }

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
