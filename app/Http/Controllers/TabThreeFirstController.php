<?php

namespace App\Http\Controllers;

use App\Models\tabThreeFirst;
use App\Http\Requests\StoretabThreeFirstRequest;
use App\Http\Requests\UpdatetabThreeFirstRequest;
use Illuminate\Http\Request;

class TabThreeFirstController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tabThreeFirst = tabThreeFirst::all();
        return view('adminDashboard.tabThree.tabThreeFirst.index', compact('tabThreeFirst'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('adminDashboard.tabThree.tabThreeFirst.insert');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoretabThreeFirstRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required|min:3|max:50',
            'description' => 'required|min:3|max:1000',
            'image' => 'nullable|file|image|mimes:jpeg,png,jpg,svg|max:10000'
        ]);

        $imageName = 'default.png';

        if($request->image){

            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('upload/tabThree/tabThreeFirst'),$imageName);
        }


        $tabThreeFirst = new tabThreeFirst();
        $tabThreeFirst->title = $request->title;
        $tabThreeFirst->description = $request->description;
        $tabThreeFirst->image = $imageName;
        $tabThreeFirst->save();
        return redirect()->route('ssawo/admindashboard/tabThreeFirst');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tabThreeFirst  $tabThreeFirst
     * @return \Illuminate\Http\Response
     */
    public function show(tabThreeFirst $tabThreeFirst)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tabThreeFirst  $tabThreeFirst
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $tabThreeFirst = tabThreeFirst::find($id);
        return view('adminDashboard.tabThree.tabThreeFirst.insert', ['tabThreeFirst' => $tabThreeFirst]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetabThreeFirstRequest  $request
     * @param  \App\Models\tabThreeFirst  $tabThreeFirst
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $tabThreeFirst = tabThreeFirst::find($id);

        $request->validate([
            'title' => 'required|min:3|max:50',
            'description' => 'required|min:3|max:1000'
        ]);

        if($request->image){
            $request->validate([
                'image' => 'nullable|file|image|mimes:jpeg,png,jpg,svg|max:10000'
            ]);

            if($tabThreeFirst->image != 'default.png'){
                unlink(public_path('upload/tabThree/tabThreeFirst').'/'.$tabThreeFirst->image);
            }

            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('upload/tabThree/tabThreeFirst'),$imageName);
        }else{
            $imageName = $tabThreeFirst->image;
        }

        $tabThreeFirst->title = $request->title;
        $tabThreeFirst->description = $request->description;
        $tabThreeFirst->image = $imageName;
        $tabThreeFirst->save();
        return redirect()->route('ssawo/admindashboard/tabThreeFirst');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tabThreeFirst  $tabThreeFirst
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        $tabThreeFirst = tabThreeFirst::find($id);

        if($tabThreeFirst->image != 'default.png'){
            unlink(public_path('upload/tabThree/tabThreeFirst').'/'.$tabThreeFirst->image);
        }

        $tabThreeFirst->delete();
        return redirect()->route('ssawo/admindashboard/tabThreeFirst');
    }
}
