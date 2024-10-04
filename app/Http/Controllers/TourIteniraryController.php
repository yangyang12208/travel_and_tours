<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tbl_core_destinations;
use App\Models\tbl_core_tours;
use App\Models\tbl_core_itineraries;

class TourIteniraryController extends Controller
{


    public function create_tour_itinerary(){
        $data = tbl_core_tours::all();
        return view('admin.components.create-tour-itinerary',compact('data'));
    }

    public function CreateTourItinerary(Request $request){

        $request->validate([
            'destination_name' => 'required|string',
            'daily_itinerary' => 'required|string',
            'image' =>  ['nullable', 'file', 'max:3000', 'mimes:webp,png,jpg'],
            'destination_description' => 'required|string',
            'destination_location' => 'required|string',
        ]);
        
        // Split the value by the hyphen
        $destinationData = explode('-', $request->destination_name);
        $destinationId = $destinationData[0]; // This is the tour ID
        $destinationName = $destinationData[1]; // This is the destination name    
        // Save the data to the database
        $data = new tbl_core_itineraries;
        $data->tour_id = $destinationId; // Use the ID from the select option
        $data->destination_name = $destinationName;
        $data->day_number = $request->daily_itinerary; // Correct field
        $data->description = $request->destination_description; // Correct field
        $data->location = $request->destination_location; // Correct field

        $image = $request->image;
        
         // Check if an image was uploaded
         if($image){
             $imagename = time(). '.' .$image->getClientOriginalExtension();
             $request->image->move('daily-itenirary-images',$imagename);
             $data->itenirary_images =$imagename; 
         }

        $data->save();
        sweetalert()->success(' has been successfully created');
        return redirect()->back();
    }
}
