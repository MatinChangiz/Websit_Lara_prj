<?php

namespace App\Http\Controllers;

use App\Models\tabTwoSubOneFirst;
use App\Http\Requests\StoretabTwoSubOneFirstRequest;
use App\Http\Requests\UpdatetabTwoSubOneFirstRequest;
use Illuminate\Http\Request;

class TabTwoSubOneFirstController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $tabTwoSubOneFirst = tabTwoSubOneFirst::all();
        // return view('adminDashboard.tabTwo.tabTwoSubOne.tabTwoSubOneFirst.index', compact('tabTwoSubOneFirst'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // return view('adminDashboard.tabTwo.tabTwoSubOne.tabTwoSubOneFirst.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoretabTwoSubOneFirstRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //   $request->validate([
        //     'title' => 'required|min:3|max:200',
        //     'description' => 'required|min:3|max:1000',
        //     'image' => 'nullable|file|image|mimes:jpeg,png,jpg,svg|max:5000'
        // ]);

        // $imageName = 'default.png';

        // if($request->image){

        //     $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
        //     $request->image->move(public_path('upload/tabTwo/tabTwoSubOne/tabTwoSubOneFirst'),$imageName);
        // }


        // $tabTwoSubOneFirst = new tabTwoSubOneFirst();
        // $tabTwoSubOneFirst->title = $request->title;
        // $tabTwoSubOneFirst->description = $request->description;
        // $tabTwoSubOneFirst->image = $imageName;
        // $tabTwoSubOneFirst->save();
        // return redirect()->route('ssawo/admindashboard/tabTwoSubOneFirst');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tabTwoSubOneFirst  $tabTwoSubOneFirst
     * @return \Illuminate\Http\Response
     */
    public function show(tabTwoSubOneFirst $tabTwoSubOneFirst)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tabTwoSubOneFirst  $tabTwoSubOneFirst
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
        //   $tabTwoSubOneFirst = tabTwoSubOneFirst::find($id);
        // return view('adminDashboard.tabTwo.tabTwoSubOne.tabTwoSubOneFirst.insert', ['tabTwoSubOneFirst' => $tabTwoSubOneFirst]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetabTwoSubOneFirstRequest  $request
     * @param  \App\Models\tabTwoSubOneFirst  $tabTwoSubOneFirst
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        //   $tabTwoSubOneFirst = tabTwoSubOneFirst::find($id);

        // $request->validate([
        //     'title' => 'required|min:3|max:200',
        //     'description' => 'required|min:3|max:1000'
        // ]);

        // if($request->image){
        //     $request->validate([
        //         'image' => 'nullable|file|image|mimes:jpeg,png,jpg,svg|max:5000'
        //     ]);

        //     if($tabTwoSubOneFirst->image != 'default.png'){
        //         unlink(public_path('upload/tabTwo/tabTwoSubOne/tabTwoSubOneFirst').'/'.$tabTwoSubOneFirst->image);
        //     }

        //     $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
        //     $request->image->move(public_path('upload/tabTwo/tabTwoSubOne/tabTwoSubOneFirst'),$imageName);
        // }else{
        //     $imageName = $tabTwoSubOneFirst->image;
        // }

        // $tabTwoSubOneFirst->title = $request->title;
        // $tabTwoSubOneFirst->description = $request->description;
        // $tabTwoSubOneFirst->image = $imageName;
        // $tabTwoSubOneFirst->save();
        // return redirect()->route('ssawo/admindashboard/tabTwoSubOneFirst');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tabTwoSubOneFirst  $tabTwoSubOneFirst
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        //  $tabTwoSubOneFirst = tabTwoSubOneFirst::find($id);

        // if($tabTwoSubOneFirst->image != 'default.png'){
        //     unlink(public_path('upload/tabTwo/tabTwoSubOne/tabTwoSubOneFirst').'/'.$tabTwoSubOneFirst->image);
        // }

        // $tabTwoSubOneFirst->delete();
        // return redirect()->route('ssawo/admindashboard/tabTwoSubOneFirst');
    }
}
