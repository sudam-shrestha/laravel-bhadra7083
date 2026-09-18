<?php

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Sudam\SudamSweetAlert\Facades\SudamSweetAlert;

Route::get("/", function () {
    // return "hello world";
    return view("home");
});

Route::get("/about", function () {
    return view('about');
});


// Course Routes
Route::get("/course/index", function () {
    $courses = Course::all();
    // return $courses;
    return view('course.index', compact("courses"));
});

Route::get("/course/create", function () {
    return view('course.create');
});

// Route::get("/course/edit", function () {
//     return view('course.edit');
// });

Route::post("/course/store", function (Request $request) {
    // return $request;
    Course::create([
        "title" => $request->name,
        "price" => $request->price,
        "description" => $request->description,
    ]);
    SudamSweetAlert::toast('success', 'Created!');
    return redirect("/course/index");
});

Route::get("/course/edit/{id}", function ($id) {
    // return $id;
    $course = Course::find($id);
    return view('course.edit', compact('course'));
});

Route::patch("/course/update/{id}", function (Request $request, $id) {
    // return $request;
    Course::find($id)->update([
        "title" => $request->name,
        "price" => $request->price,
        "description" => $request->description,
    ]);

    SudamSweetAlert::toast('success', 'Updated!');
    return redirect("/course/index");
});



Route::delete("/course/delete/{id}", function ($id) {
    // return $request;
    Course::find($id)->delete();
    SudamSweetAlert::toast('success', 'Deleted!');
    return redirect("/course/index");
});
