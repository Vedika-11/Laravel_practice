<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function show(){
        $students=DB::table('students')->get();
        //if we just want to test then we use laravel method dd(debug data/information)
        //dd($students);
        //dd method will not run any code written after it so will use dump method which
        //works similar to dd but it runs the code written after it
        // dump($students);
        // return $students;
        return view('student',['data' => $students]);
    }
    public function condition(){
        $students=DB::table('students')->where('id','=',3)->get();
        return view('student',['data' => $students]);
    }
    public function select(){
        $students=DB::table('students')->select('id','name')->get();
        return $students;
    }
    public function column_name_change(){
        $students=DB::table('students')->select('id','name as my_name')->get();
        return $students;
    }
    public function distinct(){
        $students=DB::table('students')->select('age')->distinct()->get();
        return $students;
    }
    public function orderby(){
        $students=DB::table('students')->orderby('name')->get();
        return view('student',['data' => $students]);
    }
    public function limit(){
        $students=DB::table('students')->limit(3)->get();
        return view('student',['data' => $students]);
    }
    
}
