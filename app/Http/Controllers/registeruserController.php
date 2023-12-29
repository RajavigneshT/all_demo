<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Registeruser;



class registeruserController extends Controller
{
    public function registeruser(Request $request)
    {
        $registeruser=new Registeruser;
        dd('$registeruser');

        $registeruser->name=$request->get('name');
        $registeruser->email=$request->get('email');
        $registeruser->password=bcrypt($request->get('password'));

        $registeruser->save();

        if($registeruser->is_admin==1)
        {
            return 'User created successfully and he is admin';
        }else
        {
            return 'User created successfully';

        }
    }
}
