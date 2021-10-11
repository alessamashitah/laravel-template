@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(session()->has('alert-message'))
                <div class="alert {{session()->get('alert-type')}}">
                    {{ session()->get('alert-message') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                <a href="{{ route('productAdd')}}" type="button" class="btn btn-dark">Add Product</a>
                <a href="{{ route('home')}}" type="button" class="btn btn-dark">Back</a>
                </div>
               

                <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Image</th>
                        <th scope="col">Qty</th>
                        <th scope="col">Components</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $key=>$product)
                        <tr>
                        <th scope="row">{{ $key + 1}}</th>
                        <td>{{$product->name}}</td>
                        <td>
                        <img src="{{ asset('/storage/product/'.$product->image) }}" width="50px;" height="50px;" alt="">
                        </td>
                        <td>{{$product->qty}}</td>
                        <td>
                            @foreach($product->components as $component)
                            {{$component->name}},
                            @endforeach
                            </td>
                        <td><a href="{{route('productEdit', $product)}}" type="button" class="btn btn-dark">Edit</a></td>
                        <td><a href="{{route('productDelete', $product)}}" type="button" class="btn btn-danger">Delete</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection