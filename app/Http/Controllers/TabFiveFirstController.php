<?php

namespace App\Http\Controllers;

use App\Models\tabFiveFirst;
use Illuminate\Http\Request;
// use Illuminate\Pagination\Paginator;
use App\Http\Requests\StoretabFiveFirstRequest;
// use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Requests\UpdatetabFiveFirstRequest;

class TabFiveFirstController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tabFiveFirst = tabFiveFirst::all();
        return view('adminDashboard.tabFive.tabFiveFirst.index', compact('tabFiveFirst'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('adminDashboard.tabFive.tabFiveFirst.insert');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoretabFiveFirstRequest  $request
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
            $request->image->move(public_path('upload/tabFive/tabFiveFirst'),$imageName);
        }


        $tabFiveFirst = new tabFiveFirst();
        $tabFiveFirst->title = $request->title;
        $tabFiveFirst->description = $request->description;
        $tabFiveFirst->image = $imageName;
        $tabFiveFirst->save();
        return redirect()->route('ssawo/admindashboard/tabFiveFirst');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tabFiveFirst  $tabFiveFirst
     * @return \Illuminate\Http\Response
     */
    public function show(tabFiveFirst $tabFiveFirst)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tabFiveFirst  $tabFiveFirst
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
        $tabFiveFirst = tabFiveFirst::find($id);
        return view('adminDashboard.tabFive.tabFiveFirst.insert', ['tabFiveFirst' => $tabFiveFirst]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetabFiveFirstRequest  $request
     * @param  \App\Models\tabFiveFirst  $tabFiveFirst
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $tabFiveFirst = tabFiveFirst::find($id);

        $request->validate([
            'title' => 'required|min:3|max:200',
            'description' => 'required|min:3|max:500'
        ]);

        if($request->image){
            $request->validate([
                'image' => 'nullable|file|image|mimes:jpeg,png,jpg,svg|max:10000'
            ]);

            if($tabFiveFirst->image != 'default.png'){
                unlink(public_path('upload/tabFive/tabFiveFirst').'/'.$tabFiveFirst->image);
            }

            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('upload/tabFive/tabFiveFirst'),$imageName);
        }else{
            $imageName = $tabFiveFirst->image;
        }

        $tabFiveFirst->title = $request->title;
        $tabFiveFirst->description = $request->description;
        $tabFiveFirst->image = $imageName;
        $tabFiveFirst->save();
        return redirect()->route('ssawo/admindashboard/tabFiveFirst');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tabFiveFirst  $tabFiveFirst
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        $tabFiveFirst = tabFiveFirst::find($id);

        if($tabFiveFirst->image != 'default.png'){
            unlink(public_path('upload/tabFive/tabFiveFirst').'/'.$tabFiveFirst->image);
        }

        $tabFiveFirst->delete();
        return redirect()->route('ssawo/admindashboard/tabFiveFirst');
    }
}
