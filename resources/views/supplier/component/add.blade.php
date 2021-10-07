@extends('layouts.admin')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Component') }}</div>


                <div class="card-body">
                <form method="POST" action="{{ route('componentStore')}}" enctype="multipart/form-data"  >
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <select name="name" id="name">
                    @foreach($name as $names)
                    <option value="{{ $names->id}}">{{ $names->name}}</option>
                    @endforeach
                    </select>
                </div>
                                    
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input type="description" name="description" class="form-control" id="description" placeholder="">
                </div>

                <button type="submit" class="btn btn-light">Submit</button>
                </form>   
                </div>
            </div>
        </div>
    </div>
</div>

@endsection