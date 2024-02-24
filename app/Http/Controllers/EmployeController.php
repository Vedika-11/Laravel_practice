<?php

namespace App\Http\Controllers; 

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeController extends Controller
{
    public function showEmploye(){
        $employes= DB::table('employes')
                ->join('cities','employes.city','=','cities.id')
                ->select('employes.*','cities.city_name')
                ->get();
        return view('employe',['data' =>$employes]);
        // return $employes;
    }
    public function showEmployeWithCondition(){
        $employes= DB::table('employes')
                ->join('cities','employes.city','=','cities.id')
                ->select('employes.*','cities.city_name')
                ->where('cities.city_name','=','Lake Dolly')
                ->get();
        return view('employe',['data' =>$employes]);
        // return $employes;
    }
    public function methodCount(){
        $employes= DB::table('employes')
                ->join('cities','employes.city','=','cities.id')
                ->select('employes.*','cities.city_name')
                ->count();
        return "Number of counts are: ".$employes;
    }
    public function methodCountWithCondition(){
        $employes= DB::table('employes')
                ->join('cities','employes.city','=','cities.id')
                ->select('employes.*','cities.city_name')
                ->where('cities.city_name','=','Lake Dolly')
                ->count();
        return "Number of counts are: ".$employes;
        
    }
    public function grouping(){
        $employes= DB::table('employes')
                ->join('cities','employes.city','=','cities.id')
                // ->select(DB::raw('count(*) as employe_count'),'city_name')
                // ->select(DB::raw('count(*) as employe_count'),'age')
                ->select(DB::raw('count(*) as employe_count'),'city_name','age')
                // ->groupBy('city_name')
                // ->groupBy('age')
                ->groupBy('city_name','age')
                ->get();
        // return "Number of counts are: ".$employes;
        return $employes;
        
    }
}
