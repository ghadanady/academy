<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Course;
use App\Lesson;
use App\Type;
use DB;
use App\Category;
use Carbon\Carbon;

class LessonController extends Controller
{
    protected $uploadDestination = 'images/articles';

    /**
    * Render the all articles pages.
    *
    * @return View
    */
    public function getIndex($id) {

        $lessons = Lesson::where('course_id',$id)->latest()->paginate(15);
        if(request()->ajax()){
            return view('admin.pages.lesson.templates.table',compact('lessons'))->render();
        }

        return view('admin.pages.lesson.index',compact('lessons','id'));
    }

    /**
    * render the add article page.
    *
    * @return View
    */
    public function getAdd($course_id)
    {
      // dd("ddd");
        return view('admin.pages.lesson.add',compact('course_id'));
    }

    /**
    * render the edit article page.
    *
    * @return View
    */
    public function getEdit($id)
    {
        $article = Lesson::find($id);

        if(!$lesson){
           return back()->withWarning("لا يوجد هناك مقال يطابق هذا الرقم لكي يتم تعديله #$id.");
        }

        return view('admin.pages.lesson.edit',compact('article'));
    }

    /**
    * Add new article into database
    * @param  Request $r
    * @return json
    */
    public function postAdd(Request $r)
    {
        // validate data and return errors
        $v = validator($r->all(),[
            'img' => 'required|file|image|max:20000',
            'title' => 'required|min:2',
            'editor1' => 'required|min:2',
            'course_id' => 'required|integer',
            'video' => 'url',
            'active' => 'required|digits_between:0,1',
        ],
        [
            'img.required' => 'تاكد من ان الصوره المستخدمه تم اختيارها بنجاح و حجمها لا يقل عن 20 ميجا بايت.',
            'img.file' => 'تاكد من ان الصوره المستخدمه تم اختيارها بنجاح و حجمها لا يقل عن 20 ميجا بايت.',
            'img.image' => 'تاكد من ان الصوره المستخدمه تم اختيارها بنجاح و حجمها لا يقل عن 20 ميجا بايت.',
            'img.max' => 'تاكد من ان الصوره المستخدمه تم اختيارها بنجاح و حجمها لا يقل عن 20 ميجا بايت.',
            'video.url' => 'رابط الفيديو غير صالح لمشاهده.',
            'title.required' => 'عنوان المقاله مطلويه.',
              'title.min' => 'عنوان المقالة لا يمكن ان تقل عن حرفين.',
            'editor1.min' => 'محتوي المقالة لا يمكن ان تقل عن حرفين.',
            'active.required' => 'حالة المقاله مطلوبه',
            'active.digits_between' => 'حالة المقاله لا يمكن ان تكون قيمه غير فعال او غير فعال.',
        ]);

        // return error msgs if validation is failed
        if($v->fails()){
            return [
                'status' => 'error',
                'title' => 'فشل في الاضافة',
                'msg' => implode('<br>', $v->errors()->all()),
            ];
        }

  
  


        // instanciate new article and save its data
        $article = new Lesson;
        $article->title = $r->title;
        $article->content = $r->editor1;
        $article->slug = $this->generateSlug($r->title);
        $article->course_id = $r->course_id;
        $article->active = $r->active;

        $article->save();

        // if there's video url save it
        if ($r->has('video')) {
            $article->video()->create([
                'url' => $r->video,
            ]);
        }

        // store the image banner for the article
        if($r->hasFile('img') && $r->img->isValid()){
            $stored_path = explode('/', $r->img->store($this->uploadDestination));
            $article->image()->create([
                'name' => end($stored_path)
            ]);
        }




        return [
            'status' => 'success',
            'title' => 'نجاح في الاضافة',
            'msg' => 'تمت عمليه الاضافه بنجاح',
        ];
    }

    /**
    * Edit new article into database
    * @param  Request $r
    * @return json
    */
    public function postEdit($id,Request $r)
    {
        $lesson = Lesson::find($id);

        if(!$lesson){
            return [
                'status' => 'error',
                'title' => 'فشل في التعديل',
                'msg' => "لا يوجد هناك مقال يطابق هذا الرقم لكي يتم تعديله #$id.",
            ];
        }

        // validate data and return errors
        $v = validator($r->all(),[
            'img' => 'file|image|max:20000',
            'title' => 'required|min:2',
            'editor1' => 'required|min:2',
            'tags' => 'required',
            'course_id' => 'required|integer',
            'video' => 'url',
            'active' => 'required|digits_between:0,1',
        ],
        [
            'img.file' => 'تاكد من ان الصوره المستخدمه تم اختيارها بنجاح و حجمها لا يقل عن 20 ميجا بايت.',
            'img.image' => 'تاكد من ان الصوره المستخدمه تم اختيارها بنجاح و حجمها لا يقل عن 20 ميجا بايت.',
            'img.max' => 'تاكد من ان الصوره المستخدمه تم اختيارها بنجاح و حجمها لا يقل عن 20 ميجا بايت.',
            'video.url' => 'رابط الفيديو غير صالح لمشاهده.',
            'title.required' => 'عنوان المقاله مطلويه.',
            'editor1.required' => 'محتوي المقالة مطلوبه',
            'tags.required' => 'الكلمات الدلاليه مطلوبه',
            'title.min' => 'عنوان المقالة لا يمكن ان تقل عن حرفين.',
            'editor1.min' => 'محتوي المقالة لا يمكن ان تقل عن حرفين.',
            'active.required' => 'حالة المقاله مطلوبه',
            'active.digits_between' => 'حالة المقاله لا يمكن ان تكون قيمه غير فعال او غير فعال.',
        ]);

        // return error msgs if validation is failed
        if($v->fails()){
            return [
                'status' => 'error',
                'title' => 'فشل في التعديل',
                'msg' => implode('<br>', $v->errors()->all()),
            ];
        }

        // update article data
        $article->title = $r->title;
        $article->content = $r->editor1;
        $article->course_id = $r->course_id;
        $article->active = $r->active;
        $article->save();

        // if there's video url save it
        if ($r->has('video')) {
            $video = $r->video;
        }else {
            $video = '';
        }
        $article->video()->updateOrCreate([],[
            'url' => $video,
        ]);

        // store the image banner for the article
        if($r->hasFile('img') && $r->img->isValid()){

            // check if the old img exists if though delete it
            $old_img = "{$this->uploadDestination}/{$article->image->name}";
            if(is_file(storage_path("uploads/{$old_img}"))){
                @unlink(storage_path("uploads/{$old_img}"));
            }
            // store new article image
            $stored_path = explode('/', $r->img->store($this->uploadDestination));
            $article->image()->update([
                'name' => end($stored_path)
            ]);
        }



        return [
            'status' => 'success',
            'title' => 'نجاح في التعديل',
            'msg' => 'تمت عمليه التعديل بنجاح',
        ];
    }



    public function postAction($action, Request $r) {
        $state = 0;
        switch ($action) {
            case 'active':
            $state = 1;
            break;
            case 'rejected':
            $action = 'active';
            $state = 0;
            break;
            case 'deleted':
            $action = 'deleted';
            break;
            case 'main':
            $action = 'main';
            break;
            case 'urgent':
            $action = 'urgent';
            break;
            case 'both':
            $action = 'both';
            break;
            case 'none':
            $action = 'none';
            break;
            default :
            $data = ['status' => 'error','title' => 'فشل في التنفيذ', 'msg' =>'هذة العمليه غير مدعومه'];
            return $data;
        }

        if ($r->has('ids')) {
            $ids = $r->input('ids');
            foreach ($ids as $id) {
                $this->_action($id, $action, $state);
            }
            $data = ['status' => 'success','title' => 'نجاح في التنفيذ', 'msg' => 'تم تنفيذ العمليه بنجاح.'];
        } else {
            $data = ['status' => 'warning', 'title' => 'فشل في التنفيذ','msg' => 'قم باختيار علي الاقل صف واحد.'];
        }

        return $data;
    }


    public function getFilter($filter) {
        $lessons = Lesson::latest();
        $lessons = $this->_filter($lessons, $filter)->paginate(15);
        return view('admin.pages.lessons.templates.table',compact('lessons'))->render();
    }

    protected function _filter(&$articles, $filter) {
        switch ($filter) {
            case 'all':
            return $articles;
            case 'active':
            return $articles->where('active', 1);
            case 'rejected':
            return $articles->where('active', 0);
            case 'today':
            return $articles->where('created_at', '>=', Carbon::today()->toDateString());
        }
    }

    protected function generateSlug($title)
    {
        $slug = $temp = slugify($title);
        while(Lesson::where('slug',$slug)->first()){
            $slug = $temp ."-". rand(1,1000);
        }
        return $slug;
    }

    public function getDelete($id) {
        $lesson = Lesson::find($id);
        if (!$lesson) {
            return back()->withError('لا يوجد مقال يطابق هذه البيانات ليتم حذفه.');
        }
        // check if the old img exists if though delete it
        $old_img = "{$this->uploadDestination}/{$lesson->image->name}";
        if(is_file(storage_path("uploads/{$old_img}"))){
            @unlink(storage_path("uploads/{$old_img}"));
        }
        $lesson->tags()->detach();
        $lesson->comments()->delete();
        $lesson->delete();
        return back()->withSuccess('تمت عمليه الحذف بنجاح.');
    }

}
