<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class UserController extends Controller
{
   public function showUserName(){
       return 'Eng Elshaymaa Nassar';
   }
    public function getIndex(){
        $data=['name'=>'Elshaymaa', 'age'=>47, 'gender'=> 'female'];
//        $data['age']=47;
//        $data['name']='Elshaymaa Nassar';


        $obj= new \stdClass();
        $obj->name='Elshaymaa';
        $obj->age=47;
        $obj->gender='female';

        return view('welcome')->with('data',$data);//
        //(['string'=>'Elshaymaa Nassar','age'=>'47']);
        //return view ('welcome',compact('obj'));
    }
}
