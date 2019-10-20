@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/victorygroup" enctype="multipart/form-data" method="post">
        @csrf
        <div class='row'>
            <div class="col-8 offset-2">
                <div class="row">
                    <h2>Add Victory Group</h2>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label">Victory Group Name</label>

                    <input id="name" 
                    type="text" 
                    class="form-control @error('name') is-invalid @enderror" 
                    name="name" 
                    value="{{ old('name') }}" required 
                    autocomplete="name" 
                    autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  
                </div>
                <div class="form-group row">
                    <label for="type" class="col-md-4 col-form-label">Victory Group Type</label>

                    <input id="type" 
                    type="text" 
                    class="form-control @error('type') is-invalid @enderror" 
                    type="type" 
                    name="type"
                    value="{{ old('type') }}" required 
                    autocomplete="type" 
                    autofocus>

                    @error('type')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  
                </div>

                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label">Victory Group Description</label>

                    <input id="description" 
                    type="text" 
                    class="form-control @error('description') is-invalid @enderror" 
                    description="description" 
                    name="description" 
                    value="{{ old('description') }}" required 
                    autocomplete="description" 
                    autofocus>

                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  
                </div>
                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">Victory Group Image</label>
                    <input type="file" class="form-control-file" id="image" type="image" name="image">

                     @error('image')
                             <strong>{{ $message }}</strong>
                       @enderror
                </div>

                <div class="row pt-4">
                    <button class="btn btn-primary">
                        Add New Post
                    </button>
                </div>

            </div>
        </div>
    </form>
</div>
@endsection
