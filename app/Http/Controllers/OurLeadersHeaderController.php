<?php

namespace App\Http\Controllers;

use App\Models\ourLeadersHeader;
use App\Http\Requests\StoreourLeadersHeaderRequest;
use App\Http\Requests\UpdateourLeadersHeaderRequest;
use Illuminate\Http\Request;

class OurLeadersHeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ourLeadersHeader = ourLeadersHeader::all();
        return view('adminDashboard.headers.ourLeadersHeader.index', compact('ourLeadersHeader'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('adminDashboard.headers.ourLeadersHeader.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreourLeadersHeaderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required|min:3|max:200',
            'description' => 'required|min:3|max:500',
            'image' => 'nullable|file|image|mimes:jpeg,png,jpg,svg|max:10000'
        ]);

        $imageName = 'default.png';

        if($request->image){

            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('upload/headers/ourLeadersHeader'),$imageName);
        }


        $ourLeadersHeader = new ourLeadersHeader();
        $ourLeadersHeader->title = $request->title;
        $ourLeadersHeader->description = $request->description;
        $ourLeadersHeader->image = $imageName;
        $ourLeadersHeader->save();
        return redirect()->route('ssawo/admindashboard/ourLeadersHeader');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ourLeadersHeader  $ourLeadersHeader
     * @return \Illuminate\Http\Response
     */
    public function show(ourLeadersHeader $ourLeadersHeader)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ourLeadersHeader  $ourLeadersHeader
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
        $ourLeadersHeader = ourLeadersHeader::find($id);
        return view('adminDashboard.headers.ourLeadersHeader.insert', ['ourLeadersHeader' => $ourLeadersHeader]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateourLeadersHeaderRequest  $request
     * @param  \App\Models\ourLeadersHeader  $ourLeadersHeader
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $ourLeadersHeader = ourLeadersHeader::find($id);

        $request->validate([
            'title' => 'required|min:3|max:200',
            'description' => 'required|min:3|max:500'
        ]);

        if($request->image){
            $request->validate([
                'image' => 'nullable|file|image|mimes:jpeg,png,jpg,svg|max:10000'
            ]);

            if($ourLeadersHeader->image != 'default.png'){
                unlink(public_path('upload/headers/ourLeadersHeader').'/'.$ourLeadersHeader->image);
            }

            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('upload/headers/ourLeadersHeader'),$imageName);
        }else{
            $imageName = $ourLeadersHeader->image;
        }

        $ourLeadersHeader->title = $request->title;
        $ourLeadersHeader->description = $request->description;
        $ourLeadersHeader->image = $imageName;
        $ourLeadersHeader->save();
        return redirect()->route('ssawo/admindashboard/ourLeadersHeader');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ourLeadersHeader  $ourLeadersHeader
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        $ourLeadersHeader = ourLeadersHeader::find($id);

        if($ourLeadersHeader->image != 'default.png'){
            unlink(public_path('upload/headers/ourLeadersHeader').'/'.$ourLeadersHeader->image);
        }

        $ourLeadersHeader->delete();
        return redirect()->route('ssawo/admindashboard/ourLeadersHeader');
    }
}
