<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\AddNotesController;
use App\Models\Customer;
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




// Route::get('/', function(){
//     return view('index');
// });
// Route::get('/about', function(){
//     return view('about');
// });
// Route::get('/signup', function () {
//     return view('signup');
// });
Route::get('/',  [HomeController::class, 'index']);
Route::get('/about',  [AboutController::class, 'index']);

Route::get('/login', function () {
    return view('login');
});
Route::get('/signup', [SignupController::class, 'index']);
Route::post('/signup', [SignupController::class, 'store']);
Route::get('/addNotes', [AddNotesController::class, 'index']);


Route::post('/addNotes', [AddNotesController::class, 'store']);
Route::get('/edit/{note_id}', [AddNotesController::class, 'edit']);
Route::get('/delete/{note_id}', [AddNotesController::class, 'delete']);
// Route::post('/customer', [CustomerController::class, 'store']);
Route::post('/update/{note_id}', [AddNotesController::class, 'update']);
Route::get('/piyush/{name}', function ($name) {
    echo $name;
    echo "Hey This is my Page";
});
Route::get("/customer",function(){
    $customer=Customer::all();echo "<pre>";
    print_r($customer->toArray());
});
