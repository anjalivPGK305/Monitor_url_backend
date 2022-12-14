<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //
    public function userList() {
        return User::all();
    }

    public function userCreate(Request $request) {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return $user;
    }

    public function userDelete($id) {
        $user = User::find($id);
        $user->delete();
    }
}
