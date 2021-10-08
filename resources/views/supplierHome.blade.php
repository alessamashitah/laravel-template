@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    You are Supplier.
                </div>

                
                <div class="card-body">
                <a href="{{route('componentIndex')}}" type="button" class="btn btn-dark">Component</a><br>
                
                </div>

                <div class="card-body">
                <a href="" type="button" class="btn btn-dark">Product</a>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection


