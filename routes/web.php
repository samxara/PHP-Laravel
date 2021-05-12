<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

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
   $employee = \App\Models\Employee::all();
   return view('employee.index',compact('employee'));
});

//Route::get('/posts', function () {
   // return Post::all();
//});

//Route::get('/posts', [\App\Http\Controllers\PostController::class, 'index']);

//Route::get('/test', [\App\Http\Controllers\TestController::class, 'index']);

//Route::get('/calculate', [\App\Http\Controllers\TestController::class, 'calculate']);

//Route::get('/posts/create', [\App\Http\Controllers\PostController::class, 'create']);

//Route::get('/posts/{id}',[\App\Http\Controllers\PostController::class, 'show'])->name('posts.show');


Route::get('/employee/index', [\App\Http\Controllers\EmployeeController::class, 'index'])->name('employee.index');

Route::get('/employee/edit', [\App\Http\Controllers\EmployeeController::class, 'edit'])->name('employee.edit');

Route::post('/employee/store', [\App\Http\Controllers\EmployeeController::class, 'store'])->name('employee.store');

Route::get('/employee/{id}/edit', [\App\Http\Controllers\EmployeeController::class, 'edit'])->name('employee.edit');

Route::put('/employee/{id}/update', [\App\Http\Controllers\EmployeeController::class, 'update'])->name('employee.update');

Route::delete('/employee{id}/destroy', [\App\Http\Controllers\EmployeeController::class, 'destroy'])->name('employee.destroy');
