<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CoursecrudController extends Controller
{
    public function index()
    {
        $category = Category::all();
        $courses = Course::all();
        return view('teachers.course.index', compact('category', 'courses'));
    }


    public function role()
    {
        dd(Auth::user()->roles[0]->name);
    }

    public function create()
    {
        $category = Category::all();
        return view('teachers.course.create',compact('category'));
    }

    public function store(Request $request)
    {
        $data = request()->validate([
            'title' => 'string',
            'info' => 'string',

            'imagelink' => 'image',
            'category_id'=>'int',


        ]);


        $data['courl']="course".time();
        $data["imagelink"] =$this->set_image($data["imagelink"], $data['courl'].".".$data["imagelink"]->extension());
        $data ['author_id'] = Auth::user()->id;

        //dd($data);
        $course= Course::firstOrCreate($data);
        return (redirect()->route('teachers.courses'));
    }



    public function set_image($media, $filename_){
        $filename =$filename_;
        //dump($filename);
        //Сохраняем оригинальную картинку
        $media->move(public_path('images/course_profiles/'),$filename);
        return($filename);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Course  $course)
    {
       // return view('category.show', compact('category'));
        dd("show");
    }

    public function edit(Course  $course)
    {
        return view('category.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course  $course)
    {
        $data = request()->validate([
            'title' => 'string',
            'desc' => 'string',
        ]);


        $course->update(
            $data
        );
        return (redirect()->route('course'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course  $course)
    {
        $course->delete(
        );


        return (redirect()->route('category'));
    }

}
