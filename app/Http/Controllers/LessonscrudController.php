<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonscrudController extends Controller
{
    public function index(Request $request)
    {
        $course_id = $request->session()->get('course');
        $course = Course::find($course_id);
        return view('teachers.lessons.index', compact('course'));
    }

    public function create(Request $request)
    {
        $course_id = $request->session()->get('course');
        $course = Course::find($course_id);
        return view('teachers.lessons.create', compact('course'));
    }

    public function store(Request $request, Lesson $lesson)
    {
        $data = request()->validate([
            'title' => 'string',
            'info' => 'string',
            'course_id' => 'int',
            'is_active' => 'int',
        ]);
        $data['course_id'] = $request->session()->get('course');
        $data['is_active'] = 0;


        $lesson = Lesson::firstOrCreate(
            $data
        );
        return (redirect()->route('teachers.lessons'));

    }


    /* опубликовать урок (или снять с публикации*/
    public function activate(Lesson $lesson)
    {

        if ($lesson['is_active'] == 0) //если неактивен
            $lesson['is_active'] = 1; // сделать активным
        else $lesson['is_active'] = 0; //иначе сделать неактивным

        $lesson->update();
        return (redirect()->route('teachers.lessons.show', $lesson));

    }
    public function show(Lesson  $lesson)
    {
        // return view('category.show', compact('category'));
        //dd("show");
        if ($lesson->is_active==0)
        {
            $active_color='danger';
            $active_status='неопубликован';
            $active_button = 'Опубликовать';
        }
        else
        {
            $active_color='success';
            $active_status='опубликован';
            $active_button = 'Снять с публикации';
        }
        return  view('teachers.lessons.show', compact('lesson','active_color','active_status','active_button'));
    }




}
