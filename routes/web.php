<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\FrontController;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ProjectController;

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

Route::get('/',[FrontController::class,'index']);
Route::post('/contact',ContactController::class)->name('contact');

Route::middleware(['auth','verified'])->group(function(){

//Dashboard
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

   //SkillController
    Route::resource('/skills', SkillController::class);
   //ProjectController
    Route::resource('/projects', ProjectController::class);


});


require __DIR__.'/auth.php';
