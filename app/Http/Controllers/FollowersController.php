<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class FollowersController extends Controller
{
    public function store(User $user){
        
        return $user->id;
    }
}
