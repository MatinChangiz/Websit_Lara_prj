<?php

namespace App\Http\Controllers;

use App\Models\tabOneSubTwoHeader;
use App\Http\Requests\StoretabOneSubTwoHeaderRequest;
use App\Http\Requests\UpdatetabOneSubTwoHeaderRequest;
use Illuminate\Http\Request;

class TabOneSubTwoHeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tabOneSubTwoHeader = tabOneSubTwoHeader::all();
        return view('adminDashboard.headers.tabOneSubTwoHeader.index', compact('tabOneSubTwoHeader'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('adminDashboard.headers.tabOneSubTwoHeader.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoretabOneSubTwoHeaderRequest  $request
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
            $request->image->move(public_path('upload/headers/tabOneSubTwoHeader'),$imageName);
        }


        $tabOneSubTwoHeader = new tabOneSubTwoHeader();
        $tabOneSubTwoHeader->title = $request->title;
        $tabOneSubTwoHeader->description = $request->description;
        $tabOneSubTwoHeader->image = $imageName;
        $tabOneSubTwoHeader->save();
        return redirect()->route('ssawo/admindashboard/tabOneSubTwoHeader');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tabOneSubTwoHeader  $tabOneSubTwoHeader
     * @return \Illuminate\Http\Response
     */
    public function show(tabOneSubTwoHeader $tabOneSubTwoHeader)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tabOneSubTwoHeader  $tabOneSubTwoHeader
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
        $tabOneSubTwoHeader = tabOneSubTwoHeader::find($id);
        return view('adminDashboard.headers.tabOneSubTwoHeader.insert', ['tabOneSubTwoHeader' => $tabOneSubTwoHeader]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetabOneSubTwoHeaderRequest  $request
     * @param  \App\Models\tabOneSubTwoHeader  $tabOneSubTwoHeader
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $tabOneSubTwoHeader = tabOneSubTwoHeader::find($id);

        $request->validate([
            'title' => 'required|min:3|max:100',
            'description' => 'required|min:3|max:300'
        ]);

        if($request->image){
            $request->validate([
                'image' => 'nullable|file|image|mimes:jpeg,png,jpg,svg|max:10000'
            ]);

            if($tabOneSubTwoHeader->image != 'default.png'){
                unlink(public_path('upload/headers/tabOneSubTwoHeader').'/'.$tabOneSubTwoHeader->image);
            }

            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('upload/headers/tabOneSubTwoHeader'),$imageName);
        }else{
            $imageName = $tabOneSubTwoHeader->image;
        }

        $tabOneSubTwoHeader->title = $request->title;
        $tabOneSubTwoHeader->description = $request->description;
        $tabOneSubTwoHeader->image = $imageName;
        $tabOneSubTwoHeader->save();
        return redirect()->route('ssawo/admindashboard/tabOneSubTwoHeader');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tabOneSubTwoHeader  $tabOneSubTwoHeader
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        $tabOneSubTwoHeader = tabOneSubTwoHeader::find($id);

        if($tabOneSubTwoHeader->image != 'default.png'){
            unlink(public_path('upload/headers/tabOneSubTwoHeader').'/'.$tabOneSubTwoHeader->image);
        }

        $tabOneSubTwoHeader->delete();
        return redirect()->route('ssawo/admindashboard/tabOneSubTwoHeader');
    }
}
