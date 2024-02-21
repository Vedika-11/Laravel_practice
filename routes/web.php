<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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

Route::get('/', function () {
    // $admin =User::whereName('Admin')->first();
    // $admin_role =Role::whereName('admin')->first();
    // $admin->roles()->attach($admin_role);
    // dd($admin->toArray());

    // $add_user =Permission::where('name','add_user')->first();
    // $admin_role =Role::whereName('admin')->first();
    // $admin_role->permissions()->attach($add_user);
    // dd($admin_role->permissions());

 
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