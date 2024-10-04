<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Ensure this is included

use App\Http\Controllers\Controller;
use App\Models\tbl_core_tours;
use App\Models\tbl_core_bookings;


class DashboardController extends Controller
{
    
    public function index(){
        $user = Auth::user(); // Get the logged-in user
        $details = $user->details; // ITS details is from User.php
                return view('home.index',compact('details'),compact('user'));        
    }

    public function tour_package(){
        $data = tbl_core_tours::all();
        $user = Auth::user(); // Get the logged-in user
        $details = $user->details; // ITS details is from User.php
  
        return view('home.tour-package',compact('details','data','user'));   
    }
    public function   car_rental(){
        $user = Auth::user(); // Get the logged-in user
        $details = $user->details; // ITS details is from User.php
        
        $data = tbl_core_bookings::all();
                return view('home.car-rental',compact('details','user','data'));   
    
    }
    public function hotel_reservation(){
        $user = Auth::user(); // Get the logged-in user
        $details = $user->details; // ITS details is from User.php
                return view('home.hotel',compact('details'),compact('user'));   
    }


    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate(); // Invalidate the session
        $request->session()->regenerateToken(); // Regenerate the CSRF token
        
        return redirect()->route('home'); // Redirect to the home page or login page
    }


    public function view_tour_details($id){
        $user = Auth::user(); // Get the logged-in user
        $details = $user->details; // ITS details is from User.php
        $tour = tbl_core_tours::with('dailyItineraries')->findOrFail($id);
        $data = tbl_core_tours::find($id);
        $otherTours = tbl_core_tours::where('id', '!=', $id)->get();         // Fetch other tours, excluding the current one by ID
                return view('home.view-tour-details',compact('details','user','data','tour','otherTours'));   

    }
    
    public function car_details($id){
        $user = Auth::user(); // Get the logged-in user
        $details = $user->details; // ITS details is from User.php
        $otherCars = tbl_core_bookings::where('id', '!=', $id)->get();        // Fetch other tours, excluding the current one by ID
        $data = tbl_core_bookings::find($id);
        return view('home.view-car-details',compact('data','otherCars','details'));
}


}
