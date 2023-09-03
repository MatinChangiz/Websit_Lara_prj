<?php

namespace App\Http\Controllers;

use App\Models\tabOneSubThreeHeader;
use App\Http\Requests\StoretabOneSubThreeHeaderRequest;
use App\Http\Requests\UpdatetabOneSubThreeHeaderRequest;
use Illuminate\Http\Request;

class TabOneSubThreeHeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $tabOneSubThreeHeader = tabOneSubThreeHeader::all();
        return view('adminDashboard.headers.tabOneSubThreeHeader.index', compact('tabOneSubThreeHeader'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('adminDashboard.headers.tabOneSubThreeHeader.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoretabOneSubThreeHeaderRequest  $request
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
            $request->image->move(public_path('upload/headers/tabOneSubThreeHeader'),$imageName);
        }


        $tabOneSubThreeHeader = new tabOneSubThreeHeader();
        $tabOneSubThreeHeader->title = $request->title;
        $tabOneSubThreeHeader->description = $request->description;
        $tabOneSubThreeHeader->image = $imageName;
        $tabOneSubThreeHeader->save();
        return redirect()->route('ssawo/admindashboard/tabOneSubThreeHeader');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tabOneSubThreeHeader  $tabOneSubThreeHeader
     * @return \Illuminate\Http\Response
     */
    public function show(tabOneSubThreeHeader $tabOneSubThreeHeader)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tabOneSubThreeHeader  $tabOneSubThreeHeader
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
         $tabOneSubThreeHeader = tabOneSubThreeHeader::find($id);
        return view('adminDashboard.headers.tabOneSubThreeHeader.insert', ['tabOneSubThreeHeader' => $tabOneSubThreeHeader]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetabOneSubThreeHeaderRequest  $request
     * @param  \App\Models\tabOneSubThreeHeader  $tabOneSubThreeHeader
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
         $tabOneSubThreeHeader = tabOneSubThreeHeader::find($id);

        $request->validate([
            'title' => 'required|min:3|max:100',
            'description' => 'required|min:3|max:300'
        ]);

        if($request->image){
            $request->validate([
                'image' => 'nullable|file|image|mimes:jpeg,png,jpg,svg|max:10000'
            ]);

            if($tabOneSubThreeHeader->image != 'default.png'){
                unlink(public_path('upload/headers/tabOneSubThreeHeader').'/'.$tabOneSubThreeHeader->image);
            }

            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('upload/headers/tabOneSubThreeHeader'),$imageName);
        }else{
            $imageName = $tabOneSubThreeHeader->image;
        }

        $tabOneSubThreeHeader->title = $request->title;
        $tabOneSubThreeHeader->description = $request->description;
        $tabOneSubThreeHeader->image = $imageName;
        $tabOneSubThreeHeader->save();
        return redirect()->route('ssawo/admindashboard/tabOneSubThreeHeader');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tabOneSubThreeHeader  $tabOneSubThreeHeader
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        $tabOneSubThreeHeader = tabOneSubThreeHeader::find($id);

        if($tabOneSubThreeHeader->image != 'default.png'){
            unlink(public_path('upload/headers/tabOneSubThreeHeader').'/'.$tabOneSubThreeHeader->image);
        }

        $tabOneSubThreeHeader->delete();
        return redirect()->route('ssawo/admindashboard/tabOneSubThreeHeader');
    }
}
