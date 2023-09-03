<?php

namespace App\Http\Controllers;

use App\Models\tabOneSubThreeThird;
use App\Http\Requests\StoretabOneSubThreeThirdRequest;
use App\Http\Requests\UpdatetabOneSubThreeThirdRequest;
use Illuminate\Http\Request;

class TabOneSubThreeThirdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tabOneSubThreeThird = tabOneSubThreeThird::all();
        return view('adminDashboard.tabOne.tabOneSubThree.tabOneSubThreeThird.index', compact('tabOneSubThreeThird'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('adminDashboard.tabOne.tabOneSubThree.tabOneSubThreeThird.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoretabOneSubThreeThirdRequest  $request
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
            $request->image->move(public_path('upload/tabOne/tabOneSubThree/tabOneSubThreeThird'),$imageName);
        }


        $tabOneSubThreeThird = new tabOneSubThreeThird();
        $tabOneSubThreeThird->title = $request->title;
        $tabOneSubThreeThird->description = $request->description;
        $tabOneSubThreeThird->image = $imageName;
        $tabOneSubThreeThird->save();
        return redirect()->route('ssawo/admindashboard/tabOneSubThreeThird');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tabOneSubThreeThird  $tabOneSubThreeThird
     * @return \Illuminate\Http\Response
     */
    public function show(tabOneSubThreeThird $tabOneSubThreeThird)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tabOneSubThreeThird  $tabOneSubThreeThird
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
         $tabOneSubThreeThird = tabOneSubThreeThird::find($id);
        return view('adminDashboard.tabOne.tabOneSubThree.tabOneSubThreeThird.insert', ['tabOneSubThreeThird' => $tabOneSubThreeThird]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetabOneSubThreeThirdRequest  $request
     * @param  \App\Models\tabOneSubThreeThird  $tabOneSubThreeThird
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
         $tabOneSubThreeThird = tabOneSubThreeThird::find($id);

        $request->validate([
            'title' => 'required|min:3|max:200',
            'description' => 'required|min:3|max:1000'
        ]);

        if($request->image){
            $request->validate([
                'image' => 'nullable|file|image|mimes:jpeg,png,jpg,svg|max:10000'
            ]);

            if($tabOneSubThreeThird->image != 'default.png'){
                unlink(public_path('upload/tabOne/tabOneSubThree/tabOneSubThreeThird').'/'.$tabOneSubThreeThird->image);
            }

            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('upload/tabOne/tabOneSubThree/tabOneSubThreeThird'),$imageName);
        }else{
            $imageName = $tabOneSubThreeThird->image;
        }

        $tabOneSubThreeThird->title = $request->title;
        $tabOneSubThreeThird->description = $request->description;
        $tabOneSubThreeThird->image = $imageName;
        $tabOneSubThreeThird->save();
        return redirect()->route('ssawo/admindashboard/tabOneSubThreeThird');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tabOneSubThreeThird  $tabOneSubThreeThird
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
          $tabOneSubThreeThird = tabOneSubThreeThird::find($id);

        if($tabOneSubThreeThird->image != 'default.png'){
            unlink(public_path('upload/tabOne/tabOneSubThree/tabOneSubThreeThird').'/'.$tabOneSubThreeThird->image);
        }

        $tabOneSubThreeThird->delete();
        return redirect()->route('ssawo/admindashboard/tabOneSubThreeThird');
    }
}
