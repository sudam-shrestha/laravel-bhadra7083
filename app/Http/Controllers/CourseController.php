<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Sudam\SudamSweetAlert\Facades\SudamSweetAlert;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        // return $courses;
        return view('course.index', compact("courses"));
    }

    public function create()
    {
        return view('course.create');
    }

    public function store(Request $request)
    {
        // return $request;
        Course::create([
            "title" => $request->name,
            "price" => $request->price,
            "description" => $request->description,
        ]);
        SudamSweetAlert::toast('success', 'Created!');
        return redirect("/course/index");
    }

    public function edit($id)
    {
        // return $id;
        $course = Course::find($id);
        return view('course.edit', compact('course'));
    }

    public function update(Request $request, $id)
    {
        // return $request;
        Course::find($id)->update([
            "title" => $request->name,
            "price" => $request->price,
            "description" => $request->description,
        ]);

        SudamSweetAlert::toast('success', 'Updated!');
        return redirect("/course/index");
    }


    public function delete($id)
    {
        // return $request;
        Course::find($id)->delete();
        SudamSweetAlert::toast('success', 'Deleted!');
        return redirect("/course/index");
    }
}
