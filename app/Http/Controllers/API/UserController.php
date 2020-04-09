<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\UserResource;
use App\Http\Requests\UserUpdateRequest;



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

    public function update(UserUpdateRequest $request)
    {
        $user = $request->only(["name","mobile_number",'password','date_of_birth','gender','avatar_img','national_id']);
        $avatar = $request->file('avatar_img');
        if($avatar)
            $user["avatar"] = $avatar;
        User::find(Auth::id())->update($user);
        return ["success"=>"updated profile successfully"];
    }
}
