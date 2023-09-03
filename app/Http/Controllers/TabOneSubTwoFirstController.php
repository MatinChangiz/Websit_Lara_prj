<?php

namespace App\Http\Controllers;

use App\Models\tabOneSubTwoFirst;
use App\Http\Requests\StoretabOneSubTwoFirstRequest;
use App\Http\Requests\UpdatetabOneSubTwoFirstRequest;
use Illuminate\Http\Request;

class TabOneSubTwoFirstController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tabOneSubTwoFirst = tabOneSubTwoFirst::all();
        return view('adminDashboard.tabOne.tabOneSubTwo.tabOneSubTwoFirst.index', compact('tabOneSubTwoFirst'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('adminDashboard.tabOne.tabOneSubTwo.tabOneSubTwoFirst.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoretabOneSubTwoFirstRequest  $request
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
            $request->image->move(public_path('upload/tabOne/tabOneSubTwo/tabOneSubTwoFirst'),$imageName);
        }


        $tabOneSubTwoFirst = new tabOneSubTwoFirst();
        $tabOneSubTwoFirst->title = $request->title;
        $tabOneSubTwoFirst->description = $request->description;
        $tabOneSubTwoFirst->image = $imageName;
        $tabOneSubTwoFirst->save();
        return redirect()->route('ssawo/admindashboard/tabOneSubTwoFirst');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tabOneSubTwoFirst  $tabOneSubTwoFirst
     * @return \Illuminate\Http\Response
     */
    public function show(tabOneSubTwoFirst $tabOneSubTwoFirst)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tabOneSubTwoFirst  $tabOneSubTwoFirst
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
         $tabOneSubTwoFirst = tabOneSubTwoFirst::find($id);
        return view('adminDashboard.tabOne.tabOneSubTwo.tabOneSubTwoFirst.insert', ['tabOneSubTwoFirst' => $tabOneSubTwoFirst]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetabOneSubTwoFirstRequest  $request
     * @param  \App\Models\tabOneSubTwoFirst  $tabOneSubTwoFirst
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
          $tabOneSubTwoFirst = tabOneSubTwoFirst::find($id);

        $request->validate([
            'title' => 'required|min:3|max:200',
            'description' => 'required|min:3|max:1000'
        ]);

        if($request->image){
            $request->validate([
                'image' => 'nullable|file|image|mimes:jpeg,png,jpg,svg|max:10000'
            ]);

            if($tabOneSubTwoFirst->image != 'default.png'){
                unlink(public_path('upload/tabOne/tabOneSubTwo/tabOneSubTwoFirst').'/'.$tabOneSubTwoFirst->image);
            }

            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('upload/tabOne/tabOneSubTwo/tabOneSubTwoFirst'),$imageName);
        }else{
            $imageName = $tabOneSubTwoFirst->image;
        }

        $tabOneSubTwoFirst->title = $request->title;
        $tabOneSubTwoFirst->description = $request->description;
        $tabOneSubTwoFirst->image = $imageName;
        $tabOneSubTwoFirst->save();
        return redirect()->route('ssawo/admindashboard/tabOneSubTwoFirst');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tabOneSubTwoFirst  $tabOneSubTwoFirst
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
         $tabOneSubTwoFirst = tabOneSubTwoFirst::find($id);

        if($tabOneSubTwoFirst->image != 'default.png'){
            unlink(public_path('upload/tabOne/tabOneSubTwo/tabOneSubTwoFirst').'/'.$tabOneSubTwoFirst->image);
        }

        $tabOneSubTwoFirst->delete();
        return redirect()->route('ssawo/admindashboard/tabOneSubTwoFirst');
    }
}
