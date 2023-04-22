<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class LessonscrudController extends Controller
{
    public function index(Request $request)
    {
        $course_id= $request->session()->get('course');
        $course = Course::find($course_id);
         return view('teachers.lessons.index', compact('course'));
    }
}
