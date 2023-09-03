<?php

namespace App\Http\Controllers;

use App\Models\tabTwoThird;
use App\Http\Requests\StoretabTwoThirdRequest;
use App\Http\Requests\UpdatetabTwoThirdRequest;
use Illuminate\Http\Request;

class TabTwoThirdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tabTwoThird = tabTwoThird::all();
        return view('adminDashboard.tabTwo.tabTwoThird.index', compact('tabTwoThird'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('adminDashboard.tabTwo.tabTwoThird.insert');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoretabTwoThirdRequest  $request
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
            $request->image->move(public_path('upload/tabTwo/tabTwoThird'),$imageName);
        }


        $tabTwoThird = new tabTwoThird();
        $tabTwoThird->title = $request->title;
        $tabTwoThird->description = $request->description;
        $tabTwoThird->image = $imageName;
        $tabTwoThird->save();
        return redirect()->route('ssawo/admindashboard/tabTwoThird');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tabTwoThird  $tabTwoThird
     * @return \Illuminate\Http\Response
     */
    public function show(tabTwoThird $tabTwoThird)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tabTwoThird  $tabTwoThird
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
        $tabTwoThird = tabTwoThird::find($id);
        return view('adminDashboard.tabTwo.tabTwoThird.insert', ['tabTwoThird' => $tabTwoThird]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetabTwoThirdRequest  $request
     * @param  \App\Models\tabTwoThird  $tabTwoThird
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $tabTwoThird = tabTwoThird::find($id);

        $request->validate([
            'title' => 'required|min:3|max:200',
            'description' => 'required|min:3|max:1000'
        ]);

        if($request->image){
            $request->validate([
                'image' => 'nullable|file|image|mimes:jpeg,png,jpg,svg|max:10000'
            ]);

            if($tabTwoThird->image != 'default.png'){
                unlink(public_path('upload/tabTwo/tabTwoThird').'/'.$tabTwoThird->image);
            }

            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('upload/tabTwo/tabTwoThird'),$imageName);
        }else{
            $imageName = $tabTwoThird->image;
        }

        $tabTwoThird->title = $request->title;
        $tabTwoThird->description = $request->description;
        $tabTwoThird->image = $imageName;
        $tabTwoThird->save();
        return redirect()->route('ssawo/admindashboard/tabTwoThird');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tabTwoThird  $tabTwoThird
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        $tabTwoThird = tabTwoThird::find($id);

        if($tabTwoThird->image != 'default.png'){
            unlink(public_path('upload/tabTwo/tabTwoThird').'/'.$tabTwoThird->image);
        }

        $tabTwoThird->delete();
        return redirect()->route('ssawo/admindashboard/tabTwoThird');
    }
}
