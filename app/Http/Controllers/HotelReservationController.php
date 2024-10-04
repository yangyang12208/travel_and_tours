<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tbl_core_hotels;
class HotelReservationController extends Controller
{
    public function create_hotel(){
        return view('admin.components.create-hotel');
    }
    public function manage_hotel(){
        $count = tbl_core_hotels::all()->count();
        $data = tbl_core_hotels::all();
        return view('admin.components.manage-hotel',compact('data'),compact('count'));
    }
    public function view_hotel($id){
        $data = tbl_core_hotels::find($id);
        return view('admin.components.view-hotel',compact('data'));
    }
    public function CreateHotel(Request $request){
        $request->validate([
            'hotel_name' => 'required|string|',
            'hotel_location' => 'required|string',
            'hotel_price' => 'required|numeric|max:1000000',
            'hotel_limit' => 'required|string', // Ensure passwords match
            'room_type' => 'required|string',
            'accomodation_type' => 'required|string',
            'hotel_ratings' => 'required|string',
            'hotel_description' => 'required|string',
            'hotel_included' => 'required|string',
            'hotel_policy' => 'required|string',
            'image' =>  ['required','nullable','file','max:3000','mimes:webp,png,jpg']
        ]);
        $data = new tbl_core_hotels;
        $data->hotel_name = $request->hotel_name;
        $data->hotel_location = $request->hotel_location;
        $data->hotel_price = $request->hotel_price;
        $data->hotel_limit = $request->hotel_limit;
        $data->room_type = $request->room_type;
        $data->accomodation_type = $request->accomodation_type;
        $data->hotel_ratings = $request->hotel_ratings;
        $data->hotel_description = $request->hotel_description;
        $data->hotel_included = $request->hotel_included;
        $data->hotel_policy = $request->hotel_policy;

        $image = $request->image;
        
         // Check if an image was uploaded
         if($image){
             $imagename = time(). '.' .$image->getClientOriginalExtension();
             $request->image->move('hotel-images',$imagename);
             $data->hotel_images =$imagename; 
         }

        $data->save();
        sweetalert()->success('creating hotel has been successfully created');
        return redirect()->back();
    }
     
    public function update_hotel(Request $request,$id){
        $data = tbl_core_hotels::find($id);
        $request->validate([
            'hotel_name' => 'required|string|',
            'hotel_location' => 'required|string',
            'hotel_price' => 'required|numeric|max:1000000',
            'hotel_limit' => 'required|string', // Ensure passwords match
            'room_type' => 'required|string',
            'accomodation_type' => 'required|string',
            'hotel_ratings' => 'required|string',
            'hotel_description' => 'required|string',
            'hotel_included' => 'required|string',
            'hotel_policy' => 'required|string',
            'image' =>  ['nullable','file','max:3000','mimes:webp,png,jpg']
        ]);
  
        $data->hotel_name = $request->hotel_name;
        $data->hotel_location = $request->hotel_location;
        $data->hotel_price = $request->hotel_price;
        $data->hotel_limit = $request->hotel_limit;
        $data->room_type = $request->room_type;
        $data->accomodation_type = $request->accomodation_type;
        $data->hotel_ratings = $request->hotel_ratings;
        $data->hotel_description = $request->hotel_description;
        $data->hotel_included = $request->hotel_included;
        $data->hotel_policy = $request->hotel_policy;

        $image = $request->image;
        
         // Check if an image was uploaded
         if($image){
             $imagename = time(). '.' .$image->getClientOriginalExtension();
             $request->image->move('hotel-images',$imagename);
             $data->hotel_images =$imagename; 
         }

        $data->save();
        sweetalert()->success('creating hotel has been successfully created');
        return redirect()->route('manage-hotel');
    }
     
     public function delete_hotel($id){
        $data = tbl_core_hotels::find($id);

        //DELETE IMAGE FROM PATH
        $image_path = public_path('hotel-images/'.$data->hotel_images);

        // IF FILE EXISTS UNLINK
        if(file_exists($image_path)){
            unlink($image_path);
        }
        $data->delete();
        sweetalert()->success('data has been successfully deleted');
        return redirect()->back();
     }
     
     
     
     
}
