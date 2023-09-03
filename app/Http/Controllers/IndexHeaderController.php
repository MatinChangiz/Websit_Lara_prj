<?php

namespace App\Http\Controllers;

use App\Models\indexHeader;
use App\Http\Requests\StoreindexHeaderRequest;
use App\Http\Requests\UpdateindexHeaderRequest;
use Illuminate\Http\Request;

class IndexHeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $indexHeader = indexHeader::all();
        return view('adminDashboard.headers.indexHeader.index', compact('indexHeader'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('adminDashboard.headers.indexHeader.insert');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreindexHeaderRequest  $request
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
            $request->image->move(public_path('upload/headers/indexHeader'),$imageName);
        }


        $indexHeader = new indexHeader();
        $indexHeader->title = $request->title;
        $indexHeader->description = $request->description;
        $indexHeader->image = $imageName;
        $indexHeader->save();
        return redirect()->route('ssawo/admindashboard/indexHeader');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\indexHeader  $indexHeader
     * @return \Illuminate\Http\Response
     */
    public function show(indexHeader $indexHeader)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\indexHeader  $indexHeader
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $indexHeader = indexHeader::find($id);
        return view('adminDashboard.headers.indexHeader.insert', ['indexHeader' => $indexHeader]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateindexHeaderRequest  $request
     * @param  \App\Models\indexHeader  $indexHeader
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $indexHeader = indexHeader::find($id);

        $request->validate([
            'title' => 'required|min:3|max:100',
            'description' => 'required|min:3|max:250'
        ]);

        if($request->image){
            $request->validate([
                'image' => 'nullable|file|image|mimes:jpeg,png,jpg,svg|max:10000'
            ]);

            if($indexHeader->image != 'default.png'){
                unlink(public_path('upload/headers/indexHeader').'/'.$indexHeader->image);
            }

            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('upload/headers/indexHeader'),$imageName);
        }else{
            $imageName = $indexHeader->image;
        }

        $indexHeader->title = $request->title;
        $indexHeader->description = $request->description;
        $indexHeader->image = $imageName;
        $indexHeader->save();
        return redirect()->route('ssawo/admindashboard/indexHeader');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\indexHeader  $indexHeader
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $indexHeader = indexHeader::find($id);

        if($indexHeader->image != 'default.png'){
            unlink(public_path('upload/headers/indexHeader').'/'.$indexHeader->image);
        }

        $indexHeader->delete();
        return redirect()->route('ssawo/admindashboard/indexHeader');
    }
}
