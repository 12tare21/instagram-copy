@extends('layouts.app')
@section('content')
<div class="container">
    
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{$post->image}}" class="w-100" alt="">
        </div>
        <div class="col-4">
            <div class="d-flex align-items-center "style="font-weight:bold;">
                <img src="{{$post->user->profile->getImage()}}"style="max-width:40px;" class="rounded-circle mr-2"alt="">
                <div class="d-flex align-items-baseline ">
                    <h3 ><a style="color:black;text-decoration:none;" href="/profile/{{$post->user->id}}">{{$post->user->username}}</a></h3>
                    <h3 class="pl-2">|</h3>
                    <a href="#" class="pl-2 ">Follow</a>
                </div>    
            </div>
            <hr>
        <p><span style="font-weight: bold;"><a style="color:black;text-decoration:none;"href="/profile/{{$post->user->id}}">{{$post->user->username}}</a></span>
                {{$post->caption}}
            </p>
        </div>
    </div>
</div>   
@endsection