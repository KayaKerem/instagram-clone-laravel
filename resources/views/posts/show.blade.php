@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-12">
       
            
        <div class="card mb-3" style="max-width: 1080px;">
            <div class="row g-0">
                <div class="col-md-6">
                    <img src="/storage/{{$post->image}}" alt="" class="img-fluid rounded-start">
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <img src="{{$post->user->profile->profileImage()}}" class="w-100 rounded-circle" style="max-width: 40px;">
                        <span class="card-title px-3 "><strong> <a href="/profile/{{$post->user->username}}" 
                            style="text-decoration: none;color:inherit;">
                            {{$post->user->username}} 
                        </a>
                        </strong>
                        <a href="#" style="text-decoration: none; " class="ps-2">Follow</a>
                    </span>
                    

                        </div>
                        <hr>
                        <p class="card-text pt-3">
                            <span class="card-title"
                            ><strong>
                                 <a href="/profile/{{$post->user->username}}" style="text-decoration: none; color:black;">
                                    {{$post->user->username}} 
                                </a>
                            </strong>
                        </span> {{$post->caption}}</p>
                        <p class="card-text"><small class="text-muted">{{$post->created_at}}</small></p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    
</div>

</div>
@endsection