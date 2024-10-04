<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tbl_core_bookings;
class BookingController extends Controller
{

    public function create_booking(){
        return view('admin.components.create-booking');
    }

    public function manage_booking(){
        $count = tbl_core_bookings::all()->count();
        $data = tbl_core_bookings::all();

        return view('admin.components.manage-booking',compact('data'),compact('count'));
    }
    public function view_booking($id){
        $data = tbl_core_bookings::find($id);
        return view('admin.components.view-booking',compact('data'));
    }

    public function update_booking(Request $request, $id){
        
        $data =  tbl_core_bookings::find($id);
        $request->validate([
            'car_name' => 'required|string|',
            'car_price' => 'required|numeric|max:1000000',
            'image' =>  ['nullable','file','max:3000','mimes:webp,png,jpg'],
            'car_seats' => 'required|string', // Ensure passwords match
            'car_features' => 'required|string',
            'car_transmission' => 'required|string',
            'car_doors' => 'required|string',
            'driver_age' => 'required|numeric|max:1000000',
            'driver_name' => 'required|string',
            'car_description' => 'required|string',
            'car_included' => 'required|string',
            'car_policy' => 'required|string',
            
        ]);

    
        $data->car_name = $request->car_name;
        $data->car_price = $request->car_price;
        $data->car_seats = $request->car_seats;
        $data->car_features = $request->car_features;
        $data->car_transmission = $request->car_transmission;
        $data->car_doors = $request->car_doors;
        $data->driver_age = $request->driver_age;
        $data->driver_name = $request->driver_name;
        $data->car_description = $request->car_description;
        $data->car_included = $request->car_included;
        $data->car_policy = $request->car_policy;
        $image = $request->image;
        
         // Check if an image was uploaded
         if($image){
             $imagename = time(). '.' .$image->getClientOriginalExtension();
             $request->image->move('booking-images',$imagename);
             $data->car_images =$imagename; 
         }

        $data->save();
        sweetalert()->success('booking has been successfully updated');
        return redirect()->route('manage-booking'); 
    }

    public function CreateBooking(Request $request){

        $request->validate([      
            'car_type' => 'required|string|',
            'car_name' => 'required|string|',
            'car_price' => 'required|numeric|max:1000000',
            'image' =>  ['required','nullable','file','max:3000','mimes:webp,png,jpg'],
            'car_seats' => 'required|string', // Ensure passwords match
            'car_features' => 'required|string',
            'car_transmission' => 'required|string',
            'car_doors' => 'required|string',
            'driver_age' => 'required|numeric|max:1000000',
            'driver_name' => 'required|string',
            'car_description' => 'required|string',
            'car_included' => 'required|string',
            'car_policy' => 'required|string',
            
        ]);

        $data = new tbl_core_bookings;
        $data->car_type = $request->car_type;
        $data->car_name = $request->car_name;
        $data->car_price = $request->car_price;
        $data->car_seats = $request->car_seats;
        $data->car_features = $request->car_features;
        $data->car_transmission = $request->car_transmission;
        $data->car_doors = $request->car_doors;
        $data->driver_age = $request->driver_age;
        $data->driver_name = $request->driver_name;
        $data->car_description = $request->car_description;
        $data->car_included = $request->car_included;
        $data->car_policy = $request->car_policy;
        $image = $request->image;
        
         // Check if an image was uploaded
         if($image){
             $imagename = time(). '.' .$image->getClientOriginalExtension();
             $request->image->move('booking-images',$imagename);
             $data->car_images =$imagename; 
         }

        $data->save();
        sweetalert()->success('Booking has been successfully created');
        return redirect()->back();
    }

    public function delete_booking($id){
        $data = tbl_core_bookings::find($id);

        // DELETE IMAGE FROM FOLDER
        $image_path = public_path('booking-images/'. $data->car_images);
        if(file_exists($image_path)){
            unlink($image_path);
        }
        
        $data->delete();
        sweetalert()->success('data was successfully Deleted');

        return redirect()->back();


             
        
    }
}
