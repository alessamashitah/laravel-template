@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Product') }}</div>


                <div class="card-body">
                <form method="POST" action="{{ route('productUpdate', $product)}}"   >
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="name" name="name"  class="form-control" id="name" value="{{ $product->name }}" placeholder="name">
                </div>
                                    
                <div class="mb-3">
                    <label for="formFile" class="form-label">Add Image</label>
                    <input class="form-control" type="file" name="file" value="{{ $product->image }}" >
                </div>

                <div class="mb-3">
                    <label for="qty" class="form-label">Quantity</label>
                    <input type="qty" name="qty" class="form-control" id="qty" value="{{ $product->qty }}" placeholder="qty">
                </div>

                <button type="submit" class="btn btn-light">Submit</button>
                </form>   
                </div>
            </div>
        </div>
    </div>
</div>

@endsection