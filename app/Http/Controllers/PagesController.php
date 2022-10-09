<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class product{
    var $name;
    //var $price;
    function __construct($name){
       $this-> name = $name;
       //$this-> price = $price;

    }
 }

class PagesController extends Controller
{
    
    public function index(){
        $message = "Welcome to the page";
        return view('home')->with('message', $message);
    }
    public function product(){
    
    
        $p1=new product("Chips");
        $p2=new product("Bread");
        $p3=new product("Ice Cream");
        $p4=new product("Milk");
        $p5=new product("Biscuits");
    
        $products=array($p1,$p2,$p3,$p4,$p5);
        return view('product',["product"=>$products ]);
            
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
