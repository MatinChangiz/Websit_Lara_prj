<?php

namespace App\Http\Controllers;

use App\Models\tabOneSubFourSecond;
use App\Http\Requests\StoretabOneSubFourSecondRequest;
use App\Http\Requests\UpdatetabOneSubFourSecondRequest;
use Illuminate\Http\Request;

class TabOneSubFourSecondController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $tabOneSubFourSecond = tabOneSubFourSecond::all();
        return view('adminDashboard.tabOne.tabOneSubFour.tabOneSubFourSecond.index', compact('tabOneSubFourSecond'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('adminDashboard.tabOne.tabOneSubFour.tabOneSubFourSecond.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoretabOneSubFourSecondRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         $request->validate([
            'title' => 'required|min:3|max:200',
            'description' => 'required|min:3|max:2000',
            'image' => 'nullable|file|image|mimes:jpeg,png,jpg,svg|max:10000'
        ]);

        $imageName = 'default.png';

        if($request->image){

            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('upload/tabOne/tabOneSubFour/tabOneSubFourSecond'),$imageName);
        }


        $tabOneSubFourSecond = new tabOneSubFourSecond();
        $tabOneSubFourSecond->title = $request->title;
        $tabOneSubFourSecond->description = $request->description;
        $tabOneSubFourSecond->image = $imageName;
        $tabOneSubFourSecond->save();
        return redirect()->route('ssawo/admindashboard/tabOneSubFourSecond');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tabOneSubFourSecond  $tabOneSubFourSecond
     * @return \Illuminate\Http\Response
     */
    public function show(tabOneSubFourSecond $tabOneSubFourSecond)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tabOneSubFourSecond  $tabOneSubFourSecond
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
         $tabOneSubFourSecond = tabOneSubFourSecond::find($id);
        return view('adminDashboard.tabOne.tabOneSubFour.tabOneSubFourSecond.insert', ['tabOneSubFourSecond' => $tabOneSubFourSecond]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetabOneSubFourSecondRequest  $request
     * @param  \App\Models\tabOneSubFourSecond  $tabOneSubFourSecond
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
         $tabOneSubFourSecond = tabOneSubFourSecond::find($id);

        $request->validate([
            'title' => 'required|min:3|max:200',
            'description' => 'required|min:3|max:2000'
        ]);

        if($request->image){
            $request->validate([
                'image' => 'nullable|file|image|mimes:jpeg,png,jpg,svg|max:10000'
            ]);

            if($tabOneSubFourSecond->image != 'default.png'){
                unlink(public_path('upload/tabOne/tabOneSubFour/tabOneSubFourSecond').'/'.$tabOneSubFourSecond->image);
            }

            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('upload/tabOne/tabOneSubFour/tabOneSubFourSecond'),$imageName);
        }else{
            $imageName = $tabOneSubFourSecond->image;
        }

        $tabOneSubFourSecond->title = $request->title;
        $tabOneSubFourSecond->description = $request->description;
        $tabOneSubFourSecond->image = $imageName;
        $tabOneSubFourSecond->save();
        return redirect()->route('ssawo/admindashboard/tabOneSubFourSecond');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tabOneSubFourSecond  $tabOneSubFourSecond
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
         $tabOneSubFourSecond = tabOneSubFourSecond::find($id);

        if($tabOneSubFourSecond->image != 'default.png'){
            unlink(public_path('upload/tabOne/tabOneSubFour/tabOneSubFourSecond').'/'.$tabOneSubFourSecond->image);
        }

        $tabOneSubFourSecond->delete();
        return redirect()->route('ssawo/admindashboard/tabOneSubFourSecond');
    }
}
