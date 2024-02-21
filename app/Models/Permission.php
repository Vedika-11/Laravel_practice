<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;
    protected $gaueded=[];
    public function roles(){
        return $this->belondsToMany(Role::class,'role_permissions');
    }
    
}
