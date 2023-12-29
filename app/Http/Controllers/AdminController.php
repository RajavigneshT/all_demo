<?php

namespace App\Http\Controllers;

use App\Models\AdminModel;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class AdminController extends Controller
{


    public function form()
    {
        return view('welcome');
    }

    public function admin(Request $request)
    {

        $data =$request->only(['name','age','phone']);
        $admin =AdminModel::create($data);
        // $admin=new AdminModel;


        // $admin->fillable(['name','phone','age']);

        // $admin->name=$request->input('name');
        // $admin->phone=$request->input('phone');
        // $admin->age=$request->input('age');
        $admin->save();

        return "Admin data inserted successfully user id is ".$admin->id;

        
    }
    public function list()
    {
        $admin=AdminModel::all();
        return view('list_users',['admin'=>$admin]);
        
    }

    
}
