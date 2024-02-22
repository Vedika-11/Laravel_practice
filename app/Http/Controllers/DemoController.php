<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function index(){
        return "<h1>Basic Controller!</h1>";
        // return view('welcome');
    }
}
