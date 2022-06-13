<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    
    echo($imagePath);

    auth()->user()->posts()->create([
        'caption'=>$data['caption'],
        'image' => $imagePath,
    ]);
    return redirect('/profile/' . auth()->user()->id);
}

}
