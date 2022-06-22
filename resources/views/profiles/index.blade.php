@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-3 p-5">
        <img src="{{$user->profile->profileImage()}}" class="rounded-circle w-100">
</div>
    <div class="col-9 p-5 ">
    <div class="d-flex justify-content-between align-items-center">
        <div class="d-flex align-items-center pb-2">
        <div class="h2">{{$user->username}}</div>
           <follow :user-id="{{ $user->id }}"></follow>
        </div>
        @can('update',$user->profile)
        <a href="/p/create" style="text-decoration: none;">Add New Post</a>
        @endcan
    </div>
    @can('update',$user->profile)
        <a href="/profile/{{$user->id}}/edit" style="text-decoration: none;">Edit Profile</a>
    @endcan

<div class="d-flex">
    <div class="pe-5" ><strong>{{$user->posts->count()}}</strong> posts</div>
    <div class="pe-5"><strong>1,046</strong> followers</div>
    <div class="pe-5"><strong>762</strong> following</div>
</div>
<div class="pt-4">
    <strong>{{$user->profile->title??null}}</strong>
</div>
<div class="pt-1">{{$user->profile->description??null}}</div>
<div><a href="" style="text-decoration: none;">{{ $user->profile->url??null  }}</a></div>    
   </div>
</div>
<div class="row pt-5">
    @foreach($user->posts as $post)
    <div class="col-4 d-flex pb-4">
        <a href="/p/{{$post->id}}">
        <img src="/storage/{{$post->image}}" class="w-100 pe-3">
        </a>
       

    </div>
@endforeach
</div>
</div>
@endsection
