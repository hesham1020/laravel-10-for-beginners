<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function heshamregister () {

        // $incomingfeileds = $request-> validate([
        //     'name' => ['required', 'min:3' , 'max:10'],
        //     'email' => ['required', 'email'],
        //     'password' => ['required', 'min:8' , 'max:200 ']
        // ]);

        return 'hello from our controller';
    }

public function logincontorller1 (){
    return 'welcome to login screen';
}

}
