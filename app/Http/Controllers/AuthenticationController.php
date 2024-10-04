<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\tbl_core_users;
use App\Models\User;
use App\Models\CoreUserDetails;

use Illuminate\Support\Facades\Hash;
class AuthenticationController extends Controller
{   
     
    public function login(){
        return view('home.auth.login');
    }
  

    public function register_user(){
        return view('home.auth.register');

    }
    public function profile_user(){
        $user = Auth::user(); // Get the logged-in user
        $details = $user->details; // ITS details is from User.php
        return view('home.profile-user',compact('user', 'details'));

    }
   
    public function order_history(){
        return view('home.order-history');

    }
    public function settings(){
        return view('home.settings');

    }
    // USER HOMEPAGE 
    public function index(){
        return view('home.index');        
}


    public function login_user(Request $request){

        $fields =   $request->validate([
            'email' => ['required','max:255','email'],
            'password' => ['required']
        ]);

        // Attempt to log in the user
        if (Auth::attempt(['email' => $fields['email'], 'password' => $fields['password']])) {
            // Authentication successful, redirect to dashboard or any other route
            return redirect()->route('homepage');
        
        } else {
            // Authentication failed, return back with an error message
            return back()->withErrors([
                'failed' => 'Invalid credentials provided.',
            ])->onlyInput('email'); // Keep the email input to avoid refilling
        }
    }
    
    public function register(Request $request){

         $request->validate([
            'firstname' => 'required|string|max:30',
            'lastname' => 'required|string|max:30',
            'email' => 'required|max:255|email|unique:users',
            'password' => 'required|string|min:8|confirmed', // Ensure passwords match

        ]);

        $data = new User;
        $data->firstname = $request->firstname;
        $data->lastname = $request->lastname;
        $data->email = $request->email;
        $data -> password = Hash::make($request->password);  // Hashing the password

        $data->save();
        sweetalert()->success('your account has been successfully created.');
        return redirect()->route('login');
       

    }
    
      //UPDATE USER-PROFILE
public function updateProfile(Request $request) {
    $request->validate([
        'firstname' => 'required|string|max:255',
        'lastname' => 'required|string|max:255',
        'address' => 'nullable|string|max:255',
        'religion' => 'nullable|string',
        'email' => 'required|email|max:255',
        'phone_number' => 'nullable|string|max:15',
        'user_images' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    //===============================================
    // ORIGINAL CODES
    // $user = Auth::user();

    // // Find the existing user details record or create a new one
    // $userDetails = CoreUserDetails::firstOrCreate(['user_id' => $user->uuid]);

    // // Update the user details
    // $userDetails->firstname = $request->input('firstname');
    // $userDetails->lastname = $request->input('lastname');
    // $userDetails->address = $request->input('address');
    // $userDetails->religion = $request->input('religion');
    // $userDetails->email = $request->input('email');
    // $userDetails->phone_number = $request->input('phone_number');
    ///===========================================
    //SHORTCUT CODES 
    // Get the logged-in user

    $user = Auth::user();
    // Update the 'tbl_user_details' table
    $userDetails = CoreUserDetails::updateOrCreate(
        ['user_id' => $user->uuid],
        $request->only('firstname', 'lastname', 'address', 'religion', 'email', 'phone_number')
    );

    // Handle image upload
    if ($request->hasFile('user_images')) {
        // Get the path of the existing image
        $existingImagePath = public_path('profile-pictures/' . $userDetails->user_images);

        // Check if the existing image exists and delete it if necessary
        if (file_exists($existingImagePath) && $userDetails->user_images !== null) {
            unlink($existingImagePath); // Delete the existing image
        }

        // Upload the new image
        $image = $request->file('user_images');
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('profile-pictures'), $imagename);

        // Update user details with the new image name
        $userDetails->user_images = $imagename;
    }

    // Save the user details
    $userDetails->save();
    $user->save();

    // Redirect with a success message
    return redirect()->back()->with('success', 'Profile updated successfully!');
}
}  
    

 
    