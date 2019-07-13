@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{$user->id}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-8 offset-2 pl-0">
                <h1>Edit profile</h1>
            </div>    
        </div>
        <div class="row">
            <div class="col-8 offset-2">
                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label ">Profile title</label>
    
                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title')??$user->profile->title }}"  autocomplete="title">
    
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8 offset-2">
                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label ">Profile description</label>
    
                        <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description')??$user->profile->description }}"  autocomplete="description">
    
                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
            </div>
         </div>
        <div class="row">
            <div class="col-8 offset-2">
                <div class="form-group row">
                    <label for="url" class="col-md-4 col-form-label ">Profile url</label>
    
                        <input id="url" type="text" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ old('url')??$user->profile->url }}"  autocomplete="url">
    
                        @error('url')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
            </div>
        </div>
        <div class="row">
                <div  style="padding:0;" class="col-8 offset-2">      
                    <label for="image" class="col-md-4 col-form-label ">Profile image</label>
                    @error('image')
                            <strong>{{ $message }}</strong>
                    @enderror
                    <input type="file" name="image" id="image" class="form-control-file">
                </div>
            </div>    
        <div class="row pt-3">
            <div class="col-8 offset-2" style="padding:0;" >    
                <button class="btn btn-primary"  >Save changes</button>
            </div>
        </div>
    </form>
</div>
@endsection