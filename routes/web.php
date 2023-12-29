<?php

use App\Http\Controllers\registeruserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\studentController;
use App\Http\Controllers\StudentController as ControllersStudentController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\User;
use App\Models\registeruser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Change the title dynamic value and pass value to view 

// Route::get('/',function(){
//    $title='Send User Infromation title from Route';
//    $title2='Send User from 2 title';
//    return  view('user_form',compact('title','title2'));
   
// });

Route::get('/user_id',function(){
   $title='Send User Infromation title from Route';
   return view('user_form',['title'=>$title]);
});
//Create Route and return and Redirect to View
Route::post('/user2',function(Request $request){
 
   $name=$request->input('name');
   $age=$request->input('age');
   $phone=$request->input('phone');

   //return 'Your Name is ' .$name.' Age is ' .$age.'  Phone Number is ' .$phone.' ';
   //Redirect to Page
   //return view('user_form');//->with(['name' => $name, 'age' => $age, 'phone' => $phone]);
   return redirect('user_id')->with('message','SuccessFully Form Sbumitted');

})->name('user');



//Naming Route
Route::get('namingroute/{id}/{type?}',function($id,$type=null){
   if($id==1 && $type=="page")
   {
      return "First page '.$id.' '.$type.'";
   }else
   {
      return"page not found";
   }
   
});

Route::get('/hometest',function(){
   return view('user_form');
})->name('homeroute');
//URL change in main page only concept
Route::view('sample-page','home');

//Route Grouping 

Route::prefix('gallery')->group(function(){

   Route::get('photos',function(){
      return "<h1>This is photo page</h1>";
   });
   
   Route::get('videos',function(){
      return "<h1>This is video page<h1>";
   });

   Route::get('documents',function(){
      return "<h1>This is Document Page</h1>";
   });

});

//Middle Ware

Route::get('/month{num}',function($num){

   if($num==1){
      return "JANUARY";
   }
   else if($num==2){
      return "FEB";
   }
   else if ($num==3){
      return "MAR";
   };

});

Route::get('controller',[TestController::class,'loginform']);
//for insert
Route::get('/',[studentController::class,'insert_view_form']);
Route::post('/create',[studentController::class,'insert']);

//for edit
Route::get('/view-list',[studentController::class,'student_view_list']);
Route::get('edit/{id}',[studentController::class,'edit']);
Route::post('edit/{id}',[studentController::class,'update']);

//for delete
Route::get('delete/{id}',[studentController::class,'delete']);

//model
Route::get('/create',[User::class,'create']);
Route::post('/store',[User::class,'store']);

Route::get('/showdbDetails',[User::class,'showdatafromdb']);

Route::post('/admin',[AdminController::class,'admin']);
Route::get('/form',[AdminController::class,'form']);

Route::get('list',[AdminController::class,'list']);
