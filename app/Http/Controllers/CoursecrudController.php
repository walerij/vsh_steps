<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class CoursecrudController extends Controller
{
    public function index()
    {
        $category = Category::all();
        $courses = Course::all();
        return view('teachers.course.index', compact('category','courses'));
    }

    public function create()
    {
        return view('teachers.course.create');
    }

    public function store(Request $request)
    {
        $data = request()->validate([
            'title' => 'string',
            'desc' => 'string',
        ]);
        //dd($data);
        $category= Course::Create($data);
        return (redirect()->route('category'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Course  $course)
    {
       // return view('category.show', compact('category'));
        dd("show");
    }

    public function edit(Course  $course)
    {
        return view('category.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course  $course)
    {
        $data = request()->validate([
            'title' => 'string',
            'desc' => 'string',
        ]);


        $course->update(
            $data
        );
        return (redirect()->route('course'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course  $course)
    {
        $course->delete(
        );


        return (redirect()->route('category'));
    }

}
