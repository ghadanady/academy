<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Course;
use App\Category;
use App\Instructor;
use Hash;
use Auth;
use App\Image;


class CourseController extends Controller
{
     /**
     * render and paginate the users page.
     *
     * @return string
     */
    public function getIndex() {
        if(auth()->user()->isNormal()){
            return redirect('admin')->withWarning(trans('admin_global.denied_page'));
        }
        $courses = Course::paginate(15);
        return view('admin.pages.courses.all', compact('courses'));
    }

    /**
     * show the user profile page..
     *
     * @return string
     */
    public function getAdd(){
    	//$categories=Category::all();
    	//$instructores=Instructor::all();
        return view('admin.pages.courses.add');
    }

    /**
     * validate and create new user.
     *
     * @param  Request $r
     * @return json
     */
    public function postAdd(Request $r) {



        $v = validator($r->all(), [
            "name" => 'required|min:2',
            "lecture_number" => 'required',
            "student_number" => 'required',
            "time" => 'required',
            "period" => 'required',
            //"body" => 'required',
            
        ],
        [
        "name.required"=>"من فضللك ادخل اسم الدورة",
        "time.required"=>"من فضللك ادخل ميعلد الدورة",
        "period.required"=>"من فضللك ادخل مدة الدورة",
        "time.required"=>"من فضللك ادخل ميعلد الدورة",
        "lecture_number.required"=>"من فضللك ادخل عدد المحاضرات ",
        "student_number.required"=>"من فضللك ادخل عدد الطلاب",
        //"body.required"=>"قم باخال نبذه عن الكورس",
        

        ]
        );
        // setting custom attribute names
        $v->setAttributeNames([
            "name" => "الاسم ",
            "body" => "المحتوى",
            
        ]);

        // if the validation has been failed return the error msgs
        if ($v->fails()) {
            return msg('error.save',['msg' => implode('<br>', $v->errors()->all())]);
        }

        $course = new Course($r->except(['_token']));
        $course->slug= $this->generateSlug($r->name);
        $course->lessons= json_encode($r->q);
        $course->body= $r->editor1;
        $course->lessons_learned= $r->editor2;
        $course->aim= $r->editor3;
        


        // save the new user data
        if ($course->save()) {

            // validate if there's an image to save it
            $destination = storage_path('uploads/images/course');
            if($r->avatar){

                $avatar = microtime(time()) . "_" . $r->avatar->getClientOriginalName();
                $image = $course->image()->create([
                    'name' => $avatar
                ]);

                $r->avatar->move($destination,$avatar);
            }

            return msg('success.save',['msg' => 'تم اضافه الدورة بنجاح ']);
        }
        return msg('error.save',['msg' => 'حدث خطأ اتناء الاضافه ']);
    }


    protected function generateSlug($title)
    {
        $slug = $temp = slugify($title);
        while(Course::where('slug',$slug)->first()){
            $slug = $temp ."-". rand(1,1000);
        }
        return $slug;
    }

    /**
     * Validate and update user that has the passed id.
     *
     * @param  Request $r
     * @return json
     */
    public function postEdit(Request $r) {

 

        $course = Course::find($r->id);

        if(!$course){
            return msg('error.edit',['msg' => 'لا يوجد ]دورة  '.$r->id.'.']);
        }



        $v = validator($r->all(), [
            "name" => 'required|min:2',
            "lecture_number" => 'required',
            "student_number" => 'required',
            "time" => 'required',
            "period" => 'required',
        ]);

        // setting custom attribute names
        
        $v->setAttributeNames([
           "name.required"=>"من فضللك ادخل اسم الدورة",
           "time.required"=>"من فضللك ادخل ميعلد الدورة",
           "period.required"=>"من فضللك ادخل مدة الدورة",
           "lecture_number.required"=>"من فضللك ادخل عدد المحاضرات ",
           "student_number.required"=>"من فضللك ادخل عدد الطلاب",
        ]);

        // if the validation has been failed return the error msgs
        if ($v->fails()) {
            return msg('error.save',['msg' => implode('<br>', $v->errors()->all())]);
        }


    
       $course->name= $r->name;
       $course->body= $r->body;
       $course->cat_id= $r->cat_id;
       $course->instarctor_id= $r->instarctor_id;
       $course->lecture_number= $r->lecture_number;
       $course->student_number= $r->student_number;
       $course->time= $r->time;
       $course->lessons= json_encode($r->q);
       $course->period= $r->period;
       $course->lessons_learned= $r->lessons_learned;
       $course->aim= $r->aim;
       $course->active= $r->active;
       $course->body= $r->editor1;
       $course->lessons_learned= $r->editor2;
       $course->aim= $r->editor3;
 
 


        // validate if there's an image remove the old one and  save the new one.
        $destination = storage_path('uploads/images/course');
        if($r->avatar){

            $avatar = microtime(time()) . "_" . $r->avatar->getClientOriginalName();

            if($course->image){
                @unlink("{$destination}/{$course->image->name}");
            }

            $course->image()->updateOrCreate([],[
                'name' => $avatar
            ]);

            $r->avatar->move($destination,$avatar);
        }

        // update the user data in the database.
        if ($course->save()) {
            return msg('success.edit',['msg' => 'تم نعديل  بيانات الدورة بنجاح ']);
        }
        return msg('error.edit',['msg' => 'There\'re some errors, please try again later.']);
    }

    public function postInfo($id)
    {
        $course = Course::find($id);
        if($course->lessons_learned) $course->lessons_learned=explode('-',$course->lessons_learned);
        if($course->aim) $course->aim=explode('-',$course->aim);
        if($course->lessons) $course->lessons=json_decode($course->lessons,true);
        $lessons_count=count($course->lessons['qtitle']);

         return view('admin.pages.courses.edit',compact('course','relatedCources','lessons_count'));
    }
    /**
     * delete a user account if its id is passed
     * if not it will delete the current user
     * @param  int $id
     * @return Redirect
     */
    public function getDelete($id = null) {

        if(!$id){
            $id = Auth::id();
            Auth::logout();
        }

        $course = Course::find($id);

        if(!$course){
            return redirect()->back()->with('m', 'User with id #'.$id.' not found');
        }

        if(!empty($course->image)){
            @unlink(storage_path('uploads/images/avatars' . $user->image->name));
        }

        $course->delete();
        return redirect()->back()->with('m', 'User has been deleted successfully');
    }

}
