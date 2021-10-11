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

                <!-- <div class="card-body">
                <a href="{{ route('componentAdd')}}" type="button" class="btn btn-dark">Add Component</a>
                <a href="{{ route('home')}}" type="button" class="btn btn-dark">Back</a>
                </div> -->
               

                <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Supplier</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($components as $key=>$component)
                        <tr>
                        <th scope="row">{{ $key + 1}}</th>
                        <td>{{$component->name}}</td>
                        <td>{{$component->Users->first()->name}}</td>
                        <td><a href="{{route('componentDelete', $component)}}" type="button" class="btn btn-danger">Delete</a></td>
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