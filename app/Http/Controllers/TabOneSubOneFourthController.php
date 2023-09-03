<?php

namespace App\Http\Controllers;

use App\Models\tabOneSubOneFourth;
use App\Http\Requests\StoretabOneSubOneFourthRequest;
use App\Http\Requests\UpdatetabOneSubOneFourthRequest;
use Illuminate\Http\Request;

class TabOneSubOneFourthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tabOneSubOneFourth = tabOneSubOneFourth::all();
        return view('adminDashboard.tabOne.tabOneSubOne.tabOneSubOneFourth.index', compact('tabOneSubOneFourth'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('adminDashboard.tabOne.tabOneSubOne.tabOneSubOneFourth.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoretabOneSubOneFourthRequest  $request
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
            $request->image->move(public_path('upload/tabOne/tabOneSubOne/tabOneSubOneFourth'),$imageName);
        }


        $tabOneSubOneFourth = new tabOneSubOneFourth();
        $tabOneSubOneFourth->title = $request->title;
        $tabOneSubOneFourth->description = $request->description;
        $tabOneSubOneFourth->image = $imageName;
        $tabOneSubOneFourth->save();
        return redirect()->route('ssawo/admindashboard/tabOneSubOneFourth');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tabOneSubOneFourth  $tabOneSubOneFourth
     * @return \Illuminate\Http\Response
     */
    public function show(tabOneSubOneFourth $tabOneSubOneFourth)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tabOneSubOneFourth  $tabOneSubOneFourth
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
        $tabOneSubOneFourth = tabOneSubOneFourth::find($id);
        return view('adminDashboard.tabOne.tabOneSubOne.tabOneSubOneFourth.insert', ['tabOneSubOneFourth' => $tabOneSubOneFourth]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetabOneSubOneFourthRequest  $request
     * @param  \App\Models\tabOneSubOneFourth  $tabOneSubOneFourth
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $tabOneSubOneFourth = tabOneSubOneFourth::find($id);

        $request->validate([
            'title' => 'required|min:3|max:200',
            'description' => 'required|min:3|max:1000'
        ]);

        if($request->image){
            $request->validate([
                'image' => 'nullable|file|image|mimes:jpeg,png,jpg,svg|max:10000'
            ]);

            if($tabOneSubOneFourth->image != 'default.png'){
                unlink(public_path('upload/tabOne/tabOneSubOne/tabOneSubOneFourth').'/'.$tabOneSubOneFourth->image);
            }

            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('upload/tabOne/tabOneSubOne/tabOneSubOneFourth'),$imageName);
        }else{
            $imageName = $tabOneSubOneFourth->image;
        }

        $tabOneSubOneFourth->title = $request->title;
        $tabOneSubOneFourth->description = $request->description;
        $tabOneSubOneFourth->image = $imageName;
        $tabOneSubOneFourth->save();
        return redirect()->route('ssawo/admindashboard/tabOneSubOneFourth');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tabOneSubOneFourth  $tabOneSubOneFourth
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        $tabOneSubOneFourth = tabOneSubOneFourth::find($id);

        if($tabOneSubOneFourth->image != 'default.png'){
            unlink(public_path('upload/tabOne/tabOneSubOne/tabOneSubOneFourth').'/'.$tabOneSubOneFourth->image);
        }

        $tabOneSubOneFourth->delete();
        return redirect()->route('ssawo/admindashboard/tabOneSubOneFourth');
    }
}
