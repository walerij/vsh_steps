<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return "Индекс";
    }


    public function courses()
    {
        //$courses = Course::all();
        return (redirect()->route('courses',0));
    }

    public function vebinars()
    {
        return view("home.vebinars");
    }

    public function robosharp()
    {
        return view("home.robosharp");
    }
}
