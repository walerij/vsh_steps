<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonsController extends Controller
{
    public function show(Lesson $lesson)
    {
        return view('lesson.show', compact('lesson'));

    }
}
