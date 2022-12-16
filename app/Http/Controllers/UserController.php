<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Resources\UserResource as UserResource;

class UserController extends Controller
{
    public function getusers(){
        return UserResource::collection(User::get());
    }
}
