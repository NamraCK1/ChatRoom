<?php
use App\Http\Controllers\PusherController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     // return view('welcome');
//     // echo "hoii";
// });

// Route::get('/register', function() {
//     return view('register');
// });

// Route::post('/register', function() {
//     $name = request()->name;
    
//     event(new UserEvent($name));
    
// });

// Route::get('/1',[PusherController::class,'index']);
// Route::get('/receive','PusherController@receive'); 

Route::get('/', 'App\Http\Controllers\PusherController@index');
Route::post('/broadcast',[PusherController::class, 'broadcast']);
// Route::post('/broadcast', 'App\Http\Controllers\PusherController@broadcast');
Route::post('/receive', [PusherController::class, 'receive']);