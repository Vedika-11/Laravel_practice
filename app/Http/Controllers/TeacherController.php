<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function show(){
        return view('teacher');
    }
    public function store(Request $req){
        //insert data
        // $teachers= new Teacher();
        // $teachers->name = $req->name;
        // $teachers->email = $req->email;
        // $teachers->phone = $req->phone;
        // $teachers->save();

        //create data
        $data = array(
            'name' => $req->name,
            'email' => $req->email,
            'phone' => $req->phone,
        );
        Teacher::create($data);
        return redirect()->route('teacher.add');
        
    }
    public function index(){
        $teachers= Teacher::all();
        return view('show_teacher',compact('teachers'));
    }
    public function condition(){
        $teachers= Teacher::where('name','=','jhon')->get();
        return view('show_teacher',compact('teachers'));
    }
    public function delete(Request $req){
        $id=$req->id;
        $teachers=Teacher::find($id)->delete();
        return redirect()->route('teacher.show'); 
    }
    public function edit(Request $req){
        $id=$req->id;
        $teacher=Teacher::find($id);
        return view('edit_teacher',['teacher'=>$teacher]);
    }
    public function update(Request $req){
        $id=$req->id;
        $data=array(
            'name' => $req->name,
            'email' => $req->email,
            'phone' => $req->phone,
        );
        Teacher::where('id',$id)->update($data);
        return redirect()->route('teacher.show');
    }
}
