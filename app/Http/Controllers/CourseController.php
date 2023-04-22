<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;
use PHPUnit\Exception;
use function PHPUnit\Framework\exactly;


class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all();
        $courses = $category->courses;
        return view('course.index', compact('category', 'courses'));
    }


    public function courses($getcats=0)
    {

        $category = Category::all(); //получаем список всех категорий для передачи в view

        try {
            if($getcats<1) //если пришел 0, то категории надо выбрать все

                $courses = Course::where('is_active',1)->get();

            else// иначе - если какое-то число пришло

                $courses = Course::where('category_id',$getcats)->where('is_active',1)->get(); //выборка по category_id равного этому числу
        }

        catch (Exception $ex)
        {
            $courses = Course::all();

        }



        return view('course.index', compact('category', 'courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
