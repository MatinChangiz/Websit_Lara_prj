<?php

namespace App\Http\Controllers;

use App\Models\missionAndVisionHeader;
use App\Http\Requests\StoremissionAndVisionHeaderRequest;
use App\Http\Requests\UpdatemissionAndVisionHeaderRequest;
use Illuminate\Http\Request;

class MissionAndVisionHeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $missionAndVisionHeader = missionAndVisionHeader::all();
        return view('adminDashboard.headers.missionAndVisionHeader.index', compact('missionAndVisionHeader'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('adminDashboard.headers.missionAndVisionHeader.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoremissionAndVisionHeaderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
          $request->validate([
            'title' => 'required|min:3|max:100',
            'description' => 'required|min:3|max:300',
            'image' => 'nullable|file|image|mimes:jpeg,png,jpg,svg|max:10000'
        ]);

        $imageName = 'default.png';

        if($request->image){

            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('upload/headers/missionAndVisionHeader'),$imageName);
        }


        $missionAndVisionHeader = new missionAndVisionHeader();
        $missionAndVisionHeader->title = $request->title;
        $missionAndVisionHeader->description = $request->description;
        $missionAndVisionHeader->image = $imageName;
        $missionAndVisionHeader->save();
        return redirect()->route('ssawo/admindashboard/missionAndVisionHeader');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\missionAndVisionHeader  $missionAndVisionHeader
     * @return \Illuminate\Http\Response
     */
    public function show(missionAndVisionHeader $missionAndVisionHeader)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\missionAndVisionHeader  $missionAndVisionHeader
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
          $missionAndVisionHeader = missionAndVisionHeader::find($id);
        return view('adminDashboard.headers.missionAndVisionHeader.insert', ['missionAndVisionHeader' => $missionAndVisionHeader]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatemissionAndVisionHeaderRequest  $request
     * @param  \App\Models\missionAndVisionHeader  $missionAndVisionHeader
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
          $missionAndVisionHeader = missionAndVisionHeader::find($id);

        $request->validate([
            'title' => 'required|min:3|max:100',
            'description' => 'required|min:3|max:300'
        ]);

        if($request->image){
            $request->validate([
                'image' => 'nullable|file|image|mimes:jpeg,png,jpg,svg|max:10000'
            ]);

            if($missionAndVisionHeader->image != 'default.png'){
                unlink(public_path('upload/headers/missionAndVisionHeader').'/'.$missionAndVisionHeader->image);
            }

            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('upload/headers/missionAndVisionHeader'),$imageName);
        }else{
            $imageName = $missionAndVisionHeader->image;
        }

        $missionAndVisionHeader->title = $request->title;
        $missionAndVisionHeader->description = $request->description;
        $missionAndVisionHeader->image = $imageName;
        $missionAndVisionHeader->save();
        return redirect()->route('ssawo/admindashboard/missionAndVisionHeader');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\missionAndVisionHeader  $missionAndVisionHeader
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
          $missionAndVisionHeader = missionAndVisionHeader::find($id);

        if($missionAndVisionHeader->image != 'default.png'){
            unlink(public_path('upload/headers/missionAndVisionHeader').'/'.$missionAndVisionHeader->image);
        }

        $missionAndVisionHeader->delete();
        return redirect()->route('ssawo/admindashboard/missionAndVisionHeader');
    }
}
