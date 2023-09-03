<?php

namespace App\Http\Controllers;

use App\Models\tabOneSubFourHeader;
use App\Http\Requests\StoretabOneSubFourHeaderRequest;
use App\Http\Requests\UpdatetabOneSubFourHeaderRequest;
use Illuminate\Http\Request;

class TabOneSubFourHeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $tabOneSubFourHeader = tabOneSubFourHeader::all();
        return view('adminDashboard.headers.tabOneSubFourHeader.index', compact('tabOneSubFourHeader'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('adminDashboard.headers.tabOneSubFourHeader.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoretabOneSubFourHeaderRequest  $request
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
            $request->image->move(public_path('upload/headers/tabOneSubFourHeader'),$imageName);
        }


        $tabOneSubFourHeader = new tabOneSubFourHeader();
        $tabOneSubFourHeader->title = $request->title;
        $tabOneSubFourHeader->description = $request->description;
        $tabOneSubFourHeader->image = $imageName;
        $tabOneSubFourHeader->save();
        return redirect()->route('ssawo/admindashboard/tabOneSubFourHeader');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tabOneSubFourHeader  $tabOneSubFourHeader
     * @return \Illuminate\Http\Response
     */
    public function show(tabOneSubFourHeader $tabOneSubFourHeader)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tabOneSubFourHeader  $tabOneSubFourHeader
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
         $tabOneSubFourHeader = tabOneSubFourHeader::find($id);
        return view('adminDashboard.headers.tabOneSubFourHeader.insert', ['tabOneSubFourHeader' => $tabOneSubFourHeader]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetabOneSubFourHeaderRequest  $request
     * @param  \App\Models\tabOneSubFourHeader  $tabOneSubFourHeader
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
         $tabOneSubFourHeader = tabOneSubFourHeader::find($id);

        $request->validate([
            'title' => 'required|min:3|max:100',
            'description' => 'required|min:3|max:300'
        ]);

        if($request->image){
            $request->validate([
                'image' => 'nullable|file|image|mimes:jpeg,png,jpg,svg|max:10000'
            ]);

            if($tabOneSubFourHeader->image != 'default.png'){
                unlink(public_path('upload/headers/tabOneSubFourHeader').'/'.$tabOneSubFourHeader->image);
            }

            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('upload/headers/tabOneSubFourHeader'),$imageName);
        }else{
            $imageName = $tabOneSubFourHeader->image;
        }

        $tabOneSubFourHeader->title = $request->title;
        $tabOneSubFourHeader->description = $request->description;
        $tabOneSubFourHeader->image = $imageName;
        $tabOneSubFourHeader->save();
        return redirect()->route('ssawo/admindashboard/tabOneSubFourHeader');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tabOneSubFourHeader  $tabOneSubFourHeader
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        $tabOneSubFourHeader = tabOneSubFourHeader::find($id);

        if($tabOneSubFourHeader->image != 'default.png'){
            unlink(public_path('upload/headers/tabOneSubFourHeader').'/'.$tabOneSubFourHeader->image);
        }

        $tabOneSubFourHeader->delete();
        return redirect()->route('ssawo/admindashboard/tabOneSubFourHeader');
    }
}
