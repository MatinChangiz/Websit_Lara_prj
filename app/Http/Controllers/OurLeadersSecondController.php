<?php

namespace App\Http\Controllers;

use App\Models\ourLeadersSecond;
use App\Http\Requests\StoreourLeadersSecondRequest;
use App\Http\Requests\UpdateourLeadersSecondRequest;
use Illuminate\Http\Request;

class OurLeadersSecondController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $ourLeadersSecond = ourLeadersSecond::all();
        return view('adminDashboard.ourLeaders.ourLeadersSecond.index', compact('ourLeadersSecond'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('adminDashboard.ourLeaders.ourLeadersSecond.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreourLeadersSecondRequest  $request
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
            $request->image->move(public_path('upload/ourLeaders/ourLeadersSecond'),$imageName);
        }


        $ourLeadersSecond = new ourLeadersSecond();
        $ourLeadersSecond->title = $request->title;
        $ourLeadersSecond->position = $request->position;
        $ourLeadersSecond->description = $request->description;
        $ourLeadersSecond->image = $imageName;
        $ourLeadersSecond->save();
        return redirect()->route('ssawo/admindashboard/ourLeadersSecond');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ourLeadersSecond  $ourLeadersSecond
     * @return \Illuminate\Http\Response
     */
    public function show(ourLeadersSecond $ourLeadersSecond)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ourLeadersSecond  $ourLeadersSecond
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
           $ourLeadersSecond = ourLeadersSecond::find($id);
        return view('adminDashboard.ourLeaders.ourLeadersSecond.insert', ['ourLeadersSecond' => $ourLeadersSecond]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateourLeadersSecondRequest  $request
     * @param  \App\Models\ourLeadersSecond  $ourLeadersSecond
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $ourLeadersSecond = ourLeadersSecond::find($id);

        $request->validate([
            'title' => 'required|min:3|max:50',
            'position' => 'required|min:3|max:50',
            'description' => 'required|min:3|max:3000'
        ]);

        if($request->image){
            $request->validate([
                'image' => 'nullable|file|image|mimes:jpeg,png,jpg,svg|max:10000'
            ]);

            if($ourLeadersSecond->image != 'default.png'){
                unlink(public_path('upload/ourLeaders/ourLeadersSecond').'/'.$ourLeadersSecond->image);
            }

            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('upload/ourLeaders/ourLeadersSecond'),$imageName);
        }else{
            $imageName = $ourLeadersSecond->image;
        }

        $ourLeadersSecond->title = $request->title;
        $ourLeadersSecond->position = $request->position;
        $ourLeadersSecond->description = $request->description;
        $ourLeadersSecond->image = $imageName;
        $ourLeadersSecond->save();
        return redirect()->route('ssawo/admindashboard/ourLeadersSecond');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ourLeadersSecond  $ourLeadersSecond
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
           $ourLeadersSecond = ourLeadersSecond::find($id);

        if($ourLeadersSecond->image != 'default.png'){
            unlink(public_path('upload/ourLeaders/ourLeadersSecond').'/'.$ourLeadersSecond->image);
        }

        $ourLeadersSecond->delete();
        return redirect()->route('ssawo/admindashboard/ourLeadersSecond');
    }
}
