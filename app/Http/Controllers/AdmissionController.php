<?php

namespace App\Http\Controllers;

use App\Models\Admission;
use App\Models\Course;
use Illuminate\Http\Request;
use Sudam\SudamSweetAlert\Facades\SudamSweetAlert;

class AdmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admissions = Admission::all();
        return view("admission.index", compact("admissions"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courses = Course::all();
        return view('admission.create', compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        Admission::create([
            "name" => $request->name,
            "email" => $request->email,
            "phone" => $request->phone,
            "course_id" => $request->course
        ]);
        SudamSweetAlert::toast('success', 'Created!');
        return redirect()->route('admission.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $courses = Course::all();
        $admission = Admission::find($id);
        return view('admission.edit', compact("courses", "admission"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Admission::find($id)->update([
            "name" => $request->name,
            "email" => $request->email,
            "phone" => $request->phone,
            "course_id" => $request->course
        ]);
        SudamSweetAlert::toast('success', 'Updated!');
        return redirect()->route('admission.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Admission::find($id)->delete();
        SudamSweetAlert::toast('success', 'Deleted!');
        return redirect()->route('admission.index');
    }
}
