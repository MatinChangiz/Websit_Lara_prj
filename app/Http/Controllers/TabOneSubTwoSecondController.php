<?php

namespace App\Http\Controllers;

use App\Models\tabOneSubTwoSecond;
use App\Http\Requests\StoretabOneSubTwoSecondRequest;
use App\Http\Requests\UpdatetabOneSubTwoSecondRequest;
use Illuminate\Http\Request;

class TabOneSubTwoSecondController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $tabOneSubTwoSecond = tabOneSubTwoSecond::all();
        return view('adminDashboard.tabOne.tabOneSubTwo.tabOneSubTwoSecond.index', compact('tabOneSubTwoSecond'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('adminDashboard.tabOne.tabOneSubTwo.tabOneSubTwoSecond.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoretabOneSubTwoSecondRequest  $request
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
            $request->image->move(public_path('upload/tabOne/tabOneSubTwo/tabOneSubTwoSecond'),$imageName);
        }


        $tabOneSubTwoSecond = new tabOneSubTwoSecond();
        $tabOneSubTwoSecond->title = $request->title;
        $tabOneSubTwoSecond->description = $request->description;
        $tabOneSubTwoSecond->image = $imageName;
        $tabOneSubTwoSecond->save();
        return redirect()->route('ssawo/admindashboard/tabOneSubTwoSecond');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tabOneSubTwoSecond  $tabOneSubTwoSecond
     * @return \Illuminate\Http\Response
     */
    public function show(tabOneSubTwoSecond $tabOneSubTwoSecond)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tabOneSubTwoSecond  $tabOneSubTwoSecond
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
         $tabOneSubTwoSecond = tabOneSubTwoSecond::find($id);
        return view('adminDashboard.tabOne.tabOneSubTwo.tabOneSubTwoSecond.insert', ['tabOneSubTwoSecond' => $tabOneSubTwoSecond]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetabOneSubTwoSecondRequest  $request
     * @param  \App\Models\tabOneSubTwoSecond  $tabOneSubTwoSecond
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
          $tabOneSubTwoSecond = tabOneSubTwoSecond::find($id);

        $request->validate([
            'title' => 'required|min:3|max:200',
            'description' => 'required|min:3|max:1000'
        ]);

        if($request->image){
            $request->validate([
                'image' => 'nullable|file|image|mimes:jpeg,png,jpg,svg|max:10000'
            ]);

            if($tabOneSubTwoSecond->image != 'default.png'){
                unlink(public_path('upload/tabOne/tabOneSubTwo/tabOneSubTwoSecond').'/'.$tabOneSubTwoSecond->image);
            }

            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('upload/tabOne/tabOneSubTwo/tabOneSubTwoSecond'),$imageName);
        }else{
            $imageName = $tabOneSubTwoSecond->image;
        }

        $tabOneSubTwoSecond->title = $request->title;
        $tabOneSubTwoSecond->description = $request->description;
        $tabOneSubTwoSecond->image = $imageName;
        $tabOneSubTwoSecond->save();
        return redirect()->route('ssawo/admindashboard/tabOneSubTwoSecond');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tabOneSubTwoSecond  $tabOneSubTwoSecond
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
         $tabOneSubTwoSecond = tabOneSubTwoSecond::find($id);

        if($tabOneSubTwoSecond->image != 'default.png'){
            unlink(public_path('upload/tabOne/tabOneSubTwo/tabOneSubTwoSecond').'/'.$tabOneSubTwoSecond->image);
        }

        $tabOneSubTwoSecond->delete();
        return redirect()->route('ssawo/admindashboard/tabOneSubTwoSecond');
    }
}
