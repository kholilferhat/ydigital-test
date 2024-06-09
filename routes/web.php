<?php

use Illuminate\Support\Facades\Route;
use App\Models\AcneType;
use App\Models\Product;
use App\Models\Doctor;

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

Route::get('/home', function () {
    $acne_types = AcneType::all();
    $products = Product::all();
    // $doctor = Doctor::with(['clinicLocations.practiceSchedules']);

    return view('welcome',[
        'acne_types' => $acne_types,
        'products' => $products,
        // 'doctor' => $doctor,
    ]);
});

Route::get('/doctor/{id}', function ($id) {
    $doctor = Doctor::with(['clinicLocations.practiceSchedules'])->findOrFail($id);
    return view('doctor', [
        'doctor' => $doctor,
    ]);
});
