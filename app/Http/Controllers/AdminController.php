<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

public function home(){
    return view('admin.dashboard');
}

public function destination(){
    return view('admin.components.destination');
}
  

  
}
