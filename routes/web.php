<?php

use App\Events\UserEvent;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\HomeRedirect;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Return_;

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
Route::middleware(['login'])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    })->name('home');

    Route::get('/logout', function () {
        session()->flush();
        return redirect()->route('login')->with('success', 'Logout successful!');
    });
});

// Route::middleware((['nologin'])->group(function () {

    Route::get('/register', function() {
        return view('register');
    });

    Route::get('/login', function () {
        Return view('login');
    })->name('login')->middleware('nologin');
// }));


// Route::post('/register', function() {
//     $name = request()->name;
//     event(new UserEvent($name));
// });
Route::post('/register', [LoginController::class,'Register']);

Route::post('/login',[LoginController::class, 'Login']);

