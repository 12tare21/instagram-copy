@extends('layouts.app')

@section('content')
<div class="container">

        <div class="row pt-5">
            <div class="col-3 pr-3 pl-5">
            <img class ="rounded-circle w-100" src="{{$user->profile->getImage()}}" alt="">
            </div>
            <div class="col-9 pl-5">
                <div class="d-flex justify-content-between align-items-baseline">
                    <div class="d-flex align-items-center">
                        <h2>{{$user->username}}</h2>
                        <div id="app">

                            <follow-button></follow-button>
                        </div>
                        
                    </div>
                    @can('update', $user->profile)
                        
                    <a style="text-decoration:none;"href="\p\create">Add Post</a>
                    @endcan
                </div>
                <div class="d-flex pb-3">
                    <div class="pr-5"><strong>{{$user->posts->count()}}</strong> posts</div>
                    <div class="pr-5"><strong>23k</strong> followers</div>
                    <div class="pr-5"><strong>212</strong> following</div>
                </div>
                <div>
                    <div >
                        @can('update', $user->profile)
                            
                        <div ><a href="/profile/{{$user->id}}/edit">Edit profile</a></div>
                        @endcan
                        <div ><strong>{{$user->profile->title}}</strong></div>
                    </div>
                    <div>
                        <p class="mb-0">
                            {{$user->profile->description}}
                        </p>
                        <a style="text-decoration:none;font-weight:bold" href="#">{{$user->profile->url}}</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-5">
            @foreach($user->posts as $post)
                <div class="col-4 pb-4">
                  <a href="/p/{{$post->id}}"><img class="w-100" src="/storage/{{$post->image}}"alt=""></a>  
                </div>
            @endforeach
            <!--
            <div class="col-4">
                <img class="w-100"src="https://instagram.fsjj2-1.fna.fbcdn.net/vp/670ea9332402a438133f37f0f62a9a0d/5DBE58C4/t51.2885-15/e35/66170854_402202580395287_1871271487333362373_n.jpg?_nc_ht=instagram.fsjj2-1.fna.fbcdn.net"
                 alt="">
            </div>
            <div class="col-4">
                <img class="w-100"src="https://instagram.fsjj2-1.fna.fbcdn.net/vp/670ea9332402a438133f37f0f62a9a0d/5DBE58C4/t51.2885-15/e35/66170854_402202580395287_1871271487333362373_n.jpg?_nc_ht=instagram.fsjj2-1.fna.fbcdn.net"
                 alt="">
            </div>
            !-->
        </div>
</div>
@endsection
