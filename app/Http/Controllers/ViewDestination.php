<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewDestination extends Controller
{
    
    
    public function view($id){
       
    
        return view('admin.components.view-destination');

    }
}
