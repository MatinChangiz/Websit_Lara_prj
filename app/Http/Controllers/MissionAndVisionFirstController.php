<?php

namespace App\Http\Controllers;

use App\Models\missionAndVisionFirst;
use App\Http\Requests\StoremissionAndVisionFirstRequest;
use App\Http\Requests\UpdatemissionAndVisionFirstRequest;
use Illuminate\Http\Request;

class MissionAndVisionFirstController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $missionAndVisionFirst = missionAndVisionFirst::all();
        return view('adminDashboard.missionAndVision.missionAndVisionFirst.index', compact('missionAndVisionFirst'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('adminDashboard.missionAndVision.missionAndVisionFirst.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoremissionAndVisionFirstRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required|min:3|max:200',
            'description' => 'required|min:3|max:3000'
        ]);

        $missionAndVisionFirst = new missionAndVisionFirst();
        $missionAndVisionFirst->title = $request->title;
        $missionAndVisionFirst->description = $request->description;
        $missionAndVisionFirst->save();
        return redirect()->route('ssawo/admindashboard/missionAndVisionFirst');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\missionAndVisionFirst  $missionAndVisionFirst
     * @return \Illuminate\Http\Response
     */
    public function show(missionAndVisionFirst $missionAndVisionFirst)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\missionAndVisionFirst  $missionAndVisionFirst
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
          $missionAndVisionFirst = missionAndVisionFirst::find($id);
        return view('adminDashboard.missionAndVision.missionAndVisionFirst.insert', ['missionAndVisionFirst' => $missionAndVisionFirst]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatemissionAndVisionFirstRequest  $request
     * @param  \App\Models\missionAndVisionFirst  $missionAndVisionFirst
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
          $missionAndVisionFirst = missionAndVisionFirst::find($id);

        $request->validate([
            'title' => 'required|min:3|max:200',
            'description' => 'required|min:3|max:3000'
        ]);

        $missionAndVisionFirst->title = $request->title;
        $missionAndVisionFirst->description = $request->description;
        $missionAndVisionFirst->save();
        return redirect()->route('ssawo/admindashboard/missionAndVisionFirst');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\missionAndVisionFirst  $missionAndVisionFirst
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        $missionAndVisionFirst = missionAndVisionFirst::find($id);

        $missionAndVisionFirst->delete();
        return redirect()->route('ssawo/admindashboard/missionAndVisionFirst');
    }
}
