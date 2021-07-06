<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class DataController extends Controller
{
    public function index(){
        $flowers=DB::table('flori')->get();
        return $flowers;
    }
    public function test1(){
        $flowers=DB::table('flori')->where('nume','lalele')->first();
        return ($flowers->nume);
    }
    public function test2(){
        $flowers=DB::table('flori')->where('nume','lalele')->first();
        dd($flowers);
    }
    public function test3(){
        $flowers=DB::table('flori')->where('nume','lalele')->first();
        return $flowers->nume;
    }
    public function test4(){
        $flowers=DB::table('flori')->where('nume','!=','lalele')->get();
        return $flowers;
    }
    public function test5(){
        $flowers=DB::select('select * from flori');
        return $flowers;
    }
}
