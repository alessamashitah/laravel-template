<?php

namespace App\Http\Controllers\Supplier;

use App\Models\Component;
use Illuminate\Http\Request;
use App\Models\Component_name;
use App\Http\Controllers\Controller;

class ComponentController extends Controller
{
    public function index()
    {
        $component = Component::all();
    
        return view('supplier.component.index',compact('component'));
    }

    public function create()
    {
        $name = Component_name::all();
        return view('supplier.component.add',compact('name'));
    }

    public function store(Request $request)
    {
        //STORE GUNA RELATIONSHIP
        $component = new Component();
        $component->component_name_id = $request->name;
        $component->description = $request->description;
        $component->save(); 
       

        return redirect()->route('componentIndex')->with([
            'alert-type' => 'alert-primary',
            'alert-message'=> 'New component has been added'
        ]);
    }

    public function edit(component $component)
    {
        $component = Component::all();
        $name = Component_name::all();
        
        return view('supplier.component.edit', compact('component','name'));

        //return view('motorcycle.edit',compact('motorcycle'));
    }

    public function update(Request $request, component $component)
    {
        $component->component_name_id->$request->name;
        $component->$request->description;
        $component->save();

        return redirect()->route('componentIndex')->with([
            'alert-type' => 'alert-primary',
            'alert-message'=> 'New component has been updated'
        ]);
    }

    public function delete(component $component)
    {
        $component->delete();

        return redirect()->route('componentIndex')->with([
            'alert-type' => 'alert-danger',
            'alert-message'=> 'New component has been deleted'
        ]);
    }

}
