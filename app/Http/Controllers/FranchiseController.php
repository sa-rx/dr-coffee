<?php

namespace App\Http\Controllers;

use App\Models\Franchise;
use Illuminate\Http\Request;

class FranchiseController extends Controller
{

    function __construct()
    {
       // $this->middleware('permission:الامتياز التجاري', ['only' => ['index']]);
      //  $this->middleware('permission:عرض الامتياز', ['only' => ['show']]);
      //  $this->middleware('permission:تعديل الامتياز', ['only' => ['edit','update']]);
      //  $this->middleware('permission:حذف الامتياز', ['only' => ['destroy']]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $franchises = Franchise::get();
        return view('franchises.index',compact('franchises'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('franchises.create');
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
            'email'=>'required',
            'qualification'=>'required',
            'commercial_experie'=>'required',
            'area'=>'required',
            'investment_value'=>'required',
            'solvency'=>'required',
            'date'=>'required',
            'reason_franchise'=>'required',
            'know_us'=>'required'

            
        ]);


        $franchise = new Franchise();
        $franchise->create($request->all());
        return redirect()->back()->with('message','تمت ارسال بياناتك بنجاح');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Franchise  $franchise
     * @return \Illuminate\Http\Response
     */
    public function show(Franchise $franchise)
    {
        return view('franchises.show',compact('franchise'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Franchise  $franchise
     * @return \Illuminate\Http\Response
     */
    public function edit(Franchise $franchise)
    {
        return view('franchises.edit',compact('franchise'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Franchise  $franchise
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Franchise $franchise)
    {
        
        $request->validate([

            'name'=>'required',
            'number'=>'required',
            'email'=>'required',
            'qualification'=>'required',
            'commercial_experie'=>'required',
            'area'=>'required',
            'investment_value'=>'required',
            'solvency'=>'required',
            'date'=>'required',
            'reason_franchise'=>'required',
            'know_us'=>'required'

            
        ]);

        $franchise->update($request->all());
        return redirect()->to('franchises')->with('message','تمت تعديل البيانات بنجاح');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Franchise  $franchise
     * @return \Illuminate\Http\Response
     */
    public function destroy(Franchise $franchise)
    {
        $franchise->delete();
        return redirect()->to('franchises')->with('message','تمت حذف البيانات بنجاح');

    }
}
