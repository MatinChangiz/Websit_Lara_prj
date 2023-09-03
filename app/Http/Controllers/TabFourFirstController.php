<?php

namespace App\Http\Controllers;

use App\Models\tabFourFirst;
use App\Http\Requests\StoretabFourFirstRequest;
use App\Http\Requests\UpdatetabFourFirstRequest;
use Illuminate\Http\Request;

class TabFourFirstController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tabFourFirst = tabFourFirst::all();
        return view('adminDashboard.tabFour.tabFourFirst.index', compact('tabFourFirst'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('adminDashboard.tabFour.tabFourFirst.insert');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoretabFourFirstRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required|min:3|max:200',
            'description1' => 'required|min:3|max:2000',
            'description2' => 'required|min:3|max:2000',
            'image' => 'nullable|file|image|mimes:jpeg,png,jpg,svg|max:10000'
        ]);

        $imageName = 'default.png';

        if($request->image){

            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('upload/tabFour/tabFourFirst'),$imageName);
        }


        $tabFourFirst = new tabFourFirst();
        $tabFourFirst->title = $request->title;
        $tabFourFirst->description1 = $request->description1;
        $tabFourFirst->description2 = $request->description2;
        $tabFourFirst->image = $imageName;
        $tabFourFirst->save();
        return redirect()->route('ssawo/admindashboard/tabFourFirst');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tabFourFirst  $tabFourFirst
     * @return \Illuminate\Http\Response
     */
    public function show(tabFourFirst $tabFourFirst)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tabFourFirst  $tabFourFirst
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
        $tabFourFirst = tabFourFirst::find($id);
        return view('adminDashboard.tabFour.tabFourFirst.insert', ['tabFourFirst' => $tabFourFirst]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetabFourFirstRequest  $request
     * @param  \App\Models\tabFourFirst  $tabFourFirst
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        $tabFourFirst = tabFourFirst::find($id);

        $request->validate([
            'title' => 'required|min:3|max:200',
            'description1' => 'required|min:3|max:2000',
            'description2' => 'required|min:3|max:2000'
        ]);

        if($request->image){
            $request->validate([
                'image' => 'nullable|file|image|mimes:jpeg,png,jpg,svg|max:10000'
            ]);

            if($tabFourFirst->image != 'default.png'){
                unlink(public_path('upload/tabFour/tabFourFirst').'/'.$tabFourFirst->image);
            }

            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('upload/tabFour/tabFourFirst'),$imageName);
        }else{
            $imageName = $tabFourFirst->image;
        }

        $tabFourFirst->title = $request->title;
        $tabFourFirst->description1 = $request->description1;
        $tabFourFirst->description2 = $request->description2;
        $tabFourFirst->image = $imageName;
        $tabFourFirst->save();
        return redirect()->route('ssawo/admindashboard/tabFourFirst');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tabFourFirst  $tabFourFirst
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        $tabFourFirst = tabFourFirst::find($id);

        if($tabFourFirst->image != 'default.png'){
            unlink(public_path('upload/tabFour/tabFourFirst').'/'.$tabFourFirst->image);
        }

        $tabFourFirst->delete();
        return redirect()->route('ssawo/admindashboard/tabFourFirst');
    }
}
