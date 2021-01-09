<?php

use Illuminate\Support\Facades\Route;
use App\Course;
use App\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $free_courses = Course::where('course_type','free')->paginate('6');
    $subscribe_courses = Course::where('course_type','subscribe')->paginate('6');
    $premium_courses = Course::where('course_type','premium')->paginate('6');
    $recent_news = Post::OrderBy('id','DESC')->limit('9')->get();
    return view('index',compact('free_courses','subscribe_courses','premium_courses','recent_news'));
})->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/register', 'RegisterController@register')->name('signup');
Route::post('register/step2', 'RegisterController@step2_register')->name('step2_register');
Route::get('/create/course', 'CourseController@index')->name('createcourse');
Route::post('/course', 'CourseController@createCourse')->name('course');
Route::get('pricing', 'PagesController@pricing')->name('pricing');
Route::get('events', 'EventsController@index')->name('event');
Route::get('blogs', 'BlogController@getAllBlogs')->name('blog');
Route::get('about', 'PagesController@about')->name('about');
Route::get('course/detail/{course:slug}', 'CourseController@freecourseDetail')->name('free.course');
Route::get('course/{course:slug}', 'CourseController@courseDetail')->name('paid.course');
Route::get('course/details/{course:slug}', 'CourseController@subscribeCourse')->name('subscribe.course')->middleware('subscribe');
Route::get('news/{post:slug}', 'BlogController@singlePost')->name('post.news');
Route::get('watch/{course:slug}', 'CourseController@watchCourse')->name('free.watch.course');
Route::get('watch/video/{course:slug}', 'CourseController@watchCourse')->name('watch.course');
Route::get('news', 'CourseController@watchCourse')->name('allblog');
Route::get('register/step2', 'RegisterController@step2')->name('step2');
Route::get('payment', 'RegisterController@payment')->name('payment-register');
Route::post('payment', 'RegisterController@PayNow')->name('pay.stripe');
Route::get('register/free', 'RegisterController@freeUser')->name('free.user');
Route::get('event/{event:slug}', 'EventsController@singleEvent')->name('single.event');
Route::get('buy/course/{course:slug}', 'CourseController@buyCourse')->name('buy.course');
Route::post('buy/course/{course:slug}', 'CourseController@coursePurchased')->name('payment');
Route::get('my/courses', 'CourseController@myCourses')->name('my-courses');
Route::get('connect/stripe', 'ConnectStripe@index')->name('connectStripe');
Route::get('/redirect', 'ConnectStripe@connectStripe')->name('connectstripeaccount');
Route::get('/profile', 'ProfileController@profileform')->name('profile');
Route::post('user/profile', 'ProfileController@updateProfile')->name('update.profile');
Route::get('offers', 'OfferController@offers')->name('offers');
Route::get('single/{offer:slug}', 'OfferController@singleoffer')->name('single.offer');
Route::get('training', 'TrainingController@training')->name('training');
Route::get('referral', 'RaferralController@register')->name('referral.register');
Route::get('/raferral/register/step2', 'RaferralController@step2_register')->name('referral.registerstep2');
Route::post('checkstatus', 'RegisterController@checkststus')->name('checkstatus');
Route::get('members/directory', 'MembersController@index')->name('members-directory');
//Route for submitting dropzone data
Route::post('/storevideo', 'CourseController@storeVideo')->name('storevideo');
Route::get('/manage/courses', 'CourseController@manageCources')->name('manage-courses');
Route::get('edit/course/{id}', 'CourseController@editCourseform')->name('course.edit');
Route::post('/edit/course', 'CourseController@editCourse')->name('editcourse');
Route::get('/delete/course/{id}', 'CourseController@deleteCourse')->name('course.delete');
Route::get('/price/plan', 'PagesController@pricing')->name('price.plan')->middleware('auth');
Route::get('/create/blog', 'BlogController@cretaeBlogForm')->name('create-blogform');
Route::post('/create/blog', 'BlogController@cretaeBlog')->name('create-blog');
Route::get('/manage/blog', 'BlogController@manageBlogs')->name('manage-blogs');
Route::get('/edit/blog/{id}', 'BlogController@editBlogForm')->name('edit-blog');
Route::POST('/edit/blog', 'BlogController@editBlog')->name('edit.blog');
Route::get('/delete/blog/{id}', 'BlogController@deleteBlog')->name('delete-blog');
//manage offer
Route::get('/create/offer', 'OfferController@cretaeOfferForm')->name('create-offerform');
Route::post('/create/offer', 'OfferController@cretaeOffer')->name('create-offer');
Route::get('/manage/offer', 'OfferController@manageOffers')->name('manage-offers');
Route::get('/edit/offer/{id}', 'OfferController@editOffer')->name('edit.offer');
Route::post('/edit/offer', 'OfferController@updateOffer')->name('update-offer');
Route::get('/delete/offer/{id}', 'OfferController@deleteOffer')->name('delete.offer');

//members profile
Route::get('/member/profile/{id}', 'MembersController@profile')->name('members-profile');


