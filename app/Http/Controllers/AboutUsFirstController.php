<?php

namespace App\Http\Controllers;

use App\Models\aboutUsFirst;
use App\Http\Requests\StoreaboutUsFirstRequest;
use App\Http\Requests\UpdateaboutUsFirstRequest;
use Illuminate\Http\Request;

class AboutUsFirstController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $aboutUsFirst = aboutUsFirst::all();
        return view('adminDashboard.aboutUs.aboutUsFirst.index', compact('aboutUsFirst'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('adminDashboard.aboutUs.aboutUsFirst.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreaboutUsFirstRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         $request->validate([
            'title' => 'required|min:3|max:100',
            'description' => 'required|min:3|max:1000',
            'image' => 'nullable|file|image|mimes:jpeg,png,jpg,svg|max:10000'
        ]);

        $imageName = 'default.png';

        if($request->image){

            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('upload/aboutUs/aboutUsFirst'),$imageName);
        }


        $aboutUsFirst = new aboutUsFirst();
        $aboutUsFirst->title = $request->title;
        $aboutUsFirst->description = $request->description;
        $aboutUsFirst->image = $imageName;
        $aboutUsFirst->save();
        return redirect()->route('ssawo/admindashboard/aboutUsFirst');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\aboutUsFirst  $aboutUsFirst
     * @return \Illuminate\Http\Response
     */
    public function show(aboutUsFirst $aboutUsFirst)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\aboutUsFirst  $aboutUsFirst
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
         $aboutUsFirst = aboutUsFirst::find($id);
        return view('adminDashboard.aboutUs.aboutUsFirst.insert', ['aboutUsFirst' => $aboutUsFirst]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateaboutUsFirstRequest  $request
     * @param  \App\Models\aboutUsFirst  $aboutUsFirst
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
         $aboutUsFirst = aboutUsFirst::find($id);

        $request->validate([
            'title' => 'required|min:3|max:100',
            'description' => 'required|min:3|max:1000'
        ]);

        if($request->image){
            $request->validate([
                'image' => 'nullable|file|image|mimes:jpeg,png,jpg,svg|max:10000'
            ]);

            if($aboutUsFirst->image != 'default.png'){
                unlink(public_path('upload/aboutUs/aboutUsFirst').'/'.$aboutUsFirst->image);
            }

            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('upload/aboutUs/aboutUsFirst'),$imageName);
        }else{
            $imageName = $aboutUsFirst->image;
        }

        $aboutUsFirst->title = $request->title;
        $aboutUsFirst->description = $request->description;
        $aboutUsFirst->image = $imageName;
        $aboutUsFirst->save();
        return redirect()->route('ssawo/admindashboard/aboutUsFirst');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\aboutUsFirst  $aboutUsFirst
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         $aboutUsFirst = aboutUsFirst::find($id);

        if($aboutUsFirst->image != 'default.png'){
            unlink(public_path('upload/aboutUs/aboutUsFirst').'/'.$aboutUsFirst->image);
        }

        $aboutUsFirst->delete();
        return redirect()->route('ssawo/admindashboard/aboutUsFirst');
    }
}
