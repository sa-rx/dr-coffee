<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Participation;

use Illuminate\Http\Request;

class CourseController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:الكورسات', ['only' => ['index']]);
        $this->middleware('permission:اضافة كورس', ['only' => ['create','store']]);
        $this->middleware('permission:عرض الكورس', ['only' => ['show']]);
        $this->middleware('permission:تعديل الكورس', ['only' => ['edit','update']]);
        $this->middleware('permission:حذف الكورس', ['only' => ['destroy']]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::get();
        return view('courses.index',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('courses.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $course = new Course;
        $course->create($request->all());
        return redirect()->to('courses')->with('message','تم اضافة الكورس بنجاح');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        $participations =  Participation::get();

        return view('courses.show',compact('course','participations'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        return view('courses.edit',compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $course->update($request->all());
        return redirect()->to('courses')->with('message','تم تعديل الكورس بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->to('courses')->with('message','تم حذف الكورس بنجاح');

    }
}
