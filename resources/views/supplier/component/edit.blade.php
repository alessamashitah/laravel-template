@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Component') }}</div>


                <div class="card-body">
                <form method="POST" action="{{ route('componentUpdate', $component)}}"   >
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="name" class="form-control" id="name" name="name" value="{{ $component->componentName->name }}" placeholder="name">
                </div>
                                    

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input type="description" name="description" class="form-control" id="description" value="{{ $component->description}}" placeholder="description">
                </div>

                <button type="submit" class="btn btn-light">Submit</button>
                </form>   
                </div>
            </div>
        </div>
    </div>
</div>

@endsection