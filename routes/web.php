<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\TourIteniraryController;
use App\Http\Controllers\HotelReservationController;


// ============== ADMIN DASHBOARD ===============================
// ADMIN DASHBOARD
Route::get('/admin-dashboard', [AdminController::class, 'home'])->name('admin-dashboard'); // Requires user to be authenticated
// ADMIN DASHBOARD
Route::get('/admin-profile', [AdminController::class, 'admin_profile'])->name('admin-profile'); // d

//====================== TOURS AND DESTINATION====================
// URL DESTINATION
Route::get('/destination', [AdminController::class, 'destination'])->name('destination'); // 
// ADD-DESTINATION
Route::post('/add-destination', [DestinationController::class,'add_destination'])->name('add-destination'); // Re

// CREATE-TOURS
Route::get('/create-tours', [DestinationController::class,'create_tours'])->name('create-tours'); // 

// create_tours details
Route::post('/create_tours', [DestinationController::class,'createtours'])->name('create_tours'); // 
// MANAGE-TOURS
Route::get('/manage-tours', [DestinationController::class,'manage_tours'])->name('manage-tours'); // d

// MANAGE-TOURS
Route::get('/view-destination/{id}', [DestinationController::class,'view_destination'])->name('view-destination'); // d

// UPDATE DESTINATONS
Route::post('/update-destination/{id}', [DestinationController::class,'update_destination'])->name('update-destination'); // d
// DELETE DESTINATONS
Route::get('/delete-destination/{id}', [DestinationController::class,'delete_destination'])->name('delete-destination'); // d

// DELETE DESTINATONS
Route::get('/delete-destination/{id}', [DestinationController::class,'delete_destination'])->name('delete-destination'); // d

//======================= TRANSPORT BOOKING ==========================================
//BLADE
Route::get('/create-booking', [BookingController::class,'create_booking'])->name('create-booking');
// INSERT INTO DATABASE
Route::post('/create-booking', [BookingController::class,'CreateBooking'])->name('create_booking');

// MANAGE BOOKING WEB
Route::get('/manage-booking', [BookingController::class,'manage_booking'])->name('manage-booking');
// VIEW BOOKING
Route::get('/view-booking/{id}', [BookingController::class,'view_booking'])->name('view-booking');
// UPDATE BOOKING
Route::post('/update-booking/{id}', [BookingController::class,'update_booking'])->name('update-booking');

// DELETE BOOKING
Route::get('/delete-booking/{id}', [BookingController::class,'delete_booking'])->name('delete-booking');
//======================= HOTEL RESERVATIONS ==========================================
// CREATE-HOTEL WEB
Route::get('/create-hotel', [HotelReservationController::class,'create_hotel'])->name('create-hotel');
// INSERT INTO DATABASE
Route::post('/create_hotel', [HotelReservationController::class,'CreateHotel'])->name('CreateHotel');
// MANAGE-HOTEL 
Route::get('/manage-hotel', [HotelReservationController::class,'manage_hotel'])->name('manage-hotel');
// VIEW-HOTEL 
Route::get('/view-hotel/{id}', [HotelReservationController::class,'view_hotel'])->name('view-hotel');
// UPDATE-HOTEL 
Route::post('/update-hotel/{id}', [HotelReservationController::class,'update_hotel'])->name('update-hotel');
// DELETE-HOTEL 
Route::get('/delete-hotel/{id}', [HotelReservationController::class,'delete_hotel'])->name('delete-hotel');
// ====================  CREATE-TOUR-ITENIRARY ===============================
////  create-tour-itinerary
Route::get('/create-tour-itinerary', [TourIteniraryController::class,'create_tour_itinerary'])->name('create-tour-itinerary');

////  create-tour-itinerary INSERT INTO DATABASE
Route::post('/CreateTourItinerary', [TourIteniraryController::class,'CreateTourItinerary'])->name('CreateTourItinerary');


//===========================================================================



Route::middleware(['auth'])->group(function () {

    // USER DASHBORAD  HOMEPAGE
Route::get('/homepage', [DashboardController::class, 'index'])->middleware('auth')->name('homepage');
//  TOUR PACKAGE HOME PAGE
Route::get('/tour-package-page',[DashboardController::class,'tour_package'])->name('tour-package-page');
//   TOUR PACKAGE HOME PAGE
Route::get('/car-rental-page',[DashboardController::class,'car_rental'])->name('car-rental-page');
//   HOTEL-RESERVATION HOME PAGE
Route::get('/hotel-reservation-page',[DashboardController::class,'hotel_reservation'])->name('hotel-reservation-page');

//   TOUR DETAILS HOME PAGE
Route::get('/view_tour_details/{id}',[DashboardController::class,'view_tour_details'])->name('view_tour_details');

//   CAR DETAILS HOME PAGE
Route::get('/car_details/{id}',[DashboardController::class,'car_details'])->name('car_details');


//LOG OUT USER
Route::post('/logout', [DashboardController::class, 'logout'])->name('logout'); // LOGOUT USERd
// PROFILE-USER
Route::get('/profile-user',[AuthenticationController::class,'profile_user'])->name('profile-user');
// CREATE PROFILE INSERT INTO DATABASE
Route::post('/update-profile',[AuthenticationController::class,'updateProfile'])->name('updateProfile');

// ORDER-HISTORY
Route::get('/order-history',[AuthenticationController::class,'order_history'])->name('order-history');
// SETTINGS
Route::get('/settings',[AuthenticationController::class,'settings'])->name('settings');
});


Route::middleware(['guest.redirect'])->group(function () {

    // USER DASHBORAD  HOMEPAGE
    // INDEX  HOMEPAGE
Route::get('/home',[HomeController::class,'home'])->name('home'); 
//  TOUR PACKAGE HOME PAGE
Route::get('/tour-package',[HomeController::class,'tour_package'])->name('tour-package');
//   TOUR PACKAGE HOME PAGE
Route::get('/car-rental',[HomeController::class,'car_rental'])->name('car-rental');
//   HOTEL-RESERVATION HOME PAGE
Route::get('/hotel-reservation',[HomeController::class,'hotel_reservation'])->name('hotel-reservation');

//   TOUR DETAILS HOME PAGE
Route::get('/view-tour-details/{id}',[HomeController::class,'view_tour_details'])->name('view-tour-details');
//   CAR DETAILS HOME PAGE
Route::get('/car-details/{id}',[HomeController::class,'view_car_details'])->name('car-details');




// LOGIN FORM USER
Route::get('/login',[AuthenticationController::class,'login'])->name('login');
// REGISTRATION FORM USER
Route::get('/register-user',[AuthenticationController::class,'register_user'])->name('register-user');

Route::post('user-login', [AuthenticationController::class, 'login_user'])->name('user-login'); //LOG IN
// REGISTER USER
Route::post('/register',[AuthenticationController::class,'register'])->name('register');

});




