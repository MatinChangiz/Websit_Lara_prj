<?php

namespace App\Http\Controllers;

use App\Models\tabOneSecond;
use App\Http\Requests\StoretabOneSecondRequest;
use App\Http\Requests\UpdatetabOneSecondRequest;
use Illuminate\Http\Request;

class TabOneSecondController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tabOneSecond = tabOneSecond::all();
        return view('adminDashboard.tabOne.tabOneSecond.index', compact('tabOneSecond'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('adminDashboard.tabOne.tabOneSecond.insert');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoretabOneSecondRequest  $request
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
            $request->image->move(public_path('upload/tabOne/tabOneSecond'),$imageName);
        }


        $tabOneSecond = new tabOneSecond();
        $tabOneSecond->title = $request->title;
        $tabOneSecond->description = $request->description;
        $tabOneSecond->image = $imageName;
        $tabOneSecond->save();
        return redirect()->route('ssawo/admindashboard/tabOneSecond');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tabOneSecond  $tabOneSecond
     * @return \Illuminate\Http\Response
     */
    public function show(tabOneSecond $tabOneSecond)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tabOneSecond  $tabOneSecond
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $tabOneSecond = tabOneSecond::find($id);
        return view('adminDashboard.tabOne.tabOneSecond.insert', ['tabOneSecond' => $tabOneSecond]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetabOneSecondRequest  $request
     * @param  \App\Models\tabOneSecond  $tabOneSecond
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $tabOneSecond = tabOneSecond::find($id);

        $request->validate([
            'title' => 'required|min:3|max:200',
            'description' => 'required|min:3|max:500'
        ]);

        if($request->image){
            $request->validate([
                'image' => 'nullable|file|image|mimes:jpeg,png,jpg,svg|max:10000'
            ]);

            if($tabOneSecond->image != 'default.png'){
                unlink(public_path('upload/tabOne/tabOneSecond').'/'.$tabOneSecond->image);
            }

            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('upload/tabOne/tabOneSecond'),$imageName);
        }else{
            $imageName = $tabOneSecond->image;
        }

        $tabOneSecond->title = $request->title;
        $tabOneSecond->description = $request->description;
        $tabOneSecond->image = $imageName;
        $tabOneSecond->save();
        return redirect()->route('ssawo/admindashboard/tabOneSecond');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tabOneSecond  $tabOneSecond
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $tabOneSecond = tabOneSecond::find($id);

        if($tabOneSecond->image != 'default.png'){
            unlink(public_path('upload/tabOne/tabOneSecond').'/'.$tabOneSecond->image);
        }

        $tabOneSecond->delete();
        return redirect()->route('ssawo/admindashboard/tabOneSecond');
    }
}
