<?php

namespace App\Http\Controllers;
use App\Models\Participation;
use App\Models\Course;

use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function index()
    {           
        $courses = Course::orderBy('id','ASC')->get();
        return view('course.index',compact('courses'));
    }

    public function show(Course $course)
    {           
        $courses = Course::find($course);
        return view('course.show',compact('course'));
    }
}
