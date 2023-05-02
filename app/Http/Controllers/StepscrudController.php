<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Step;
use App\Models\Types;
use App\Models\Videostep;
use Illuminate\Http\Request;

class StepscrudController extends Controller
{
    public function create(Request $request)
    {
       // $course_id = $request->session()->get('course');
        $lesson_id = $request->session()->get('lesson');
        $steps = Step::find($lesson_id);
        $types= Types::all();
        return view('teachers.steps.create', compact('steps','types'));
    }

    public function store(Request $request)
    {
        $data = request()->validate([
            'title' => 'string',
            'info' => 'string',

            'type' => 'string',
        ]);

        $data['lesson_id']=$request->session()->get('lesson');

        Step::firstOrCreate(
            $data
        );
        return (redirect()->route('teachers.lessons.show',$request->session()->get('lesson')));
    }

    public function createcontent(Step $step)
    {
        $content = 'teachers.steps.includes.quest';
        switch ($step->type)
        {
            case "Video":
                $content = 'teachers.steps.includes.video';
                break;

            case "Quest":
                $content = 'teachers.steps.includes.quest';
                break;

            case "Image":
                $content = 'teachers.steps.includes.image';
                break;

            case "Link":
                $content = 'teachers.steps.includes.link';
                break;

            case "Test":
                $content = 'teachers.steps.includes.test';
                break;

            case "Text":
                $content = 'teachers.steps.includes.text';
                break;


        }


        return view($content, compact('step'));
    }


    public function storecontent(Request $request, Step $step)
    {
        $data = request()->validate([
            'link' => 'string',
            'info' => 'string',


        ]);

        $data['steps_id']=$step->id;

        Videostep::firstOrCreate(
            $data
        );
        return (redirect()->route('teachers.lessons.show',$request->session()->get('lesson')));
    }
}
