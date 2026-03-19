<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function createProfile(){
        $user = User::find(1);

        $user->profile()->create([
        'phone' =>'12345678',
        'address' => '123 main st'
        ]);

        return $user;
    }

    
    public function userProfile(){
        $user = User::all();

        // //lasy loading
        // return $user->profile;

        //eager loading
        // return $user->load('profile');

        return $user;
    }

    public function updateProfile(){

        $user = User::find(1);


        $user->profile()->update([
            'phone' => '87654321',
            'address' => 'st mainr 123'
        ]);

        return $user;
    }

    public function deleteProfile(){
        $user = User::find(1);

        $user->profile()->delete();

        return $user;
    }
}
