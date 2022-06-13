<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;


class PostsController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
        //if user isn't logged in, laravel routes the user to login page
    }
 public function create(){

    return view('posts.create');
 }

 public function store(){
    
     $data = request()->validate([
         'caption' => 'required',
         'image' => ['required','image'],
     ]);
        
    $imagePath = request('image')->store('uploads','public');
    
    $image = Image::make(public_path("/storage/{$imagePath}"))->fit(1200,1200);
    
    $image->save();
    
    // dd($imagePath);

    auth()->user()->posts()->create([
        'caption'=>$data['caption'],
        'image' => $imagePath,
    ]);
    // dd($imagePath);
    return redirect('/profile/' . auth()->user()->id);
}
public function show(\App\Models\Post $post){
return view('posts.show',compact('post'));
}

}
