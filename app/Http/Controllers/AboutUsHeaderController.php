<?php

namespace App\Http\Controllers;

use App\Models\aboutUsHeader;
use App\Http\Requests\StoreaboutUsHeaderRequest;
use App\Http\Requests\UpdateaboutUsHeaderRequest;
use Illuminate\Http\Request;

class AboutUsHeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $aboutUsHeader = aboutUsHeader::all();
        return view('adminDashboard.headers.aboutUsHeader.index', compact('aboutUsHeader'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('adminDashboard.headers.aboutUsHeader.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreaboutUsHeaderRequest  $request
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
            $request->image->move(public_path('upload/headers/aboutUsHeader'),$imageName);
        }


        $aboutUsHeader = new aboutUsHeader();
        $aboutUsHeader->title = $request->title;
        $aboutUsHeader->description = $request->description;
        $aboutUsHeader->image = $imageName;
        $aboutUsHeader->save();
        return redirect()->route('ssawo/admindashboard/aboutUsHeader');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\aboutUsHeader  $aboutUsHeader
     * @return \Illuminate\Http\Response
     */
    public function show(aboutUsHeader $aboutUsHeader)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\aboutUsHeader  $aboutUsHeader
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
         $aboutUsHeader = aboutUsHeader::find($id);
        return view('adminDashboard.headers.aboutUsHeader.insert', ['aboutUsHeader' => $aboutUsHeader]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateaboutUsHeaderRequest  $request
     * @param  \App\Models\aboutUsHeader  $aboutUsHeader
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
         $aboutUsHeader = aboutUsHeader::find($id);

        $request->validate([
            'title' => 'required|min:3|max:100',
            'description' => 'required|min:3|max:300'
        ]);

        if($request->image){
            $request->validate([
                'image' => 'nullable|file|image|mimes:jpeg,png,jpg,svg|max:10000'
            ]);

            if($aboutUsHeader->image != 'default.png'){
                unlink(public_path('upload/headers/aboutUsHeader').'/'.$aboutUsHeader->image);
            }

            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('upload/headers/aboutUsHeader'),$imageName);
        }else{
            $imageName = $aboutUsHeader->image;
        }

        $aboutUsHeader->title = $request->title;
        $aboutUsHeader->description = $request->description;
        $aboutUsHeader->image = $imageName;
        $aboutUsHeader->save();
        return redirect()->route('ssawo/admindashboard/aboutUsHeader');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\aboutUsHeader  $aboutUsHeader
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
         $aboutUsHeader = aboutUsHeader::find($id);

        if($aboutUsHeader->image != 'default.png'){
            unlink(public_path('upload/headers/aboutUsHeader').'/'.$aboutUsHeader->image);
        }

        $aboutUsHeader->delete();
        return redirect()->route('ssawo/admindashboard/aboutUsHeader');
    }
}
