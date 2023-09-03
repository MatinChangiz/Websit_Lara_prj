<?php

namespace App\Http\Controllers;

use App\Models\tabFourHeader;
use App\Http\Requests\StoretabFourHeaderRequest;
use App\Http\Requests\UpdatetabFourHeaderRequest;
use Illuminate\Http\Request;

class TabFourHeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tabFourHeader = tabFourHeader::all();
        return view('adminDashboard.headers.tabFourHeader.index', compact('tabFourHeader'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('adminDashboard.headers.tabFourHeader.insert');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoretabFourHeaderRequest  $request
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
            $request->image->move(public_path('upload/headers/tabFourHeader'),$imageName);
        }


        $tabFourHeader = new tabFourHeader();
        $tabFourHeader->title = $request->title;
        $tabFourHeader->description = $request->description;
        $tabFourHeader->image = $imageName;
        $tabFourHeader->save();
        return redirect()->route('ssawo/admindashboard/tabFourHeader');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tabFourHeader  $tabFourHeader
     * @return \Illuminate\Http\Response
     */
    public function show(tabFourHeader $tabFourHeader)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tabFourHeader  $tabFourHeader
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $tabFourHeader = tabFourHeader::find($id);
        return view('adminDashboard.headers.tabFourHeader.insert', ['tabFourHeader' => $tabFourHeader]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetabFourHeaderRequest  $request
     * @param  \App\Models\tabFourHeader  $tabFourHeader
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $tabFourHeader = tabFourHeader::find($id);

        $request->validate([
            'title' => 'required|min:3|max:100',
            'description' => 'required|min:3|max:300'
        ]);

        if($request->image){
            $request->validate([
                'image' => 'nullable|file|image|mimes:jpeg,png,jpg,svg|max:10000'
            ]);

            if($tabFourHeader->image != 'default.png'){
                unlink(public_path('upload/headers/tabFourHeader').'/'.$tabFourHeader->image);
            }

            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('upload/headers/tabFourHeader'),$imageName);
        }else{
            $imageName = $tabFourHeader->image;
        }

        $tabFourHeader->title = $request->title;
        $tabFourHeader->description = $request->description;
        $tabFourHeader->image = $imageName;
        $tabFourHeader->save();
        return redirect()->route('ssawo/admindashboard/tabFourHeader');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tabFourHeader  $tabFourHeader
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        $tabFourHeader = tabFourHeader::find($id);

        if($tabFourHeader->image != 'default.png'){
            unlink(public_path('upload/headers/tabFourHeader').'/'.$tabFourHeader->image);
        }

        $tabFourHeader->delete();
        return redirect()->route('ssawo/admindashboard/tabFourHeader');
    }
}
