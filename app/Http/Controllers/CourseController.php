<?php

namespace App\Http\Controllers;

use App\Course;
use App\User;
use App\UserCourse;
use Auth;
use Illuminate\Http\Request;
use Str;
use Stripe;
use Validator;
use Carbon\Carbon;
use App\Setting;
use App\Lesson;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('auth',['except' => ['login','setup','setupSomethingElse']]);
    }

    public function index()
    {
        return view('course.create');
    }

    public function createCourse(Request $request)
    {



        $validator = Validator::make($request->all(), [
            'course_title' => 'required|unique:courses',
            'course_category' => 'required',
            'course_image' => 'required',
            'course_description' => 'required',
            'price' => 'sometimes|required',
            'course_type' => 'required',
            // 'addmore.*.lesson_title' => 'required',
            // 'addmore.*.lesson' => 'required',
            'course_image' => 'required|image|mimes:jpeg,png,jpg',

        ]);

        if ($validator->fails()) {
            return redirect('/create/course')
                ->withErrors($validator)
                ->withInput();
        }

        //checking user Connect account
        if($request->course_type=='premium'){
            if(empty(Auth::user()->connect_account)){
                return redirect()->back()->with('permissionerror','Please Connect Your Stripe Account First')
                ->withErrors($validator)
                ->withInput();;
            }

        }


        if ($request->file('course_image')) {

            $image = $request->file('course_image');

            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = 'assets/backend/course/images';
            $image->move($destinationPath, $name);

        }
        try{
        $course = new Course;
        $course->user_id = Auth::user()->id;
        $course->course_title = $request->course_title;
        $course->course_category = $request->course_category;
        $course->course_description = $request->course_description;
        $course->course_type = $request->course_type;
        $course->course_image = $destinationPath . '/' . $name;
        $course->price = $request->price ? $request->price : null;
        $course->slug = Str::slug($request->course_title, '-');
        $course->creater_name = Auth::user()->name;
        $course->save();
         //saving lesson title and video
        // $userData = count($request->addmore);
        // if ($userData > 0) {
        //     $lesson = new Lesson;
        //     $destinationPath = 'assets/frontend/lesson_video';
        //     for ($i=0; $i < $userData; $i++) {
        //     if (trim($request->addmore[$i]['lesson_title'] != '') && trim($request->addmore[$i]['lesson_title'] != '')) {
        //         $lesson_title   = $request->addmore[$i]['lesson_title'];
        //         $lesson_video  = $request->addmore[$i]['lesson'];
        //         $name = time() . '.' .  $lesson_video->getClientOriginalExtension();
        //         $lesson->lesson_title = $lesson_title;
        //         $lesson->lesson = $destinationPath.'/'.$name;
        //         $lesson->course_id = $course->id;
        //         if($lesson->save()){

        //             $lesson_video->move($destinationPath, $name);
        //         }
        //     }
        //     }
        // }
        if( $request->file('lesson')){
            $lesson = new Lesson;
            $lesson_video = $request->file('lesson');
            $destinationPath = 'assets/frontend/lesson_video';
            $name = time() . '.' .  $lesson_video->getClientOriginalExtension();
            $lesson->lesson_title = $request->lesson_title;
            $lesson->lesson = $destinationPath.'/'.$name;
            $lesson->course_id = $course->id;
            if($lesson->save()){

                $lesson_video->move($destinationPath, $name);
            }

        }

        return redirect()->back()->with('message', 'Course Added Successfully');
        }catch (Exception $e) {
            echo 'Message is:' . $e->getError()->message . '\n';
        }

    }

    public function courseDetail(Course $course)
    {
        if($course->course_type=="premium"){
             //check current user purchase code;
                if (UserCourse::where('user_id', Auth::user()->id)
                ->where('course_id', $course->id)->exists()) {
                $status = "true";
                return view('course.course_detail', compact('course', 'status'));
            } else {
                $status = "false";
                return view('course.course_detail', compact('course', 'status'));
            }
        }else{
            return redirect()->route('price.plan');
        }


    }

    public function freecourseDetail(Course $course)
    {
        if($course->course_type == "free"){
            return view('course.freecourse_detail',compact('course'));
        }
        else{
           return redirect()->route('price.plan');
        }


    }

    public function subscribeCourse(Course $course){
       if($course->course_type == "subscribe"){
            if(Auth::user()->end_at >= Carbon::now()){
                $status = "true";
                return view('course.subscribe_cousedetail',compact('course','status'));
        }
        else{
            $status = "false";
            return view('course.subscribe_cousedetail',compact('course','status'));
        }
       }else{
           return redirect()->route('price.plan');
       }
    }

    public function watchCourse(Course $course)
    {

        $lesson = Lesson::where('course_id',$course->id)->first();

        return view('course.course_list', compact('course','lesson'));
    }

    public function buyCourse(Course $course)
    {

        return view('course.purchase_course', compact('course'));
    }

    public function coursePurchased(Request $request)
    {
        if (Course::where('id', $request->course_id)->exists()) {

            $price = Course::select('price', 'course_title')->where('id', $request->course_id)->first();
            $percentage = Setting::select('app_fee')->first();
            $totalPrice = $price->price;

            $app_fee = ($percentage->app_fee / 100) *  $totalPrice;

            try {


               \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

                $payment_intent = \Stripe\PaymentIntent::create([
                    'payment_method_types' => ['card'],
                    'amount' => $price->price*100,
                    'currency' => 'GBP',
                    'application_fee_amount' =>  $app_fee*100,

                  ], ['stripe_account' => Auth::user()->connect_account]);


                    $purchase = new UserCourse;
                    $purchase->user_id = Auth::user()->id;
                    $purchase->course_id = $request->course_id;
                    $purchase->charge_id =$payment_intent->id;
                    $purchase->price = $price->price;
                    $purchase->purchase_date = date('Y-m-d H:i:s');
                    $purchase->status = 'ds';
                    $purchase->balance_transaction ='oiopwuwq7892379283lmdkjoi73';
                    $purchase->user_id = Auth::user()->id;
                    if ($purchase->save()) {
                        return redirect()->route('paid.course', $request->course_slug)->with('purchase_course', 'Hi!You Have Purchased Course Successfully.Click watch button');
                    }


            } catch (Stripe\Stripe\Exception\CardException $e) {
                echo 'Message is:' . $e->getError()->message . '\n';
            } catch (\Stripe\Exception\RateLimitException $e) {
                echo 'Message is:' . $e->getError()->message . '\n';
            } catch (\Stripe\Exception\InvalidRequestException $e) {
                echo 'Message is:' . $e->getError()->message . '\n';
            } catch (\Stripe\Exception\AuthenticationException $e) {
                echo 'Message is:' . $e->getError()->message . '\n';
            } catch (\Stripe\Exception\ApiConnectionException $e) {
                echo 'Message is:' . $e->getError()->message . '\n';
            } catch (\Stripe\Exception\ApiErrorException $e) {
                echo 'Message is:' . $e->getError()->message . '\n';
            } catch (Exception $e) {
                echo 'Message is:' . $e->getError()->message . '\n';
            }

        } else {
            dd("403");
        }

    }

    public function myCourses()
    {
        $courses = User::find(Auth::user()->id)->courses()->paginate('9');
        return view('course.my_courses', compact('courses'));
    }

    public function  manageCources(){
        $courses = Course::with('lesson')->where('user_id',Auth::user()->id)->paginate('9');
        return view('course.manage_courses',compact('courses'));
    }
    public function editCourseform($id){
         $course = Course::with('lesson')->where('id',$id)->first();
        return view('course.edit_course',compact('course'));
    }
    public function editCourse(Request $request){
        $validator = Validator::make($request->all(), [
            'course_title' => 'required',
            'course_category' => 'required',
            'course_description' => 'required',
            'price' => 'sometimes|required',
            'course_type' => 'required',
            // 'addmore.*.lesson_title' => 'required',
            // 'addmore.*.lesson' => 'required',


        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        if ($request->file('course_image')) {

            $image = $request->file('course_image');

            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = 'assets/backend/course/images';
            $image->move($destinationPath, $name);
            $image_name =   $destinationPath.'/'. $name ;
        }else{

            $destinationPath = 'assets/backend/course/images';
            $image = Course::select('course_image')->where('id',$request->course_id)->first();
            $image_name =   $image->course_image;

        }
        if ($request->file('lesson')) {

            $lesson_video = $request->file('lesson');

            $name = time() . '.' . $lesson_video ->getClientOriginalExtension();
            $destinationPath = 'assets/fronend/lesson_video';
            $lesson_video->move($destinationPath, $name);
            $lessonn_video = $destinationPath .'/'.$name;
        }else{

            $video = Lesson::select('lesson')->where('id',$request->lesson_id)->first();
            $lessonn_video =  $video->lesson;
        }

        try{
            Course::where('id',$request->course_id)
            ->update([
                'course_title' => $request->course_title,
                'course_category' =>  $request->course_category,
                'course_description' => $request->course_description,
                'course_type' => $request->course_type,
                'course_image' => $image_name,
                'price' => $request->price,

            ]);
            Lesson::where('id',$request->lesson_id)
            ->update([
                'lesson_title' => $request->lesson_title,
                'lesson' =>   $lessonn_video,

            ]);




            return redirect()->back()->with('message', 'Course Edited Successfully');
            }catch (Exception $e) {
                echo 'Message is:' . $e->getError()->message . '\n';
            }


   }

   public function deleteCourse($id){
       if(Course::find($id)->delete())
       {
           Lesson::where('course_id',$id)->delete();
           return redirect()->back()->with('message','Course Deleted Succesfuly');
       }else{
        return redirect()->back();
       }
   }
}
