<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{

    function __construct()
    {
      //  $this->middleware('permission:تنظيم الفعاليات', ['only' => ['index']]);
      //  $this->middleware('permission:عرض الفعاليات', ['only' => ['show']]);
      //  $this->middleware('permission:تعديل الفعاليات', ['only' => ['edit','update']]);
      //  $this->middleware('permission:حذف الفعاليات', ['only' => ['destroy']]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::get();
        return view('events.index',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'name'=>'required',
            'number'=>'required',
            'audience'=>'required',
            'date'=>'required'
            
        ]);


        $event = new Event();
        $event->create($request->all());
        return redirect()->back()->with('message','تمت ارسال بياناتك بنجاح');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view('events.show',compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('events.edit',compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $request->validate([

            'name'=>'required',
            'number'=>'required',
            'audience'=>'required',
            'date'=>'required'
            
        ]);

        $event->update($request->all());
        return redirect()->to('events')->with('message','تمت تعديل البيانات بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->to('events')->with('message','تمت حذف البيانات بنجاح');
    }
}
