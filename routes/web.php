<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\PhotoResourceController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\EmployeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use App\Models\{
    User,Role,Permission
};

Route::get('/role', function () {
    $admin =User::whereName('Admin')->first();
    $admin_role =Role::whereName('admin')->first();
    $admin->roles()->attach($admin_role);
    dd($admin->toArray());

    $add_user =Permission::where('name','add_user')->first();
    $admin_role =Role::whereName('admin')->first();
    $admin_role->permissions()->attach($add_user);
    dd($admin_role->permissions());

 
    return view('welcome');
});

Route::get('navbar', function () {
    return view('navbar');
});


Route::get('layout', function () {
    return view('content');
});

Route::get('/demo',function(){
    return "Hello World!";

});
//any is used to get from any route method either get or post
Route::any('/test',function(){
    return "How Are You!";

});
Route::get('/demo1',function(){
    return view('demo1');
    
});
//to get parameters in route
Route::get('/demo2/{name}',function($name){
    return $name;
    
});
Route::get('/home/{name?}',function($name = null){
    $demo = "<h1>how do you do?</h1>";
    $data= compact('name','demo');
    return view('home')->with($data);
    
});
Route::get('/member',[IndexController::class,'index']);
Route::get('/group',[IndexController::class,'group']);
Route::get('/basic',[DemoController::class,'index']);
Route::get('/singleaction',SingleActionController::class);
Route::resource('/name',PhotoResourceController::class);
Route::controller(StudentController::class)->group(function(){
Route::get('/show','show')->name('show');
Route::get('/condition','condition');
Route::get('/select','select');
Route::get('/column','column_name_change');
Route::get('/distinct','distinct');
Route::get('/orderby','orderby');
Route::get('/limit','limit');
Route::get('/insert','insert');
Route::get('/update','update');
Route::get('/delete/{id}','delete');
Route::post('forminsert','forminsert');
});
Route::view('form','/form');
Route::get('/showemploye',[EmployeController::class,'showEmploye']);
Route::get('/showemployewithcondition',[EmployeController::class,'showEmployeWithCondition']);
Route::get('/methodcount',[EmployeController::class,'methodCount']);
Route::get('/methodcountwithcondition',[EmployeController::class,'methodCountWithCondition']);
Route::get('/grouping',[EmployeController::class,'grouping']);




