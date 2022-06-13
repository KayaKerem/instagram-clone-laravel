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
                        <h5 class="card-title">{{$post->user->username}}</h5>
                        <p class="card-text">{{$post->caption}}</p>
                        <p class="card-text"><small class="text-muted">{{$post->created_at}}</small></p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    
</div>

</div>
@endsection