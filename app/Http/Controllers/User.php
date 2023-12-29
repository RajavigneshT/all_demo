<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;
use App\Models\User as UserModel;


class User extends Controller
{
    public function create()
    {
        return view('create_user');
    }

    public function store(Request $request)
    {
        $name=$request->input('name');
        $age=$request->input('age');
        $phone=$request->input('phone');

        $user =new UserModel;
        $user->name=$name;
        $user->age=$age;
        $user->phone=$phone;

        $user->save();
        return "User Data has been Successfully inserted ".$user->id;
    
    }

    public function showdatafromdb()
    {
        
        $students=student::all();
        return view('list_all_data',['students'=>$students]);
    }
    public function edit($id)
    {
        $student=student::find($id);
        return view('edit_view',['students'=>$student]);
    }
    
    

}
