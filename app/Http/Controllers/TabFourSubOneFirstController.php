<?php

namespace App\Http\Controllers;

use App\Models\tabFourSubOneFirst;
use App\Http\Requests\StoretabFourSubOneFirstRequest;
use App\Http\Requests\UpdatetabFourSubOneFirstRequest;
use Illuminate\Http\Request;

class TabFourSubOneFirstController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $tabFourSubOneFirst = tabFourSubOneFirst::all();
        return view('adminDashboard.tabFour.tabFourSubOne.tabFourSubOneFirst.index', compact('tabFourSubOneFirst'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('adminDashboard.tabFour.tabFourSubOne.tabFourSubOneFirst.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoretabFourSubOneFirstRequest  $request
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
            $request->image->move(public_path('upload/tabFour/tabFourSubOne/tabFourSubOneFirst'),$imageName);
        }


        $tabFourSubOneFirst = new tabFourSubOneFirst();
        $tabFourSubOneFirst->title = $request->title;
        $tabFourSubOneFirst->description = $request->description;
        $tabFourSubOneFirst->image = $imageName;
        $tabFourSubOneFirst->save();
        return redirect()->route('ssawo/admindashboard/tabFourSubOneFirst');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tabFourSubOneFirst  $tabFourSubOneFirst
     * @return \Illuminate\Http\Response
     */
    public function show(tabFourSubOneFirst $tabFourSubOneFirst)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tabFourSubOneFirst  $tabFourSubOneFirst
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
          $tabFourSubOneFirst = tabFourSubOneFirst::find($id);
        return view('adminDashboard.tabFour.tabFourSubOne.tabFourSubOneFirst.insert', ['tabFourSubOneFirst' => $tabFourSubOneFirst]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetabFourSubOneFirstRequest  $request
     * @param  \App\Models\tabFourSubOneFirst  $tabFourSubOneFirst
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
          $tabFourSubOneFirst = tabFourSubOneFirst::find($id);

        $request->validate([
            'title' => 'required|min:3|max:200',
            'description' => 'required|min:3|max:500'
        ]);

        if($request->image){
            $request->validate([
                'image' => 'nullable|file|image|mimes:jpeg,png,jpg,svg|max:10000'
            ]);

            if($tabFourSubOneFirst->image != 'default.png'){
                unlink(public_path('upload/tabFour/tabFourSubOne/tabFourSubOneFirst').'/'.$tabFourSubOneFirst->image);
            }

            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('upload/tabFour/tabFourSubOne/tabFourSubOneFirst'),$imageName);
        }else{
            $imageName = $tabFourSubOneFirst->image;
        }

        $tabFourSubOneFirst->title = $request->title;
        $tabFourSubOneFirst->description = $request->description;
        $tabFourSubOneFirst->image = $imageName;
        $tabFourSubOneFirst->save();
        return redirect()->route('ssawo/admindashboard/tabFourSubOneFirst');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tabFourSubOneFirst  $tabFourSubOneFirst
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
         $tabFourSubOneFirst = tabFourSubOneFirst::find($id);

        if($tabFourSubOneFirst->image != 'default.png'){
            unlink(public_path('upload/tabFour/tabFourSubOne/tabFourSubOneFirst').'/'.$tabFourSubOneFirst->image);
        }

        $tabFourSubOneFirst->delete();
        return redirect()->route('ssawo/admindashboard/tabFourSubOneFirst');
    }
}
