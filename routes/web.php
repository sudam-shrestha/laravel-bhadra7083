<?php

use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    // return "hello world";
    return view("home");
})->name("home");

Route::get("/about", function () {
    return view('about');
})->name('about');  


// Course Routes
Route::get("/course/index", [CourseController::class, "index"]);
Route::get("/course/create", [CourseController::class, "create"]);
Route::post("/course/store", [CourseController::class, "store"]);
Route::get("/course/edit/{id}", [CourseController::class, "edit"]);
Route::patch("/course/update/{id}", [CourseController::class, 'update']);
Route::delete("/course/delete/{id}", [CourseController::class, "delete"])->name('course.delete');


// Admission Route
Route::resource("/admission", AdmissionController::class)->names("admission");
