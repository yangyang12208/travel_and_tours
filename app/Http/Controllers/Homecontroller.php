<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tbl_core_tours;
use App\Models\tbl_core_bookings;
class Homecontroller extends Controller
{
   
    public function home(){
        return view('home.index');
    }

    public function view_car_details($id){
            // Fetch other tours, excluding the current one by ID
        $otherCars = tbl_core_bookings::where('id', '!=', $id)->get();
        $data = tbl_core_bookings::find($id);
        return view('home.view-car-details',compact('data','otherCars'));
    }
    public function tour_package(){
        $data = tbl_core_tours::all();
        return view('home.tour-package',compact('data'));
    }
    public function   car_rental(){

        $data = tbl_core_bookings::all();
        return view('home.car-rental',compact('data'));
    }
    public function hotel_reservation(){
        return view('home.hotel');
    }
    public function view_tour_details($id){

        // $tour = tbl_core_tours::with('dailyItineraries')->findOrFail($id);

        //============= BY ASC ======================
        $tour = tbl_core_tours::with(['dailyItineraries' => function ($query) {
               $query->orderBy('day_number', 'asc'); // Sort by day_number in ascending order
              }])->findOrFail($id);

             // Fetch other tours, excluding the current one by ID
                $otherTours = tbl_core_tours::where('id', '!=', $id)->get();
                $data = tbl_core_tours::find($id);
        return view('home.view-tour-details', compact('data', 'otherTours','tour'));
   

    }


 


  
}
