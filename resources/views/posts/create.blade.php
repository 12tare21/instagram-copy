@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/p" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-8 offset-2 pl-0">
                <h1>Add new post</h1>
            </div>    
        </div>
        <div class="row">
            <div class="col-8 offset-2">
                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label ">Post caption</label>
    
                        <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}"  autocomplete="caption">
    
                        @error('caption')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div  style="padding:0;" class="col-8 offset-2">      
                <label for="image" class="col-md-4 col-form-label ">Post image</label>
                @error('image')
                        <strong>{{ $message }}</strong>
                @enderror
                <input type="file" name="image" id="image" class="form-control-file">
            </div>
        </div>
        <div class="row pt-3">
            <div class="col-8 offset-2" style="padding:0;" >    
                <button class="btn btn-primary"  >Add new post</button>
            </div>
        </div>
    </form>
</div>
@endsection
