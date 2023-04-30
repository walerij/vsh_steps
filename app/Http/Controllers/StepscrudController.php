<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Step;
use App\Models\Types;
use Illuminate\Http\Request;

class StepscrudController extends Controller
{
    public function create(Request $request)
    {
        $course_id = $request->session()->get('course');
        $lesson_id = $request->session()->get('lesson');
        $steps = Step::find($lesson_id);
        $types= Types::all();
        return view('teachers.steps.create', compact('steps','types'));
    }

    public function store(Request $request)
    {
        dd('store');
    }
}
