<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeControler extends Controller
{
   public function index(){
    echo "Bismillah bisa larvel";
   }
   public function LewatView(){
    return view("admin.index");
   }
}
