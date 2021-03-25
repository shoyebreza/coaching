<?php

use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\ComponentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\QualificationController;
use App\Http\Controllers\SubscriptionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web Routes for your application. These
| Routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::Routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/course', function () {
    return view('ourcourse');
});


Route::get('/admission',[AdmissionController::class, 'index'])->name('admission');
Route::get('/districts',[AdmissionController::class,'get_district'])->name('get_district');







// Route::get('/district',[ComponentController::class,'district'])->name('district');
// Route::post('/create/district',[ComponentController::class,'create_district'])->name('create_district');
// Route::get('/district/update/{id}',[ComponentController::class,'edit_district'])->name('edit_district');
// Route::patch('/update/district/{id}',[ComponentController::class,'update_district'])->name('update_district');
// Route::delete('/district/delete/{id}',[ComponentController::class,'delete_district'])->name('delete_district');


Route::get('/batch',[ComponentController::class,'batch'])->name('batch');
Route::post('/create/batch',[ComponentController::class,'batch_store'])->name('batch_store');
Route::get('/batch/edit/{id}',[ComponentController::class,'batch_edit'])->name('batch_edit');
Route::patch('/batch/update/{id}',[ComponentController::class,'batch_update'])->name('batch_update');
Route::delete('/batch/delete/{id}',[ComponentController::class,'batch_delete'])->name('batch_delete');



Route::get('/branch',[BranchController::class,'index'])->name('branch');
Route::post('/branch_store', [BranchController::class,'branch_store'])->name('branch_store');
Route::get('/branch/edit/{id}',[BranchController::class,'branch_edit'])->name('branch_edit');
Route::PATCH('/branch/update/{id}',[BranchController::class,'branch_update'])->name('branch_update');
Route::delete('/branch/delete/{id}',[BranchController::class,'branch_delete'])->name('branch_delete');


Route::get('/course',[CourseController::class,'index'])->name('course');
Route::post('/course/store',[CourseController::class,'course_store'])->name('course_store');
Route::get('/course/edit/{id}',[CourseController::class,'course_edit'])->name('course_edit');
Route::patch('/course/update/{id}',[CourseController::class,'course_update'])->name('course_update');
Route::delete('/course/delete/{id}',[CourseController::class,'delete_course'])->name('delete_course');


Route::get('/subscrip', [SubscriptionController::class,'subscrip'])->name('subscrip');
Route::post('/subscrip/store',[SubscriptionController::class,'subscrip_store'])->name('subscrip_store');
Route::get('/subscrip/edit/{id}',[SubscriptionController::class,'edit_subscrib'])->name('edit_subscrib');
Route::patch('/subs/update/{id}',[SubscriptionController::class,'update_subs'])->name('update_subs');
Route::delete('subscrib/delete/{id}',[SubscriptionController::class,'delete_subscrip'])->name('delete_subscrip');

Route::Resource('qualification', QualificationController::class);



