<?php

namespace App\Http\Controllers\Supplier;

use App\Models\Component;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ComponentController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $components = $user->Components; //RELATIONSHIP ANTARA COMPONENT DGN USER
    
        return view('supplier.component.index',compact('components'));
    }

    public function create()
    {
       $name = Component::all();
        return view('supplier.component.add',compact('name'));
    }

    public function store(Request $request)
    {
        //STORE GUNA RELATIONSHIP
        $supplier = auth()->user();
        $component = Component::find($request->name);
        $supplier ->Components()->attach($component);

       

        return redirect()->route('componentIndex')->with([
            'alert-type' => 'alert-primary',
            'alert-message'=> 'New component has been added'
        ]);
    }

    public function edit(Component $component)
    {
      
        
        return view('supplier.component.edit', compact('component'));

        //return view('motorcycle.edit',compact('motorcycle'));
    }

    public function update(Request $request, Component $component)
    {
        $component->name = $request->name;
        $component->description = $request->description;
        $component->save();

        return redirect()->route('componentIndex')->with([
            'alert-type' => 'alert-primary',
            'alert-message'=> 'New component has been updated'
        ]);
    }

    public function delete(Component $component)
    {
        $component->Users()->detach();

        return redirect()->route('componentIndex')->with([
            'alert-type' => 'alert-danger',
            'alert-message'=> 'New component has been deleted'
        ]);
    }

}
