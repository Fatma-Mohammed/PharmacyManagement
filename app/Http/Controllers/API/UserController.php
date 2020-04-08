<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\UserResource;


class UserController extends Controller
{
    //

    public function show()
    {
       $user = User::find(Auth::id());
        
        if($user)
            return new UserResource($user);
        return ["error"=>"user not found"];
    }
}
