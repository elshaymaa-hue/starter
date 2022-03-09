<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SecondController extends Controller
{
    public function _construct()
    {
        $this->middleware('auth');
    }
    public function showString0(){
        return 'static string';
    }
    public function showString1(){
        return 'static string';
    }
    public function showString2(){
        return 'static string';
    }
    public function showString3(){
        return 'static string';
    }
}
