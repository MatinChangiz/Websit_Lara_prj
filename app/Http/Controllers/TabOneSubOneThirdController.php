<?php

namespace App\Http\Controllers;

use App\Models\tabOneSubOneThird;
use App\Http\Requests\StoretabOneSubOneThirdRequest;
use App\Http\Requests\UpdatetabOneSubOneThirdRequest;
use Illuminate\Http\Request;

class TabOneSubOneThirdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tabOneSubOneThird = tabOneSubOneThird::all();
        return view('adminDashboard.tabOne.tabOneSubOne.tabOneSubOneThird.index', compact('tabOneSubOneThird'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('adminDashboard.tabOne.tabOneSubOne.tabOneSubOneThird.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoretabOneSubOneThirdRequest  $request
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
            $request->image->move(public_path('upload/tabOne/tabOneSubOne/tabOneSubOneThird'),$imageName);
        }


        $tabOneSubOneThird = new tabOneSubOneThird();
        $tabOneSubOneThird->title = $request->title;
        $tabOneSubOneThird->description = $request->description;
        $tabOneSubOneThird->image = $imageName;
        $tabOneSubOneThird->save();
        return redirect()->route('ssawo/admindashboard/tabOneSubOneThird');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tabOneSubOneThird  $tabOneSubOneThird
     * @return \Illuminate\Http\Response
     */
    public function show(tabOneSubOneThird $tabOneSubOneThird)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tabOneSubOneThird  $tabOneSubOneThird
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
        $tabOneSubOneThird = tabOneSubOneThird::find($id);
        return view('adminDashboard.tabOne.tabOneSubOne.tabOneSubOneThird.insert', ['tabOneSubOneThird' => $tabOneSubOneThird]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetabOneSubOneThirdRequest  $request
     * @param  \App\Models\tabOneSubOneThird  $tabOneSubOneThird
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $tabOneSubOneThird = tabOneSubOneThird::find($id);

        $request->validate([
            'title' => 'required|min:3|max:200',
            'description' => 'required|min:3|max:1000'
        ]);

        if($request->image){
            $request->validate([
                'image' => 'nullable|file|image|mimes:jpeg,png,jpg,svg|max:10000'
            ]);

            if($tabOneSubOneThird->image != 'default.png'){
                unlink(public_path('upload/tabOne/tabOneSubOne/tabOneSubOneThird').'/'.$tabOneSubOneThird->image);
            }

            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('upload/tabOne/tabOneSubOne/tabOneSubOneThird'),$imageName);
        }else{
            $imageName = $tabOneSubOneThird->image;
        }

        $tabOneSubOneThird->title = $request->title;
        $tabOneSubOneThird->description = $request->description;
        $tabOneSubOneThird->image = $imageName;
        $tabOneSubOneThird->save();
        return redirect()->route('ssawo/admindashboard/tabOneSubOneThird');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tabOneSubOneThird  $tabOneSubOneThird
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        $tabOneSubOneThird = tabOneSubOneThird::find($id);

        if($tabOneSubOneThird->image != 'default.png'){
            unlink(public_path('upload/tabOne/tabOneSubOne/tabOneSubOneThird').'/'.$tabOneSubOneThird->image);
        }

        $tabOneSubOneThird->delete();
        return redirect()->route('ssawo/admindashboard/tabOneSubOneThird');
    }
}
