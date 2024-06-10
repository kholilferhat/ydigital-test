<?php

use Illuminate\Support\Facades\Route;
use App\Models\AcneType;
use App\Models\Product;
use App\Models\Doctor;
use App\Models\Testimony;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    return view('welcome');
});

Route::get('/acne-type', function () {
    $acne_types = AcneType::all();
    $products = Product::all();
    $testimonials = Testimony::all();


    return view('acneType',[
        'acne_types' => $acne_types,
        'products' => $products,
        'testimonials' => $testimonials,
    ]);
});

Route::get('/doctor/{id}', function ($id) {
    $doctor = Doctor::with(['clinicLocations.practiceSchedules'])->findOrFail($id);
    return view('doctor', [
        'doctor' => $doctor,
    ]);
});
