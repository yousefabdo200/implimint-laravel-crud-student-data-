<?php

use App\Http\Controllers\Admin\adminController;
use App\Http\Controllers\Students\StudentController;
use Illuminate\Routing\RouteRegistrar;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\Group;

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

Route::get('/', [adminController::class,'index'])->name('index');
Route::post('log',[adminController::class,'login'])->name('admin.log');
Route::get('logout',[adminController::class,'logout'])->name('admin.logout');


Route::group(['middleware'=>('Admin_Auth')],function()
{
    Route ::get('dashboard',[StudentController::class,'view_data'])->name('view_data');
    Route::get('view/{id}',[StudentController::class,'view_students'])->name('view_students');
    Route ::get('newstudent/{id}',[StudentController::class,'new_student'])->name('new_student');
    Route::post('addstudent',[StudentController::class,'add_student'])->name('add_student');
    Route ::get('edit/{id}',[StudentController::class,'edit_student'])->name('edit');
    Route ::post('update/{id}',[StudentController::class,'update_student'])->name('update');
    Route ::get('delete/{id}',[StudentController::class,'delete_student'])->name('delete');


/*
Route ::get('year',function()
{
    return view("year");
});*/

    
});
