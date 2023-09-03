<?php

namespace App\Http\Controllers;

use App\Models\aboutUs;
use App\Http\Requests\StoreaboutUsRequest;
use App\Http\Requests\UpdateaboutUsRequest;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $aboutUs = aboutUs::all();
        return view('adminDashboard.aboutUs.aboutUs.index', compact('aboutUs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('adminDashboard.aboutUs.aboutUs.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreaboutUsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         $request->validate([
            'title' => 'required|min:3|max:50',
            'description' => 'required|min:3|max:300',
            'image' => 'nullable|file|image|mimes:jpeg,png,jpg,svg|max:10000'
        ]);

        $imageName = 'default.png';

        if($request->image){

            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('upload/aboutUs/aboutUs'),$imageName);
        }


        $aboutUs = new aboutUs();
        $aboutUs->title = $request->title;
        $aboutUs->description = $request->description;
        $aboutUs->image = $imageName;
        $aboutUs->save();
        return redirect()->route('ssawo/admindashboard/aboutUs');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\aboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function show(aboutUs $aboutUs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\aboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
          $aboutUs = aboutUs::find($id);
        return view('adminDashboard.aboutUs.aboutUs.insert', ['aboutUs' => $aboutUs]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateaboutUsRequest  $request
     * @param  \App\Models\aboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
          $aboutUs = aboutUs::find($id);

        $request->validate([
            'title' => 'required|min:3|max:50',
            'description' => 'required|min:3|max:300'
        ]);

        if($request->image){
            $request->validate([
                'image' => 'nullable|file|image|mimes:jpeg,png,jpg,svg|max:10000'
            ]);

            if($aboutUs->image != 'default.png'){
                unlink(public_path('upload/aboutUs/aboutUs').'/'.$aboutUs->image);
            }

            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('upload/aboutUs/aboutUs'),$imageName);
        }else{
            $imageName = $aboutUs->image;
        }

        $aboutUs->title = $request->title;
        $aboutUs->description = $request->description;
        $aboutUs->image = $imageName;
        $aboutUs->save();
        return redirect()->route('ssawo/admindashboard/aboutUs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\aboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
          $aboutUs = aboutUs::find($id);

        if($aboutUs->image != 'default.png'){
            unlink(public_path('upload/aboutUs/aboutUs').'/'.$aboutUs->image);
        }

        $aboutUs->delete();
        return redirect()->route('ssawo/admindashboard/aboutUs');
    }
}
