<?php

namespace App\Http\Controllers;

use App\Models\indexFirst;
use App\Http\Requests\StoreindexFirstRequest;
use App\Http\Requests\UpdateindexFirstRequest;
use Illuminate\Http\Request;

class IndexFirstController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $indexFirst = indexFirst::all();
        return view('adminDashboard.mainPage.indexFirst.index', compact('indexFirst'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('adminDashboard.mainPage.indexFirst.insert');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreindexFirstRequest  $request
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
            $request->image->move(public_path('upload/mainPage/indexFirst'),$imageName);
        }


        $indexFirst = new indexFirst();
        $indexFirst->title = $request->title;
        $indexFirst->description = $request->description;
        $indexFirst->image = $imageName;
        $indexFirst->save();
        return redirect()->route('ssawo/admindashboard/indexFirst');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\indexFirst  $indexFirst
     * @return \Illuminate\Http\Response
     */
    public function show(indexFirst $indexFirst)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\indexFirst  $indexFirst
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $indexFirst = indexFirst::find($id);
        return view('adminDashboard.mainPage.indexFirst.insert', ['indexFirst' => $indexFirst]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateindexFirstRequest  $request
     * @param  \App\Models\indexFirst  $indexFirst
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $indexFirst = indexFirst::find($id);

        $request->validate([
            'title' => 'required|min:3|max:200',
            'description' => 'required|min:3|max:500'
        ]);

        if($request->image){
            $request->validate([
                'image' => 'nullable|file|image|mimes:jpeg,png,jpg,svg|max:10000'
            ]);

            if($indexFirst->image != 'default.png'){
                unlink(public_path('upload/mainPage/indexFirst').'/'.$indexFirst->image);
            }

            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('upload/mainPage/indexFirst'),$imageName);
        }else{
            $imageName = $indexFirst->image;
        }

        $indexFirst->title = $request->title;
        $indexFirst->description = $request->description;
        $indexFirst->image = $imageName;
        $indexFirst->save();
        return redirect()->route('ssawo/admindashboard/indexFirst');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\indexFirst  $indexFirst
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $indexFirst = indexFirst::find($id);

        if($indexFirst->image != 'default.png'){
            unlink(public_path('upload/mainPage/indexFirst').'/'.$indexFirst->image);
        }

        $indexFirst->delete();
        return redirect()->route('ssawo/admindashboard/indexFirst');
    }
}
