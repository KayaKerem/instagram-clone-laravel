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
}
