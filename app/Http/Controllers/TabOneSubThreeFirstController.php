<?php

namespace App\Http\Controllers;

use App\Models\tabOneSubThreeFirst;
use App\Http\Requests\StoretabOneSubThreeFirstRequest;
use App\Http\Requests\UpdatetabOneSubThreeFirstRequest;
use Illuminate\Http\Request;

class TabOneSubThreeFirstController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tabOneSubThreeFirst = tabOneSubThreeFirst::all();
        return view('adminDashboard.tabOne.tabOneSubThree.tabOneSubThreeFirst.index', compact('tabOneSubThreeFirst'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('adminDashboard.tabOne.tabOneSubThree.tabOneSubThreeFirst.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoretabOneSubThreeFirstRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required|min:3|max:200',
            'description' => 'required|min:3|max:1000',
            'image' => 'nullable|file|image|mimes:jpeg,png,jpg,svg|max:10000'
        ]);

        $imageName = 'default.png';

        if($request->image){

            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('upload/tabOne/tabOneSubThree/tabOneSubThreeFirst'),$imageName);
        }


        $tabOneSubThreeFirst = new tabOneSubThreeFirst();
        $tabOneSubThreeFirst->title = $request->title;
        $tabOneSubThreeFirst->description = $request->description;
        $tabOneSubThreeFirst->image = $imageName;
        $tabOneSubThreeFirst->save();
        return redirect()->route('ssawo/admindashboard/tabOneSubThreeFirst');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tabOneSubThreeFirst  $tabOneSubThreeFirst
     * @return \Illuminate\Http\Response
     */
    public function show(tabOneSubThreeFirst $tabOneSubThreeFirst)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tabOneSubThreeFirst  $tabOneSubThreeFirst
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
         $tabOneSubThreeFirst = tabOneSubThreeFirst::find($id);
        return view('adminDashboard.tabOne.tabOneSubThree.tabOneSubThreeFirst.insert', ['tabOneSubThreeFirst' => $tabOneSubThreeFirst]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetabOneSubThreeFirstRequest  $request
     * @param  \App\Models\tabOneSubThreeFirst  $tabOneSubThreeFirst
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
         $tabOneSubThreeFirst = tabOneSubThreeFirst::find($id);

        $request->validate([
            'title' => 'required|min:3|max:200',
            'description' => 'required|min:3|max:1000'
        ]);

        if($request->image){
            $request->validate([
                'image' => 'nullable|file|image|mimes:jpeg,png,jpg,svg|max:10000'
            ]);

            if($tabOneSubThreeFirst->image != 'default.png'){
                unlink(public_path('upload/tabOne/tabOneSubThree/tabOneSubThreeFirst').'/'.$tabOneSubThreeFirst->image);
            }

            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('upload/tabOne/tabOneSubThree/tabOneSubThreeFirst'),$imageName);
        }else{
            $imageName = $tabOneSubThreeFirst->image;
        }

        $tabOneSubThreeFirst->title = $request->title;
        $tabOneSubThreeFirst->description = $request->description;
        $tabOneSubThreeFirst->image = $imageName;
        $tabOneSubThreeFirst->save();
        return redirect()->route('ssawo/admindashboard/tabOneSubThreeFirst');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tabOneSubThreeFirst  $tabOneSubThreeFirst
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
          $tabOneSubThreeFirst = tabOneSubThreeFirst::find($id);

        if($tabOneSubThreeFirst->image != 'default.png'){
            unlink(public_path('upload/tabOne/tabOneSubThree/tabOneSubThreeFirst').'/'.$tabOneSubThreeFirst->image);
        }

        $tabOneSubThreeFirst->delete();
        return redirect()->route('ssawo/admindashboard/tabOneSubThreeFirst');
    }
}
