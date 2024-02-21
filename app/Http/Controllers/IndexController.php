<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Group;

class IndexController extends Controller
{
    public function index(){
        //for one to one relations
        // return Member::all();
        // return Member::find(1)->getgroup;
        // return Member::find(2)->getgroup;
        // return Member::with('getgroup')->get();

        //for many to many relations
        return Member::with('getgroups')->get();
    }
    public function group(){
        // return Group::get();
        return Group::with('member')->get();
    }
}
