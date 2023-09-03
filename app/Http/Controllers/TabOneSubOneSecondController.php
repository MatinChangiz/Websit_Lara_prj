<?php

namespace App\Http\Controllers;

use App\Models\tabOneSubOneSecond;
use App\Http\Requests\StoretabOneSubOneSecondRequest;
use App\Http\Requests\UpdatetabOneSubOneSecondRequest;
use Illuminate\Http\Request;

class TabOneSubOneSecondController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tabOneSubOneSecond = tabOneSubOneSecond::all();
        return view('adminDashboard.tabOne.tabOneSubOne.tabOneSubOneSecond.index', compact('tabOneSubOneSecond'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('adminDashboard.tabOne.tabOneSubOne.tabOneSubOneSecond.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoretabOneSubOneSecondRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required|min:3|max:200',
            'description' => 'required|min:3|max:1000',
            'image' => 'nullable|file|image|mimes:jpeg,png,jpg,svg|max:10000'
        ]);

        $imageName = 'default.png';

        if($request->image){

            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('upload/tabOne/tabOneSubOne/tabOneSubOneSecond'),$imageName);
        }


        $tabOneSubOneSecond = new tabOneSubOneSecond();
        $tabOneSubOneSecond->title = $request->title;
        $tabOneSubOneSecond->description = $request->description;
        $tabOneSubOneSecond->image = $imageName;
        $tabOneSubOneSecond->save();
        return redirect()->route('ssawo/admindashboard/tabOneSubOneSecond');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tabOneSubOneSecond  $tabOneSubOneSecond
     * @return \Illuminate\Http\Response
     */
    public function show(tabOneSubOneSecond $tabOneSubOneSecond)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tabOneSubOneSecond  $tabOneSubOneSecond
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
        $tabOneSubOneSecond = tabOneSubOneSecond::find($id);
        return view('adminDashboard.tabOne.tabOneSubOne.tabOneSubOneSecond.insert', ['tabOneSubOneSecond' => $tabOneSubOneSecond]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetabOneSubOneSecondRequest  $request
     * @param  \App\Models\tabOneSubOneSecond  $tabOneSubOneSecond
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $tabOneSubOneSecond = tabOneSubOneSecond::find($id);

        $request->validate([
            'title' => 'required|min:3|max:200',
            'description' => 'required|min:3|max:1000'
        ]);

        if($request->image){
            $request->validate([
                'image' => 'nullable|file|image|mimes:jpeg,png,jpg,svg|max:10000'
            ]);

            if($tabOneSubOneSecond->image != 'default.png'){
                unlink(public_path('upload/tabOne/tabOneSubOne/tabOneSubOneSecond').'/'.$tabOneSubOneSecond->image);
            }

            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('upload/tabOne/tabOneSubOne/tabOneSubOneSecond'),$imageName);
        }else{
            $imageName = $tabOneSubOneSecond->image;
        }

        $tabOneSubOneSecond->title = $request->title;
        $tabOneSubOneSecond->description = $request->description;
        $tabOneSubOneSecond->image = $imageName;
        $tabOneSubOneSecond->save();
        return redirect()->route('ssawo/admindashboard/tabOneSubOneSecond');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tabOneSubOneSecond  $tabOneSubOneSecond
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        $tabOneSubOneSecond = tabOneSubOneSecond::find($id);

        if($tabOneSubOneSecond->image != 'default.png'){
            unlink(public_path('upload/tabOne/tabOneSubOne/tabOneSubOneSecond').'/'.$tabOneSubOneSecond->image);
        }

        $tabOneSubOneSecond->delete();
        return redirect()->route('ssawo/admindashboard/tabOneSubOneSecond');
    }
}
