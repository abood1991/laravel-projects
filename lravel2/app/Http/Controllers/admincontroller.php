<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admincontroller extends Controller
{



    public  function contact (){

     $arr=array('id'=>1,'name'=>'abood');
        return view('admin/contact',$arr);
    }
    public  function Home (){


        return view('admin/Home');
    }



    
    //












}
