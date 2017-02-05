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
    	$categories=Category::all();
    	$instructores=Instructor::all();
        return view('admin.pages.courses.add',compact('categories','instructores'));
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
            
        ],
        [
        "name.required"=>"من فضللك ادخل اسم الدورة",
        "time.required"=>"من فضللك ادخل ميعلد الدورة",
        "period.required"=>"من فضللك ادخل مدة الدورة",
        "time.required"=>"من فضللك ادخل ميعلد الدورة",
        "lecture_number.required"=>"من فضللك ادخل عدد المحاضرات ",
        "student_number.required"=>"من فضللك ادخل عدد الطلاب",
        

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
     * Validate and update current user.profile.
     *
     * @param  Request $r
     * @return json
     */
    public function postProfile(Request $r) {

        $v = validator($r->all(), [
            "name" => 'required|min:2',
            "username" => 'required|min:2|unique:users,username,'.Auth::id(),
            "gender" => 'required',
            "job" => 'required|min:2',
            "address" => 'required|min:2',
            "phone" => 'required|min:10|numeric',
            "national_id" => 'required|min:14|numeric',
            "role_id" => 'numeric',
            "avatar" => 'image|mimes:png,gif,jpg,jpeg|max:20000',
            "email" => 'required|email|unique:users,email,'.Auth::id(),
            "password" => 'password|required',
            "newpassword" => 'password|min:8',
            "repassword" => 'same:newpassword',
        ]);


        // setting custom attribute names
        $v->setAttributeNames([
            "name" => trans('admin_global.users_name'),
            "username" => trans('admin_global.users_username'),
            "email" => trans('admin_global.users_email'),
            "gender" => trans('admin_global.users_gender'),
            "job" => trans('admin_global.users_job'),
            "national_id" => trans('admin_global.users_national'),
            "phone" => trans('admin_global.users_phone'),
            "address" => trans('admin_global.btn_attach'),
            "avatar" => trans('admin_global.btn_attach'),
            "password" => trans('admin_global.users_password'),
            "repassword" => trans('admin_global.users_repassword'),
        ]);


        // if the validation has been failed return the error msgs
        if ($v->fails()) {
            return msg('error.edit',['msg' => implode('<br>', $v->errors()->all())]);
        }

        // if the new password isn't empty make sure that its confirmation not empty
        if(!empty($r->newpassword) && empty($r->repassword)){
            return msg('error.edit',['msg' => trans('admin_global.validation_repassword')]);
        }


        $user = Auth::user();
        // check if the password is correct
        if(!Hash::check($r->password , $user->password)){
            return msg('error.edit',['msg' => 'The password is incorrect.']);
        }

        // if there's new password update it and if not keep the old one
        if(!empty($r->newpassword)){
            $r->password = bcrypt($r->newpassword);
        }else {
            $r->password = $user->password;
        }

        // set the new values for update
        $user->name = $r->name;
        $user->email = $r->email;
        $user->username = $r->username;
        $user->gender = $r->gender;
        $user->age = $r->age;
        $user->phone = $r->phone;
        $user->job = $r->job;
        $user->address = $r->address;
        $user->password = $r->password;
        $user->national_id = $r->national_id;

        if($user->isAdmin() && $r->role_id){
            $user->role_id = $r->role_id;
        }

        // validate if there's an image remove the old one and  save the new one.
        $destination = storage_path('uploads/images/avatars');
        if($r->avatar){

            if($user->image){
                @unlink("{$destination}/{$user->image->name}");
            }

            $avatar = microtime(time()) . "_" . $r->avatar->getClientOriginalName();
            $user->image()->updateOrCreate([],[
                'name' => $avatar
            ]);

            $r->avatar->move($destination,$avatar);
        }

        // update the user data in the database.
        if ($user->save()) {
            return msg('success.edit',['msg' => 'User updated successfully.']);
        }
        return msg('error.edit',['msg' => 'There\'re some errors, please try again later.']);
    }
    /**
     * Validate and update user that has the passed id.
     *
     * @param  Request $r
     * @return json
     */
    public function postEdit(Request $r) {

        if(!$r->id){
            return msg('error.edit',['msg' => 'The user id is required.']);
        }

        $user = User::find($r->id);

        if(!$user){
            return msg('error.edit',['msg' => 'There is no user with id #'.$r->id.'.']);
        }

        $v = validator($r->all(), [
            "name" => 'required|min:2',
            "username" => 'required|min:2|unique:users,username,'.$user->id,
            "gender" => 'required',
            "job" => 'required|min:2',
            "address" => 'required|min:2',
            "phone" => 'required|min:10|numeric',
            "national_id" => 'required|min:14|numeric',
            "role_id" => 'numeric',
            "avatar" => 'image|mimes:png,gif,jpg,jpeg|max:20000',
            "email" => 'required|email|unique:users,email,'.$user->id,
            "newpassword" => 'min:8',
            "repassword" => 'same:newpassword',
        ]);

        // setting custom attribute names
        $v->setAttributeNames([
            "name" => trans('admin_global.users_name'),
            "username" => trans('admin_global.users_username'),
            "email" => trans('admin_global.users_email'),
            "gender" => trans('admin_global.users_gender'),
            "job" => trans('admin_global.users_job'),
            "national_id" => trans('admin_global.users_national'),
            "phone" => trans('admin_global.users_phone'),
            "address" => trans('admin_global.btn_attach'),
            "avatar" => trans('admin_global.btn_attach'),
            "password" => trans('admin_global.users_password'),
            "repassword" => trans('admin_global.users_repassword'),
        ]);

        // if the validation has been failed return the error msgs
        if ($v->fails()) {
            return msg('error.edit',['msg' => implode('<br>', $v->errors()->all())]);
        }

        // if the new password isn't empty make sure that its confirmation not empty
        if(!empty($r->newpassword) && empty($r->repassword)){
            return msg('error.edit',['msg' => trans('admin_global.validation_repassword')]);
        }

        // if there's new password update it and if not keep the old one
        if(!empty($r->newpassword)){
            $r->password = bcrypt($r->newpassword);
        }else {
            $r->password = $user->password;
        }

        // set the new values for update
        $user->name = $r->name;
        $user->email = $r->email;
        $user->username = $r->username;
        $user->gender = $r->gender;
        $user->age = $r->age;
        $user->phone = $r->phone;
        $user->job = $r->job;
        $user->address = $r->address;
        $user->password = $r->password;
        $user->national_id = $r->national_id;
        $user->role_id = $r->role_id;

        // validate if there's an image remove the old one and  save the new one.
        $destination = storage_path('uploads/images/avatars');
        if($r->avatar){

            $avatar = microtime(time()) . "_" . $r->avatar->getClientOriginalName();

            if($user->image){
                @unlink("{$destination}/{$user->image->name}");
            }

            $user->image()->updateOrCreate([],[
                'name' => $avatar
            ]);

            $r->avatar->move($destination,$avatar);
        }

        // update the user data in the database.
        if ($user->save()) {
            return msg('success.edit',['msg' => 'User updated successfully.']);
        }
        return msg('error.edit',['msg' => 'There\'re some errors, please try again later.']);
    }

    public function postInfo($id)
    {
        $user = User::find($id);

        if(!$user){
            return  ['status' => false, 'data' => 'There is no user with id #'.$id.'.'];
        }

        $user->gender_text = ($user->gender === 'male') ? 'ذكر' : 'انثي';
        $user->alias = $user->role->alias;
        $user->avatar = $user->image ? $user->image->name : 'default.jpg';

        return  ['status' => true, 'data' => $user];
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

        $user = User::find($id);

        if(!$user){
            return redirect()->back()->with('m', 'User with id #'.$id.' not found');
        }

        if(!empty($user->image)){
            @unlink(storage_path('uploads/images/avatars' . $user->image->name));
        }

        $user->delete();
        return redirect()->back()->with('m', 'User has been deleted successfully');
    }

}
