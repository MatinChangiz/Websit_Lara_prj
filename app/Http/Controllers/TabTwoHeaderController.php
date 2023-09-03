<?php

namespace App\Http\Controllers;

use App\Models\tabTwoHeader;
use App\Http\Requests\StoretabTwoHeaderRequest;
use App\Http\Requests\UpdatetabTwoHeaderRequest;
use Illuminate\Http\Request;

class TabTwoHeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tabTwoHeader = tabTwoHeader::all();
        return view('adminDashboard.headers.tabTwoHeader.index', compact('tabTwoHeader'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('adminDashboard.headers.tabTwoHeader.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoretabTwoHeaderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required|min:3|max:100',
            'description' => 'required|min:3|max:250',
            'image' => 'nullable|file|image|mimes:jpeg,png,jpg,svg|max:10000'
        ]);

        $imageName = 'default.png';

        if($request->image){

            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('upload/headers/tabTwoHeader'),$imageName);
        }


        $tabTwoHeader = new tabTwoHeader();
        $tabTwoHeader->title = $request->title;
        $tabTwoHeader->description = $request->description;
        $tabTwoHeader->image = $imageName;
        $tabTwoHeader->save();
        return redirect()->route('ssawo/admindashboard/tabTwoHeader');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tabTwoHeader  $tabTwoHeader
     * @return \Illuminate\Http\Response
     */
    public function show(tabTwoHeader $tabTwoHeader)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tabTwoHeader  $tabTwoHeader
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $tabTwoHeader = tabTwoHeader::find($id);
        return view('adminDashboard.headers.tabTwoHeader.insert', ['tabTwoHeader' => $tabTwoHeader]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetabTwoHeaderRequest  $request
     * @param  \App\Models\tabTwoHeader  $tabTwoHeader
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $tabTwoHeader = tabTwoHeader::find($id);

        $request->validate([
            'title' => 'required|min:3|max:100',
            'description' => 'required|min:3|max:250'
        ]);

        if($request->image){
            $request->validate([
                'image' => 'nullable|file|image|mimes:jpeg,png,jpg,svg|max:10000'
            ]);

            if($tabTwoHeader->image != 'default.png'){
                unlink(public_path('upload/headers/tabTwoHeader').'/'.$tabTwoHeader->image);
            }

            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('upload/headers/tabTwoHeader'),$imageName);
        }else{
            $imageName = $tabTwoHeader->image;
        }

        $tabTwoHeader->title = $request->title;
        $tabTwoHeader->description = $request->description;
        $tabTwoHeader->image = $imageName;
        $tabTwoHeader->save();
        return redirect()->route('ssawo/admindashboard/tabTwoHeader');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tabTwoHeader  $tabTwoHeader
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        $tabTwoHeader = tabTwoHeader::find($id);

        if($tabTwoHeader->image != 'default.png'){
            unlink(public_path('upload/headers/tabTwoHeader').'/'.$tabTwoHeader->image);
        }

        $tabTwoHeader->delete();
        return redirect()->route('ssawo/admindashboard/tabTwoHeader');
    }
}
