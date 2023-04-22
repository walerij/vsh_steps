<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LessonscrudController extends Controller
{
    public function index(Request $request)
    {
        $course= $request->session()->get('course');
        dd('уроки курса '.$course);
    }
}
