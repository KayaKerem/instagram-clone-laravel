<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Intervention\Image\Facades\Image;

class UserController extends Controller
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
        $this->authorize('update',$user);
        return view('profiles.edit',compact('user'));
    }
    public function update(User $user){
        $this->authorize('update',$user);
        $data = request()->validate([
            'title'=>'required',
            'description' =>'',
            'url'=>'url',
            'image'=>'',
        ]);


        if(request('image')){
            $imagePath = request('image')->store('profile','public');

            $image = Image::make(public_path("/storage/{$imagePath}"))->fit(1000,1000);

            $image->save();
            auth()->user()->update(array_merge(
            $data,
            ['image'=>$imagePath]
        ));
        }else{

             auth()->user()->update($data);
        }


        return redirect("/profile/{$user->id}");

    }
}
