<?php

use App\Http\Controllers\AddProjectController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProjectController;
use App\Models\Project;
use Illuminate\Support\Facades\Route;

Route::get('/',  [HomeController::class,'index']);
Route::get('/projects', [ProjectController::class,'index']);
Route::get('/contact', function () {
    return view('contact',['title'=>'Contact']);
});
// Route::get('/addproject', function () {
//     return view('addproject',['title'=>'Add',  "projects" =>  Project::latest()->get()]) ;
// });
Route::get('/dashboard', [ProjectController::class,'dashboard'])->name('dashboard');

Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);
Route::post('/logout', [LoginController::class,'logout']);


Route::get('/create-project',[ProjectController::class,'create']);
Route::post('/store', [ProjectController::class, 'store'])->name('store');
Route::delete('/addproject/{project}', [ProjectController::class, 'destroy']);
Route::get('/dashboard/{project}/edit-project', [ProjectController::class, 'edit'])->name('projects.edit');
Route::put('/projects/{project}', [ProjectController::class, 'update'])->name('projects.update');
Route::get('/search', [ProjectController::class, 'search'])->name('search');


