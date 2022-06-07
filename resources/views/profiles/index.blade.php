@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-3 p-5">
        <img src="/assets/profile-picture.jpg" class="rounded-circle">
</div>
    <div class="col-9 p-5 ">
    <div class="d-flex justify-content-between align-items-baseline">
        <h1>{{$user->username}}</h1>
        <a href="#" style="text-decoration: none;">Add New Post</a>
    </div>
<div class="d-flex">
    <div class="pe-5" ><strong>2</strong> posts</div>
    <div class="pe-5"><strong>1,046</strong> followers</div>
    <div class="pe-5"><strong>762</strong> following</div>
</div>
<div class="pt-4">
    <strong>{{$user->profile->title}}</strong>
</div>
<div class="pt-1">{{$user->profile->description}}</div>
<div><a href="" style="text-decoration: none;">{{ $user->profile->url  }}</a></div>    
   </div>
</div>
<div class="row pt-5">
    <div class="col-4 d-flex">
        <img src="/assets/post1.png" class="w-100 pe-3">
        <img src="/assets/post1.png" class="w-100 pe-3">
        <img src="/assets/post1.png" class="w-100 pe-3">

    </div>
</div>
</div>
@endsection
