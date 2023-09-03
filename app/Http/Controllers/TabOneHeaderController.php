<?php

namespace App\Http\Controllers;

use App\Models\tabOneHeader;
use App\Http\Requests\StoretabOneHeaderRequest;
use App\Http\Requests\UpdatetabOneHeaderRequest;
use Illuminate\Http\Request;

class TabOneHeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tabOneHeader = tabOneHeader::all();
        return view('adminDashboard.headers.tabOneHeader.index', compact('tabOneHeader'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('adminDashboard.headers.tabOneHeader.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoretabOneHeaderRequest  $request
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
            $request->image->move(public_path('upload/headers/tabOneHeader'),$imageName);
        }


        $tabOneHeader = new tabOneHeader();
        $tabOneHeader->title = $request->title;
        $tabOneHeader->description = $request->description;
        $tabOneHeader->image = $imageName;
        $tabOneHeader->save();
        return redirect()->route('ssawo/admindashboard/tabOneHeader');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tabOneHeader  $tabOneHeader
     * @return \Illuminate\Http\Response
     */
    public function show(tabOneHeader $tabOneHeader)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tabOneHeader  $tabOneHeader
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $tabOneHeader = tabOneHeader::find($id);
        return view('adminDashboard.headers.tabOneHeader.insert', ['tabOneHeader' => $tabOneHeader]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetabOneHeaderRequest  $request
     * @param  \App\Models\tabOneHeader  $tabOneHeader
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $tabOneHeader = tabOneHeader::find($id);

        $request->validate([
            'title' => 'required|min:3|max:100',
            'description' => 'required|min:3|max:250'
        ]);

        if($request->image){
            $request->validate([
                'image' => 'nullable|file|image|mimes:jpeg,png,jpg,svg|max:10000'
            ]);

            if($tabOneHeader->image != 'default.png'){
                unlink(public_path('upload/headers/tabOneHeader').'/'.$tabOneHeader->image);
            }

            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('upload/headers/tabOneHeader'),$imageName);
        }else{
            $imageName = $tabOneHeader->image;
        }

        $tabOneHeader->title = $request->title;
        $tabOneHeader->description = $request->description;
        $tabOneHeader->image = $imageName;
        $tabOneHeader->save();
        return redirect()->route('ssawo/admindashboard/tabOneHeader');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tabOneHeader  $tabOneHeader
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $tabOneHeader = tabOneHeader::find($id);

        if($tabOneHeader->image != 'default.png'){
            unlink(public_path('upload/headers/tabOneHeader').'/'.$tabOneHeader->image);
        }

        $tabOneHeader->delete();
        return redirect()->route('ssawo/admindashboard/tabOneHeader');
    }
}
