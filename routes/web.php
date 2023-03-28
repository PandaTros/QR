<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\CotizaController;
use App\Http\Controllers\QuestionController;

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
//Crud Preguntas-admin
Route::resource('questions', QuestionController::class);
//Crud Proyectos
Route::resource('projects', ProjectController::class);

//Crud Servicios
Route::resource('services', ServiceController::class);

//Crud Servicios
Route::resource('cotizas', CotizaController::class);



Route::get('/', function () {
    return view('home');
}) 
->name('home.index');

Route::get('/nosotros', function () {
    return view('nosotros');
})
//->middleware('auth')
->name('nosotros.index');

Route::get('/proyectos', function () {
    return view('proyectos');
})
//->middleware('auth')
->name('proyectos.index');

Route::get('/servicios', function () {
    return view('servicios');
})
//->middleware('auth')
->name('servicios.index');

Route::get('/preguntas', function () {
    return view('preguntas');
})
//->middleware('auth')
->name('preguntas.index');

Route::get('/login', [SessionsController::class,'create'])
->middleware('guest')
->name('login.index');

Route::post('/login', [SessionsController::class,'store'])->name('login.store');

Route::get('/logout', [SessionsController::class,'destroy'])
//->middleware('auth')
->name('login.destroy');

Route::get('/register', [RegisterController::class,'create'])
->middleware('guest')
->name('register.index');

Route::post('/register', [RegisterController::class,'store'])->name('register.store');

?>