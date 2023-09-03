<?php

namespace App\Http\Controllers;

use App\Models\careerHeader;
use App\Http\Requests\StorecareerHeaderRequest;
use App\Http\Requests\UpdatecareerHeaderRequest;
use Illuminate\Http\Request;

class CareerHeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $careerHeader = careerHeader::all();
        return view('adminDashboard.headers.careerHeader.index', compact('careerHeader'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('adminDashboard.headers.careerHeader.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorecareerHeaderRequest  $request
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
            $request->image->move(public_path('upload/headers/careerHeader'),$imageName);
        }


        $careerHeader = new careerHeader();
        $careerHeader->title = $request->title;
        $careerHeader->description = $request->description;
        $careerHeader->image = $imageName;
        $careerHeader->save();
        return redirect()->route('ssawo/admindashboard/careerHeader');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\careerHeader  $careerHeader
     * @return \Illuminate\Http\Response
     */
    public function show(careerHeader $careerHeader)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\careerHeader  $careerHeader
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
         $careerHeader = careerHeader::find($id);
        return view('adminDashboard.headers.careerHeader.insert', ['careerHeader' => $careerHeader]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecareerHeaderRequest  $request
     * @param  \App\Models\careerHeader  $careerHeader
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
         $careerHeader = careerHeader::find($id);

        $request->validate([
            'title' => 'required|min:3|max:100',
            'description' => 'required|min:3|max:500'
        ]);

        if($request->image){
            $request->validate([
                'image' => 'nullable|file|image|mimes:jpeg,png,jpg,svg|max:10000'
            ]);

            if($careerHeader->image != 'default.png'){
                unlink(public_path('upload/headers/careerHeader').'/'.$careerHeader->image);
            }

            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('upload/headers/careerHeader'),$imageName);
        }else{
            $imageName = $careerHeader->image;
        }

        $careerHeader->title = $request->title;
        $careerHeader->description = $request->description;
        $careerHeader->image = $imageName;
        $careerHeader->save();
        return redirect()->route('ssawo/admindashboard/careerHeader');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\careerHeader  $careerHeader
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         $careerHeader = careerHeader::find($id);

        if($careerHeader->image != 'default.png'){
            unlink(public_path('upload/headers/careerHeader').'/'.$careerHeader->image);
        }

        $careerHeader->delete();
        return redirect()->route('ssawo/admindashboard/careerHeader');
    }
}
