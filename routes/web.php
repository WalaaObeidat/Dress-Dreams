<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\PlaygroundsController;
use App\Http\Controllers\Admin\ReservationsController;
use App\Http\Controllers\UserSide\MasterController;
use App\Http\Controllers\UserSide\categoryController;
use App\Http\Controllers\UserSide\reservatioonController;
use App\Http\Controllers\UserSide\UserReservationController;
use App\Http\Controllers\UserSide\UserItemsController;
use App\Http\Controllers\UserSide\BookController;
use App\Http\Controllers\UserSide\registerController;
use App\Http\Controllers\UserSide\loginController;
use App\Http\Controllers\UserSide\searchController;
use App\Http\Controllers\UserSide\ProfileEditController;
use App\Http\Controllers\UserSide\fieldsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Admin.login');
});

// Route::get('dashoard', function () {
//     return view('Admin.welcome');
// });

// Route::get('/users', function () {
//     return view('Admin.usersTable');
// });

// Route::resource('/users', UserController::class);
// Route::resource('/categories', CategoriesController::class);
// Route::resource('/playgrounds', PlaygroundsController::class);
// Route::resource('/reservation', ReservationsController::class);

// Route::get('/dashboard', function () {
//     return view('Admin.welcome');
// })->middleware(['auth', 'verified',])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth','verified','Admin'])->group(function () {
    Route::resource('/users', UserController::class);
    Route::resource('/categories', CategoriesController::class);
    Route::resource('/playgrounds', PlaygroundsController::class);
    Route::resource('/reservation', ReservationsController::class);
    Route::get('/dashboard', function () {
        return view('Admin.welcome');
    })->name('dashboard');
    
});

require __DIR__.'/auth.php';

Route::resource('/fields', UserItemsController::class);
// Route::resource('/reservationUse', UserReservationController::class);
// Route::resource('feestype', 'YourController');

Route::get('/',[MasterController::class,'index'])->name('puplicUser.welcome');
Route::get('/book/{id}',[BookController::class,'index'])->name('book')->middleware('auth');
Route::get('/UserProfile/{id}',[BookController::class,'profile'])->name('profile');
Route::get('/UserProfileEdit/{id}',[BookController::class,'profileEdit'])->name('profileEdit');
Route::get('/UserProfileUpdate/{id}',[BookController::class,'profileUpdate'])->name('profileUpdate');
Route::get('/UserReservationEdit/{id}',[BookController::class,'ReservstionEdit'])->name('ReservstionEdit');
Route::get('/UserReservationUpdate/{id}',[BookController::class,'ReservstionUpdate'])->name('ReservstionUpdate');
Route::get('/book/create/{id}',[BookController::class,'create'])->name('book.create');

Route::resource('payments', 'PaymentsController', ['except' => 'create']);


Route::get('/about', function () {
    return view('puplicUser.about');
});
Route::get('/contact', function () {
    return view('puplicUser.contact');
});
// Route::get('/UserProfile',function(){
//     return view('puplicUser.userprofile');
// });
// Route::get('/Edit',function(){
//     return view('puplicUser.userprofileEdit');
// });
Route::get('singleItem',function(){
    return view('singleItem');
});

Route::post('search' , [searchController::class , 'search'])->name('search');
Route::get('puplicUser.fieldsItem' , [fieldsController::class , 'index'])->name('fieldsItem');
// Route::resource('/categories', CategoriesController::class);