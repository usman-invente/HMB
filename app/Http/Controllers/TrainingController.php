<?php

namespace App\Http\Controllers;
use App\Course;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    public function training()
    {
        $courses = Course::OrderBy('id','DESC')->paginate('9');
        return view('training.training',compact('courses'));
    }
}
