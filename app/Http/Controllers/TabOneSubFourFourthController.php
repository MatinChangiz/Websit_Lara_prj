<?php

namespace App\Http\Controllers;

use App\Models\tabOneSubFourFourth;
use App\Http\Requests\StoretabOneSubFourFourthRequest;
use App\Http\Requests\UpdatetabOneSubFourFourthRequest;
use Illuminate\Http\Request;

class TabOneSubFourFourthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $tabOneSubFourFourth = tabOneSubFourFourth::all();
        return view('adminDashboard.tabOne.tabOneSubFour.tabOneSubFourFourth.index', compact('tabOneSubFourFourth'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('adminDashboard.tabOne.tabOneSubFour.tabOneSubFourFourth.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoretabOneSubFourFourthRequest  $request
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
            $request->image->move(public_path('upload/tabOne/tabOneSubFour/tabOneSubFourFourth'),$imageName);
        }


        $tabOneSubFourFourth = new tabOneSubFourFourth();
        $tabOneSubFourFourth->title = $request->title;
        $tabOneSubFourFourth->description = $request->description;
        $tabOneSubFourFourth->image = $imageName;
        $tabOneSubFourFourth->save();
        return redirect()->route('ssawo/admindashboard/tabOneSubFourFourth');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tabOneSubFourFourth  $tabOneSubFourFourth
     * @return \Illuminate\Http\Response
     */
    public function show(tabOneSubFourFourth $tabOneSubFourFourth)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tabOneSubFourFourth  $tabOneSubFourFourth
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
         $tabOneSubFourFourth = tabOneSubFourFourth::find($id);
        return view('adminDashboard.tabOne.tabOneSubFour.tabOneSubFourFourth.insert', ['tabOneSubFourFourth' => $tabOneSubFourFourth]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetabOneSubFourFourthRequest  $request
     * @param  \App\Models\tabOneSubFourFourth  $tabOneSubFourFourth
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
         $tabOneSubFourFourth = tabOneSubFourFourth::find($id);

        $request->validate([
            'title' => 'required|min:3|max:200',
            'description' => 'required|min:3|max:1000'
        ]);

        if($request->image){
            $request->validate([
                'image' => 'nullable|file|image|mimes:jpeg,png,jpg,svg|max:10000'
            ]);

            if($tabOneSubFourFourth->image != 'default.png'){
                unlink(public_path('upload/tabOne/tabOneSubFour/tabOneSubFourFourth').'/'.$tabOneSubFourFourth->image);
            }

            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('upload/tabOne/tabOneSubFour/tabOneSubFourFourth'),$imageName);
        }else{
            $imageName = $tabOneSubFourFourth->image;
        }

        $tabOneSubFourFourth->title = $request->title;
        $tabOneSubFourFourth->description = $request->description;
        $tabOneSubFourFourth->image = $imageName;
        $tabOneSubFourFourth->save();
        return redirect()->route('ssawo/admindashboard/tabOneSubFourFourth');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tabOneSubFourFourth  $tabOneSubFourFourth
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
         $tabOneSubFourFourth = tabOneSubFourFourth::find($id);

        if($tabOneSubFourFourth->image != 'default.png'){
            unlink(public_path('upload/tabOne/tabOneSubFour/tabOneSubFourFourth').'/'.$tabOneSubFourFourth->image);
        }

        $tabOneSubFourFourth->delete();
        return redirect()->route('ssawo/admindashboard/tabOneSubFourFourth');
    }
}
