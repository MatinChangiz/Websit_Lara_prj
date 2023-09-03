<?php

namespace App\Http\Controllers;

use App\Models\ourLeadersFirst;
use App\Http\Requests\StoreourLeadersFirstRequest;
use App\Http\Requests\UpdateourLeadersFirstRequest;
use Illuminate\Http\Request;

class OurLeadersFirstController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ourLeadersFirst = ourLeadersFirst::all();
        return view('adminDashboard.ourLeaders.ourLeadersFirst.index', compact('ourLeadersFirst'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('adminDashboard.ourLeaders.ourLeadersFirst.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreourLeadersFirstRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required|min:3|max:100',
            'description' => 'required|min:3|max:5000',
            'image' => 'nullable|file|image|mimes:jpeg,png,jpg,svg|max:10000'
        ]);

        $imageName = 'default.png';

        if($request->image){

            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('upload/ourLeaders/ourLeadersFirst'),$imageName);
        }


        $ourLeadersFirst = new ourLeadersFirst();
        $ourLeadersFirst->title = $request->title;
        $ourLeadersFirst->description = $request->description;
        $ourLeadersFirst->image = $imageName;
        $ourLeadersFirst->save();
        return redirect()->route('ssawo/admindashboard/ourLeadersFirst');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ourLeadersFirst  $ourLeadersFirst
     * @return \Illuminate\Http\Response
     */
    public function show(ourLeadersFirst $ourLeadersFirst)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ourLeadersFirst  $ourLeadersFirst
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
        $ourLeadersFirst = ourLeadersFirst::find($id);
        return view('adminDashboard.ourLeaders.ourLeadersFirst.insert', ['ourLeadersFirst' => $ourLeadersFirst]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateourLeadersFirstRequest  $request
     * @param  \App\Models\ourLeadersFirst  $ourLeadersFirst
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        $ourLeadersFirst = ourLeadersFirst::find($id);

        $request->validate([
            'title' => 'required|min:3|max:100',
            'description' => 'required|min:3|max:5000'
        ]);

        if($request->image){
            $request->validate([
                'image' => 'nullable|file|image|mimes:jpeg,png,jpg,svg|max:10000'
            ]);

            if($ourLeadersFirst->image != 'default.png'){
                unlink(public_path('upload/ourLeaders/ourLeadersFirst').'/'.$ourLeadersFirst->image);
            }

            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('upload/ourLeaders/ourLeadersFirst'),$imageName);
        }else{
            $imageName = $ourLeadersFirst->image;
        }

        $ourLeadersFirst->title = $request->title;
        $ourLeadersFirst->description = $request->description;
        $ourLeadersFirst->image = $imageName;
        $ourLeadersFirst->save();
        return redirect()->route('ssawo/admindashboard/ourLeadersFirst');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ourLeadersFirst  $ourLeadersFirst
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        $ourLeadersFirst = ourLeadersFirst::find($id);

        if($ourLeadersFirst->image != 'default.png'){
            unlink(public_path('upload/ourLeaders/ourLeadersFirst').'/'.$ourLeadersFirst->image);
        }

        $ourLeadersFirst->delete();
        return redirect()->route('ssawo/admindashboard/ourLeadersFirst');
    }
}
