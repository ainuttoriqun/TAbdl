<?php

use App\Http\Livewire\CartComponent;
use App\Http\Livewire\CheckoutComponent;
use App\Http\Livewire\HomeCOmponent;
use App\Http\Livewire\ShopComponent;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return Inertia::render('Dashboard');
//     })->name('dashboard');
// });
Route :: get('/', HomeCOmponent::class);

Route :: get('/shop', ShopComponent::class);

Route :: get('/checkout', CheckoutComponent::class);

Route :: get('/cart', CartComponent::class);

// Route :: middleware(['auth:sanctum','verified'])-> get('/dashboard', function(){
//     return view('dashboard');
// })->name('dashboard');
// for user (customer)
Route :: middleware(['auth:sanctum','verified'])->group(function() {
    
});

//for Admin
Route :: middleware(['auth:sanctum','verified'])->group(function() {
    
});