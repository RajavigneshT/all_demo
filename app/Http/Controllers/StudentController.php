<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\student;

class StudentController extends Controller
{

    public function student_view_list()
    {
        $students=DB::select("select * from student");
        return view('student_view_list',['students'=>$students]);
    }


    public function insert_view_form()
    {
        return view('user_form');

    }

    public function insert(Request $request)
    {
        $name=$request->input('student_name');    
        
        //DB insert 
        DB::insert("insert into student(name) values(?)",[$name]);
       return "Record inseted successfully ! <a href='/view-list'>Go to view click here</a> or <a href='/'>insert new</a>
       <a href='/showdbDetails'>Show details<a>" ;

    }

    public function edit($id)
    {
        $student=DB::select('select * from student where id=?',[$id]);
        return view('student_edit',['student'=>$student]);


    }
    public function update(Request $request,$id)
    {
        $name=$request->input('student_name');
        DB::statement('update student set name=? where id=?',[$name,$id]);
        return "Record updated successfully <a href='/view-list'> click here to go view </a>";
    }

    public function delete($id)
    {
        DB::statement("delete from student where id=?",[$id]);;
        return 'deleted successfully ! <a href="/view-list">click here to go view</a>';
    }


}
