<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $primaryKey='member_id';
    function getgroup(){
        return $this->hasone('App\Models\Group','group_id','group_id');
    }
    function getgroups(){
        return $this->hasmany('App\Models\Group','group_id','group_id');
    }
}
