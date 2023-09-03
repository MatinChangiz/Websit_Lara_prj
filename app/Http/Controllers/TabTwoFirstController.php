<?php

namespace App\Http\Controllers;

use App\Models\tabTwoFirst;
use App\Http\Requests\StoretabTwoFirstRequest;
use App\Http\Requests\UpdatetabTwoFirstRequest;
use Illuminate\Http\Request;

class TabTwoFirstController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tabTwoFirst = tabTwoFirst::all();
        return view('adminDashboard.tabTwo.tabTwoFirst.index', compact('tabTwoFirst'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('adminDashboard.tabTwo.tabTwoFirst.insert');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoretabTwoFirstRequest  $request
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
            $request->image->move(public_path('upload/tabTwo/tabTwoFirst'),$imageName);
        }


        $tabTwoFirst = new tabTwoFirst();
        $tabTwoFirst->title = $request->title;
        $tabTwoFirst->description = $request->description;
        $tabTwoFirst->image = $imageName;
        $tabTwoFirst->save();
        return redirect()->route('ssawo/admindashboard/tabTwoFirst');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tabTwoFirst  $tabTwoFirst
     * @return \Illuminate\Http\Response
     */
    public function show(tabTwoFirst $tabTwoFirst)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tabTwoFirst  $tabTwoFirst
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
        $tabTwoFirst = tabTwoFirst::find($id);
        return view('adminDashboard.tabTwo.tabTwoFirst.insert', ['tabTwoFirst' => $tabTwoFirst]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetabTwoFirstRequest  $request
     * @param  \App\Models\tabTwoFirst  $tabTwoFirst
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $tabTwoFirst = tabTwoFirst::find($id);

        $request->validate([
            'title' => 'required|min:3|max:200',
            'description' => 'required|min:3|max:2000'
        ]);

        if($request->image){
            $request->validate([
                'image' => 'nullable|file|image|mimes:jpeg,png,jpg,svg|max:10000'
            ]);

            if($tabTwoFirst->image != 'default.png'){
                unlink(public_path('upload/tabTwo/tabTwoFirst').'/'.$tabTwoFirst->image);
            }

            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('upload/tabTwo/tabTwoFirst'),$imageName);
        }else{
            $imageName = $tabTwoFirst->image;
        }

        $tabTwoFirst->title = $request->title;
        $tabTwoFirst->description = $request->description;
        $tabTwoFirst->image = $imageName;
        $tabTwoFirst->save();
        return redirect()->route('ssawo/admindashboard/tabTwoFirst');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tabTwoFirst  $tabTwoFirst
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        $tabTwoFirst = tabTwoFirst::find($id);

        if($tabTwoFirst->image != 'default.png'){
            unlink(public_path('upload/tabTwo/tabTwoFirst').'/'.$tabTwoFirst->image);
        }

        $tabTwoFirst->delete();
        return redirect()->route('ssawo/admindashboard/tabTwoFirst');
    }
}
