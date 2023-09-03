<?php

namespace App\Http\Controllers;

use App\Models\tabOneSubOneHeader;
use App\Http\Requests\StoretabOneSubOneHeaderRequest;
use App\Http\Requests\UpdatetabOneSubOneHeaderRequest;
use Illuminate\Http\Request;

class TabOneSubOneHeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tabOneSubOneHeader = tabOneSubOneHeader::all();
        return view('adminDashboard.headers.tabOneSubOneHeader.index', compact('tabOneSubOneHeader'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('adminDashboard.headers.tabOneSubOneHeader.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoretabOneSubOneHeaderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required|min:3|max:100',
            'description' => 'required|min:3|max:300',
            'image' => 'nullable|file|image|mimes:jpeg,png,jpg,svg|max:10000'
        ]);

        $imageName = 'default.png';

        if($request->image){

            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('upload/headers/tabOneSubOneHeader'),$imageName);
        }


        $tabOneSubOneHeader = new tabOneSubOneHeader();
        $tabOneSubOneHeader->title = $request->title;
        $tabOneSubOneHeader->description = $request->description;
        $tabOneSubOneHeader->image = $imageName;
        $tabOneSubOneHeader->save();
        return redirect()->route('ssawo/admindashboard/tabOneSubOneHeader');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tabOneSubOneHeader  $tabOneSubOneHeader
     * @return \Illuminate\Http\Response
     */
    public function show(tabOneSubOneHeader $tabOneSubOneHeader)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tabOneSubOneHeader  $tabOneSubOneHeader
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
        $tabOneSubOneHeader = tabOneSubOneHeader::find($id);
        return view('adminDashboard.headers.tabOneSubOneHeader.insert', ['tabOneSubOneHeader' => $tabOneSubOneHeader]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetabOneSubOneHeaderRequest  $request
     * @param  \App\Models\tabOneSubOneHeader  $tabOneSubOneHeader
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $tabOneSubOneHeader = tabOneSubOneHeader::find($id);

        $request->validate([
            'title' => 'required|min:3|max:100',
            'description' => 'required|min:3|max:300'
        ]);

        if($request->image){
            $request->validate([
                'image' => 'nullable|file|image|mimes:jpeg,png,jpg,svg|max:10000'
            ]);

            if($tabOneSubOneHeader->image != 'default.png'){
                unlink(public_path('upload/headers/tabOneSubOneHeader').'/'.$tabOneSubOneHeader->image);
            }

            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('upload/headers/tabOneSubOneHeader'),$imageName);
        }else{
            $imageName = $tabOneSubOneHeader->image;
        }

        $tabOneSubOneHeader->title = $request->title;
        $tabOneSubOneHeader->description = $request->description;
        $tabOneSubOneHeader->image = $imageName;
        $tabOneSubOneHeader->save();
        return redirect()->route('ssawo/admindashboard/tabOneSubOneHeader');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tabOneSubOneHeader  $tabOneSubOneHeader
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $tabOneSubOneHeader = tabOneSubOneHeader::find($id);

        if($tabOneSubOneHeader->image != 'default.png'){
            unlink(public_path('upload/headers/tabOneSubOneHeader').'/'.$tabOneSubOneHeader->image);
        }

        $tabOneSubOneHeader->delete();
        return redirect()->route('ssawo/admindashboard/tabOneSubOneHeader');
    }
}
