<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function hello($id){

        $id = 2;
        echo "this is hello ......$id";
//	    return route("hello");
    }

//    public function test($id,$name){
//        echo "test22";
//    }

    public function test($id,$name){
        return $name;
        echo "路由占位符";
    }

    public function age($age){

        echo "age:".$age;
    }

    public function foo(){

        return view('test.test');
//        echo "this";
    }
}
