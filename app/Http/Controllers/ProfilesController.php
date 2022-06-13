<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfilesController extends Controller
{
    
    public function index($user){
        //dd($user);
        // $user = User::find($user);
        $user = User::findorFail($user);
        
        return view('profiles.index',[
            'user'=>$user,
        ]);
    }
    public function edit(\App\Models\User $user){
        return view('profiles.edit',compact('user'));
    }
    public function update(User $user){
        
        $data = request()->validate([
            'title'=>'required',
            'description' =>'',
            'url'=>'url',
            'image'=>'',
        ]);
        auth()->user()->$user->profile->update($data);
        return redirect("/profile/{$user->id}");

    }
}
