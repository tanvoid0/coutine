<?php

namespace App\Http\Controllers;

use App\Weekday;
use Illuminate\Http\Request;

class WeekdayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('weekday.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
        ]);
        $weekday = new Weekday;
        $weekday->name = $request->name;
        $weekday->save();

        session (['msg' => "Weekday added ", "action" => "Added", "type" => "success"]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Weekday  $weekday
     * @return \Illuminate\Http\Response
     */
    public function show(Weekday $weekday)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Weekday  $weekday
     * @return \Illuminate\Http\Response
     */
    public function edit(Weekday $weekday)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Weekday  $weekday
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Weekday $weekday)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Weekday  $weekday
     * @return \Illuminate\Http\Response
     */
    public function destroy(Weekday $weekday)
    {
        //
    }
}
