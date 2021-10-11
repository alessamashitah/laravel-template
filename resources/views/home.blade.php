@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    You are Admin.
                </div>

                
                <div class="card-body">
                <a href="{{ route('productIndex')}}" type="button" class="btn btn-dark">Product</a>
                <a href="{{ route('supplierIndex')}}" type="button" class="btn btn-dark">Supplier</a>
                </div>

               
            </div>
        </div>
    </div>
</div>
@endsection


