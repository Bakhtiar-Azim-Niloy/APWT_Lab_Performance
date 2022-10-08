<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class product{
    var $name;
    function __construct($name){
       $this-> name = $name;

    }
 }

class PagesController extends Controller
{
    
    public function index(){
        $message = "Welcome to the page";
        return view('home')->with('message', $message);
    }
    public function product(){
    
    
        $p1=new product("Books");
        $p2=new product("Pen");
        $p3=new product("Laptop");
        $p4=new product("Mobile");
        $p5=new product("RAM");
    
        $abc=array($p1,$p2,$p3,$p4,$p5);
        return view('product',["product"=>$abc ]);
            
        }
    public function team(){
        $message = "Welcome ";
        return view('team')->with('message', $message);
    }
    public function info(){
        $message = "Welcome ";
        
        return view('info')->with('message', $message);
    }
    public function contact(){
        $message = "Welcome ";
        return view('contact')->with('message', $message);
    }
    
}
