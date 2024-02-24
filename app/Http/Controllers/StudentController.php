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
    public function insert(){
        $students=DB::table('students')->insert([
            'name'=>'nanny',
            'email'=>'nanny@gmail.com',
            'age'=>20,
            'phone'=>5678904321,
            'address'=>'f2,ghadftvg cvbnmrtyui 453278',
            'created_at'=>now(),
            'updated_at'=> now(),
        ]);
        if($students){
            echo "<h1>Data successfully added!</h1>";
        }
    }
    public function update(){
        $students=DB::table('students')->where('id',2)->update(['age'=>21, 'phone'=>8987543216]);
        if($students){
            echo "<h1>Record Successfully updated!</h1>";
        }
        else{
            echo "<h1>Record Not Updated!</h1>";
        }
    }
    public function delete($id){
        $students=DB::table('students')->where('id',$id)->delete();
        if($students){
            echo "<h1>Record Successfully deleted!</h1>";
        }
        else{
            echo "<h1>Record Not deleted!</h1>";
        }
        
    }
    public function forminsert(Request $req){
        $students=DB::table('students')->insert([
            'name'=>$req->name,
            'email'=>$req->email,
            'age'=>$req->age,
            'phone'=>$req->phone,
            'address'=>$req->address,
            'created_at'=>now(),
            'updated_at'=> now(),
        ]);
        if($students){
            return redirect()->route('show');
        }
        else{
            echo "<h1>Data Not added!</h1>";
        }
        
    }
}
