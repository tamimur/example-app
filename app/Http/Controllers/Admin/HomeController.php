<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{

   /* 
    public function index($user){
        echo $user; 
        //echo "Welcome home controller";
        //return view('About');//"Welcome home controller";
    }

    public function index1($id,$name,$phone){
        echo "Id :".$id ." Name :".$name ." Phone No :".$phone;
       //return view('About');
    }


    public function index2(){
        
       echo "<a href =" .route('name-route-chk').">hello</a>";
    }


    public function home($index,$role){
        //echo "supplier";
        $data = [1,2,3,4,5,6];
        $informatio =[
            ['Name'=>'karim1','Role'=>4,'Sectoion'=>1],
            ['Name'=>'karim2','Role'=>5,'Sectoion'=>1],
            ['Name'=>'karim3','Role'=>6,'Sectoion'=>1]
        ];


       return view('supplier', compact('index','role','data','informatio'));
    } 
    
    public function about(){
        //echo "supplier about";
       return view('About');
    }

    public function product(){
        echo "supplier product";
       //return view('About');
    }
     */




    public function index(){

        return view('index');

      }

      public function product(){

        return view('product-list');

      }


}
