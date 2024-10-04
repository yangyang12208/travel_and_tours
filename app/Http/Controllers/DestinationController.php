<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tbl_core_destinations;
use App\Models\tbl_core_tours;


class DestinationController extends Controller
{
    
    public function add_destination(Request $request){
        
        $request->validate([
            'destination' => 'required|string',
            'adventour' => 'required|string',
            'leisureAndScenicTour' => 'required|string',
            'SpecialEducational' => 'required|string', // Ensure passwords match
            'SpecialEducational' => 'required|string',
            'image' =>  ['required','nullable','file','max:3000','mimes:webp,png,jpg']
        ]);

        $data = new tbl_core_destinations;
        $data-> destinations = $request->destination;
        $data-> Adventours = $request->adventour;
        $data-> leisure_and_scenic_tours = $request->leisureAndScenicTour;
        $data-> special_and_educational_tours = $request->SpecialEducational;
         // Retrieve the uploaded image file from the request
         $image = $request->image;
        
         // Check if an image was uploaded
         if($image){
             $imagename = time(). '.' .$image->getClientOriginalExtension();
             $request->image->move('products',$imagename);
             $data->destination_images =$imagename; 
         }

        
        $data->save();
        sweetalert()->success('successfully add.');
        return redirect()->back();

    }

    public function create_tours(){
        $data = tbl_core_destinations::all();
        return view('admin.components.create-tours',compact('data'));
    }

    public function manage_tours(){
        $count = tbl_core_tours::all()->count();
        $data = tbl_core_tours::all();    
       return view('admin.components.manage-tours',compact('data'),compact('count'));
    }

    public function createtours(Request $request){

        $request->validate([
            'destination_category' => 'required|string|',
            'destination_name' => 'required|string',
            'destination_price' => 'required|numeric|max:1000000',
            'destination_location' => 'required|string', // Ensure passwords match
            'destination_day' => 'required|integer|numeric',
            'destination_description' => 'required|string',
            'destination_included' => 'required|string',
            'destination_policy' => 'required|string',
            'image' =>  ['required','nullable','file','max:3000','mimes:webp,png,jpg']
        ]);

        $data = new tbl_core_tours;
        $data->destination_category = $request->destination_category;
        $data->destination_name = $request->destination_name;
        $data->destination_price = $request->destination_price;
        $data->destination_location = $request->destination_location;
        $data->destination_days = $request->destination_day;
        $data->destination_description = $request->destination_description;
        $data->destination_included = $request->destination_included;
        $data->destination_policy = $request->destination_policy;

        $image = $request->image;
        
         // Check if an image was uploaded
         if($image){
             $imagename = time(). '.' .$image->getClientOriginalExtension();
             $request->image->move('destination-images',$imagename);
             $data->destination_images =$imagename; 
         }

        $data->save();
        sweetalert()->success('creating Tour has been successfully created');
        return redirect()->back();
    }

    public function view_destination($id){
        $category = tbl_core_destinations::all();
        $data = tbl_core_tours::find($id);
        return view('admin.components.view-destination',compact('data'),compact('category'));

    }
    public function update_destination(Request $request,$id){

        $data = tbl_core_tours::find($id);
        $request->validate([
            'destination_category' => 'required|string|',
            'destination_name' => 'required|string',
            'destination_price' => 'required|numeric|max:1000000',
            'destination_location' => 'required|string', // Ensure passwords match
            'destination_day' => 'required|numeric|max:1000000',
            'destination_description' => 'required|string',
            'destination_included' => 'required|string',
            'destination_policy' => 'required|string',
            'image' =>  ['nullable','file','max:3000','mimes:webp,png,jpg']
        ]);

        
   

        $data->destination_category = $request->destination_category;
        $data->destination_name = $request->destination_name;
        $data->destination_price = $request->destination_price;
        $data->destination_location = $request->destination_location;
        $data->destination_days = $request->destination_day;
        $data->destination_description = $request->destination_description;
        $data->destination_included = $request->destination_included;
        $data->destination_policy = $request->destination_policy;
        $image = $request->image;
         // Check if an image was uploaded
         if($image){
            $imagename = time(). '.' .$image->getClientOriginalExtension();
            $request->image->move('destination-images',$imagename);
            $data->destination_images =$imagename; 
        }


        $data->save();
        sweetalert()->success('successfully update');
        return redirect()->route('manage-tours');
    }

    public function delete_destination($id){
        
        $data = tbl_core_tours::find($id);
  
        // DELETE IMAGE FROM PUBLIC FOLDER
        $image_path  = public_path('destination-images/'. $data->destination_images);
        
        if(file_exists($image_path)){
            unlink($image_path);
        }
        $data->delete();
        sweetalert()->success('data was successfully Deleted');

        return redirect()->back();
    }
}
