<?php

namespace App\Http\Controllers;

use App\Models\indexSecond;
use App\Http\Requests\StoreindexSecondRequest;
use App\Http\Requests\UpdateindexSecondRequest;
use Illuminate\Http\Request;

class IndexSecondController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $indexSecond = indexSecond::all();
        return view('adminDashboard.mainPage.indexSecond.index', compact('indexSecond'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('adminDashboard.mainPage.indexSecond.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreindexSecondRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required|min:3|max:200',
            'description' => 'required|min:3|max:500',
            'image' => 'nullable|file|image|mimes:jpeg,png,jpg,svg|max:10000'
        ]);

        $imageName = 'default.png';

        if($request->image){

            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('upload/mainPage/indexSecond'),$imageName);
        }


        $indexSecond = new indexSecond();
        $indexSecond->title = $request->title;
        $indexSecond->description = $request->description;
        $indexSecond->image = $imageName;
        $indexSecond->save();
        return redirect()->route('ssawo/admindashboard/indexSecond');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\indexSecond  $indexSecond
     * @return \Illuminate\Http\Response
     */
    public function show(indexSecond $indexSecond)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\indexSecond  $indexSecond
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $indexSecond = indexSecond::find($id);
        return view('adminDashboard.mainPage.indexSecond.insert', ['indexSecond' => $indexSecond]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateindexSecondRequest  $request
     * @param  \App\Models\indexSecond  $indexSecond
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $indexSecond = indexSecond::find($id);

        $request->validate([
            'title' => 'required|min:3|max:200',
            'description' => 'required|min:3|max:500'
        ]);

        if($request->image){
            $request->validate([
                'image' => 'nullable|file|image|mimes:jpeg,png,jpg,svg|max:10000'
            ]);

            if($indexSecond->image != 'default.png'){
                unlink(public_path('upload/mainPage/indexSecond').'/'.$indexSecond->image);
            }

            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('upload/mainPage/indexSecond'),$imageName);
        }else{
            $imageName = $indexSecond->image;
        }

        $indexSecond->title = $request->title;
        $indexSecond->description = $request->description;
        $indexSecond->image = $imageName;
        $indexSecond->save();
        return redirect()->route('ssawo/admindashboard/indexSecond');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\indexSecond  $indexSecond
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $indexSecond = indexSecond::find($id);

        if($indexSecond->image != 'default.png'){
            unlink(public_path('upload/mainPage/indexSecond').'/'.$indexSecond->image);
        }

        $indexSecond->delete();
        return redirect()->route('ssawo/admindashboard/indexSecond');
    }
}
