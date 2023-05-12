<?php

namespace App\Http\Controllers;

use App\Models\Step;
use Illuminate\Http\Request;

class StepsController extends Controller
{
    public function video(Step $step)
    {
        return view('steps.video', compact('step'));
    }

    public function quest(Step $step)
    {
        return view('steps.quest', compact('step'));
    }

    public function image(Step $step)
    {
        return view('steps.image', compact('step'));
    }

    public function text(Step $step)
    {
        return view('steps.text', compact('step'));
    }

    public function test(Step $step)
    {
        return view('steps.test', compact('step'));
    }

    public function link(Step $step)
    {
        return view('steps.video', compact('step'));
    }
}
