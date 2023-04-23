<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonscrudController extends Controller
{
    public function index(Request $request)
    {
        $course_id= $request->session()->get('course');
        $course = Course::find($course_id);
        return view('teachers.lessons.index', compact('course'));
    }

    public function create(Request $request)
    {
        $course_id= $request->session()->get('course');
        $course = Course::find($course_id);
        return view('teachers.lessons.create',compact('course'));
    }

    public function store(Request $request, Lesson $lesson)
    {
        $data = request()->validate([
            'title' => 'string',
            'info' => 'string',
            'course_id'=>'int',
            'is_active'=>'int',
        ]);
        $data['course_id']=$request->session()->get('course');
        $data['is_active']=0;


        $lesson=Lesson::firstOrCreate(
            $data
        );
        return (redirect()->route('teachers.lessons'));
        
    }
}
