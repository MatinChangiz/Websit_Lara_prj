<?php

namespace App\Http\Controllers;

use App\Models\contactHeader;
use App\Http\Requests\StorecontactHeaderRequest;
use App\Http\Requests\UpdatecontactHeaderRequest;
use Illuminate\Http\Request;

class ContactHeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $contactHeader = contactHeader::all();
        return view('adminDashboard.headers.contactHeader.index', compact('contactHeader'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('adminDashboard.headers.contactHeader.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorecontactHeaderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         $request->validate([
            'title' => 'required|min:3|max:100',
            'description' => 'required|min:3|max:500',
            'image' => 'nullable|file|image|mimes:jpeg,png,jpg,svg|max:10000'
        ]);

        $imageName = 'default.png';

        if($request->image){

            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('upload/headers/contactHeader'),$imageName);
        }


        $contactHeader = new contactHeader();
        $contactHeader->title = $request->title;
        $contactHeader->description = $request->description;
        $contactHeader->image = $imageName;
        $contactHeader->save();
        return redirect()->route('ssawo/admindashboard/contactHeader');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\contactHeader  $contactHeader
     * @return \Illuminate\Http\Response
     */
    public function show(contactHeader $contactHeader)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\contactHeader  $contactHeader
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
         $contactHeader = contactHeader::find($id);
        return view('adminDashboard.headers.contactHeader.insert', ['contactHeader' => $contactHeader]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecontactHeaderRequest  $request
     * @param  \App\Models\contactHeader  $contactHeader
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
         $contactHeader = contactHeader::find($id);

        $request->validate([
            'title' => 'required|min:3|max:100',
            'description' => 'required|min:3|max:500'
        ]);

        if($request->image){
            $request->validate([
                'image' => 'nullable|file|image|mimes:jpeg,png,jpg,svg|max:10000'
            ]);

            if($contactHeader->image != 'default.png'){
                unlink(public_path('upload/headers/contactHeader').'/'.$contactHeader->image);
            }

            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('upload/headers/contactHeader'),$imageName);
        }else{
            $imageName = $contactHeader->image;
        }

        $contactHeader->title = $request->title;
        $contactHeader->description = $request->description;
        $contactHeader->image = $imageName;
        $contactHeader->save();
        return redirect()->route('ssawo/admindashboard/contactHeader');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contactHeader  $contactHeader
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
         $contactHeader = contactHeader::find($id);

        if($contactHeader->image != 'default.png'){
            unlink(public_path('upload/headers/contactHeader').'/'.$contactHeader->image);
        }

        $contactHeader->delete();
        return redirect()->route('ssawo/admindashboard/contactHeader');
    }
}
