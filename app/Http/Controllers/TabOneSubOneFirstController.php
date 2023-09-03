<?php

namespace App\Http\Controllers;

use App\Models\tabOneSubOneFirst;
use App\Http\Requests\StoretabOneSubOneFirstRequest;
use App\Http\Requests\UpdatetabOneSubOneFirstRequest;
use Illuminate\Http\Request;

class TabOneSubOneFirstController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tabOneSubOneFirst = tabOneSubOneFirst::all();
        return view('adminDashboard.tabOne.tabOneSubOne.tabOneSubOneFirst.index', compact('tabOneSubOneFirst'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('adminDashboard.tabOne.tabOneSubOne.tabOneSubOneFirst.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoretabOneSubOneFirstRequest  $request
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
            $request->image->move(public_path('upload/tabOne/tabOneSubOne/tabOneSubOneFirst'),$imageName);
        }


        $tabOneSubOneFirst = new tabOneSubOneFirst();
        $tabOneSubOneFirst->title = $request->title;
        $tabOneSubOneFirst->description = $request->description;
        $tabOneSubOneFirst->image = $imageName;
        $tabOneSubOneFirst->save();
        return redirect()->route('ssawo/admindashboard/tabOneSubOneFirst');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tabOneSubOneFirst  $tabOneSubOneFirst
     * @return \Illuminate\Http\Response
     */
    public function show(tabOneSubOneFirst $tabOneSubOneFirst)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tabOneSubOneFirst  $tabOneSubOneFirst
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $tabOneSubOneFirst = tabOneSubOneFirst::find($id);
        return view('adminDashboard.tabOne.tabOneSubOne.tabOneSubOneFirst.insert', ['tabOneSubOneFirst' => $tabOneSubOneFirst]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetabOneSubOneFirstRequest  $request
     * @param  \App\Models\tabOneSubOneFirst  $tabOneSubOneFirst
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $tabOneSubOneFirst = tabOneSubOneFirst::find($id);

        $request->validate([
            'title' => 'required|min:3|max:200',
            'description' => 'required|min:3|max:1000'
        ]);

        if($request->image){
            $request->validate([
                'image' => 'nullable|file|image|mimes:jpeg,png,jpg,svg|max:10000'
            ]);

            if($tabOneSubOneFirst->image != 'default.png'){
                unlink(public_path('upload/tabOne/tabOneSubOne/tabOneSubOneFirst').'/'.$tabOneSubOneFirst->image);
            }

            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('upload/tabOne/tabOneSubOne/tabOneSubOneFirst'),$imageName);
        }else{
            $imageName = $tabOneSubOneFirst->image;
        }

        $tabOneSubOneFirst->title = $request->title;
        $tabOneSubOneFirst->description = $request->description;
        $tabOneSubOneFirst->image = $imageName;
        $tabOneSubOneFirst->save();
        return redirect()->route('ssawo/admindashboard/tabOneSubOneFirst');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tabOneSubOneFirst  $tabOneSubOneFirst
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $tabOneSubOneFirst = tabOneSubOneFirst::find($id);

        if($tabOneSubOneFirst->image != 'default.png'){
            unlink(public_path('upload/tabOne/tabOneSubOne/tabOneSubOneFirst').'/'.$tabOneSubOneFirst->image);
        }

        $tabOneSubOneFirst->delete();
        return redirect()->route('ssawo/admindashboard/tabOneSubOneFirst');
    }
}
