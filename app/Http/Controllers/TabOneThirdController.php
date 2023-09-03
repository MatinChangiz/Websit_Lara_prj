<?php

namespace App\Http\Controllers;

use App\Models\tabOneThird;
use App\Http\Requests\StoretabOneThirdRequest;
use App\Http\Requests\UpdatetabOneThirdRequest;
use Illuminate\Http\Request;

class TabOneThirdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tabOneThird = tabOneThird::all();
        return view('adminDashboard.tabOne.tabOneThird.index', compact('tabOneThird'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('adminDashboard.tabOne.tabOneThird.insert');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoretabOneThirdRequest  $request
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
            $request->image->move(public_path('upload/tabOne/tabOneThird'),$imageName);
        }


        $tabOneThird = new tabOneThird();
        $tabOneThird->title = $request->title;
        $tabOneThird->description = $request->description;
        $tabOneThird->image = $imageName;
        $tabOneThird->save();
        return redirect()->route('ssawo/admindashboard/tabOneThird');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tabOneThird  $tabOneThird
     * @return \Illuminate\Http\Response
     */
    public function show(tabOneThird $tabOneThird)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tabOneThird  $tabOneThird
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $tabOneThird = tabOneThird::find($id);
        return view('adminDashboard.tabOne.tabOneThird.insert', ['tabOneThird' => $tabOneThird]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetabOneThirdRequest  $request
     * @param  \App\Models\tabOneThird  $tabOneThird
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $tabOneThird = tabOneThird::find($id);

        $request->validate([
            'title' => 'required|min:3|max:200',
            'description' => 'required|min:3|max:500'
        ]);

        if($request->image){
            $request->validate([
                'image' => 'nullable|file|image|mimes:jpeg,png,jpg,svg|max:10000'
            ]);

            if($tabOneThird->image != 'default.png'){
                unlink(public_path('upload/tabOne/tabOneThird').'/'.$tabOneThird->image);
            }

            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('upload/tabOne/tabOneThird'),$imageName);
        }else{
            $imageName = $tabOneThird->image;
        }

        $tabOneThird->title = $request->title;
        $tabOneThird->description = $request->description;
        $tabOneThird->image = $imageName;
        $tabOneThird->save();
        return redirect()->route('ssawo/admindashboard/tabOneThird');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tabOneThird  $tabOneThird
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $tabOneThird = tabOneThird::find($id);

        if($tabOneThird->image != 'default.png'){
            unlink(public_path('upload/tabOne/tabOneThird').'/'.$tabOneThird->image);
        }

        $tabOneThird->delete();
        return redirect()->route('ssawo/admindashboard/tabOneThird');
    }
}
