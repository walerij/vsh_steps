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
        //dd("show");
        if ($course->is_active==0)
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
        return  view('teachers.course.show', compact('course','active_color','active_status','active_button'));
    }

    public function edit(Course  $course)
    {
        return view('category.edit', compact('course'));
    }


/*переход к урокам курса*/
    public function lessons(Request $request, Course  $course)
    {
        //запись текущего курса (id курса ) в сессию
        $request->session()->put('course', $course['id']);
        //переход к нужному действию контроллера lessonscrud - здесь пока не оно
        return (redirect()->route('teachers.lessons'));
    }



/*сохранение изменений курса*/
    public function update(Request $request, Course  $course)
    {
        $data = request()->validate([
            'title' => 'string',
            'desc' => 'string',
        ]);


        $course->update(
            $data
        );
        return (redirect()->route('teachers.courses'));
    }

    /*сделать курс активным - опубликовать курс (или снять с публикации*/
    public function activate(Request $request, Course  $course)
    {

        if($course['is_active']==0) //если неактивен
            $course['is_active']=1; // сделать активным
        else $course['is_active']=0; //иначе сделать неактивным

        $course->update(
        );
        return (redirect()->route('teachers.course.show', $course));
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
