<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return "Индекс";
    }


    public function courses()
    {
        return view("home.courses");
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
