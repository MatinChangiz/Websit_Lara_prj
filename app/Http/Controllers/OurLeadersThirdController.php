<?php

namespace App\Http\Controllers;

use App\Models\ourLeadersThird;
use App\Http\Requests\StoreourLeadersThirdRequest;
use App\Http\Requests\UpdateourLeadersThirdRequest;
use Illuminate\Http\Request;

class OurLeadersThirdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ourLeadersThird = ourLeadersThird::all();
        return view('adminDashboard.ourLeaders.ourLeadersThird.index', compact('ourLeadersThird'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('adminDashboard.ourLeaders.ourLeadersThird.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreourLeadersThirdRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required|min:3|max:50',
            'position' => 'required|min:3|max:50',
            'description' => 'required|min:3|max:3000',
            'image' => 'nullable|file|image|mimes:jpeg,png,jpg,svg|max:10000'
        ]);

        $imageName = 'default.png';

        if($request->image){

            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('upload/ourLeaders/ourLeadersThird'),$imageName);
        }


        $ourLeadersThird = new ourLeadersThird();
        $ourLeadersThird->title = $request->title;
        $ourLeadersThird->position = $request->position;
        $ourLeadersThird->description = $request->description;
        $ourLeadersThird->image = $imageName;
        $ourLeadersThird->save();
        return redirect()->route('ssawo/admindashboard/ourLeadersThird');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ourLeadersThird  $ourLeadersThird
     * @return \Illuminate\Http\Response
     */
    public function show(ourLeadersThird $ourLeadersThird)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ourLeadersThird  $ourLeadersThird
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
        $ourLeadersThird = ourLeadersThird::find($id);
        return view('adminDashboard.ourLeaders.ourLeadersThird.insert', ['ourLeadersThird' => $ourLeadersThird]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateourLeadersThirdRequest  $request
     * @param  \App\Models\ourLeadersThird  $ourLeadersThird
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $ourLeadersThird = ourLeadersThird::find($id);

        $request->validate([
            'title' => 'required|min:3|max:50',
            'position' => 'required|min:3|max:50',
            'description' => 'required|min:3|max:3000'
        ]);

        if($request->image){
            $request->validate([
                'image' => 'nullable|file|image|mimes:jpeg,png,jpg,svg|max:10000'
            ]);

            if($ourLeadersThird->image != 'default.png'){
                unlink(public_path('upload/ourLeaders/ourLeadersThird').'/'.$ourLeadersThird->image);
            }

            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('upload/ourLeaders/ourLeadersThird'),$imageName);
        }else{
            $imageName = $ourLeadersThird->image;
        }

        $ourLeadersThird->title = $request->title;
        $ourLeadersThird->position = $request->position;
        $ourLeadersThird->description = $request->description;
        $ourLeadersThird->image = $imageName;
        $ourLeadersThird->save();
        return redirect()->route('ssawo/admindashboard/ourLeadersThird');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ourLeadersThird  $ourLeadersThird
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        $ourLeadersThird = ourLeadersThird::find($id);

        if($ourLeadersThird->image != 'default.png'){
            unlink(public_path('upload/ourLeaders/ourLeadersThird').'/'.$ourLeadersThird->image);
        }

        $ourLeadersThird->delete();
        return redirect()->route('ssawo/admindashboard/ourLeadersThird');
    }
}
