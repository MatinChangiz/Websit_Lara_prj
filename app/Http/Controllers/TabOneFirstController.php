<?php

namespace App\Http\Controllers;

use App\Models\tabOneFirst;
use App\Http\Requests\StoretabOneFirstRequest;
use App\Http\Requests\UpdatetabOneFirstRequest;
use Illuminate\Http\Request;

class TabOneFirstController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tabOneFirst = tabOneFirst::all();
        return view('adminDashboard.tabOne.tabOneFirst.index', compact('tabOneFirst'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('adminDashboard.tabOne.tabOneFirst.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoretabOneFirstRequest  $request
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
            $request->image->move(public_path('upload/tabOne/tabOneFirst'),$imageName);
        }


        $tabOneFirst = new tabOneFirst();
        $tabOneFirst->title = $request->title;
        $tabOneFirst->description = $request->description;
        $tabOneFirst->image = $imageName;
        $tabOneFirst->save();
        return redirect()->route('ssawo/admindashboard/tabOneFirst');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tabOneFirst  $tabOneFirst
     * @return \Illuminate\Http\Response
     */
    public function show(tabOneFirst $tabOneFirst)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tabOneFirst  $tabOneFirst
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $tabOneFirst = tabOneFirst::find($id);
        return view('adminDashboard.tabOne.tabOneFirst.insert', ['tabOneFirst' => $tabOneFirst]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetabOneFirstRequest  $request
     * @param  \App\Models\tabOneFirst  $tabOneFirst
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $tabOneFirst = tabOneFirst::find($id);

        $request->validate([
            'title' => 'required|min:3|max:200',
            'description' => 'required|min:3|max:1000'
        ]);

        if($request->image){
            $request->validate([
                'image' => 'nullable|file|image|mimes:jpeg,png,jpg,svg|max:10000'
            ]);

            if($tabOneFirst->image != 'default.png'){
                unlink(public_path('upload/tabOne/tabOneFirst').'/'.$tabOneFirst->image);
            }

            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('upload/tabOne/tabOneFirst'),$imageName);
        }else{
            $imageName = $tabOneFirst->image;
        }

        $tabOneFirst->title = $request->title;
        $tabOneFirst->description = $request->description;
        $tabOneFirst->image = $imageName;
        $tabOneFirst->save();
        return redirect()->route('ssawo/admindashboard/tabOneFirst');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tabOneFirst  $tabOneFirst
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $tabOneFirst = tabOneFirst::find($id);

        if($tabOneFirst->image != 'default.png'){
            unlink(public_path('upload/tabOne/tabOneFirst').'/'.$tabOneFirst->image);
        }

        $tabOneFirst->delete();
        return redirect()->route('ssawo/admindashboard/tabOneFirst');
    }
}
