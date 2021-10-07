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
                <div class="card-header">{{ __('List of Suppliers') }}</div>

               

                <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        
                        </tr>
                    </thead>
                  
                </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection