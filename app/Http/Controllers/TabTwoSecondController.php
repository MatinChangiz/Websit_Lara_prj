<?php

namespace App\Http\Controllers;

use App\Models\tabTwoSecond;
use App\Http\Requests\StoretabTwoSecondRequest;
use App\Http\Requests\UpdatetabTwoSecondRequest;
use Illuminate\Http\Request;

class TabTwoSecondController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tabTwoSecond = tabTwoSecond::all();
        return view('adminDashboard.tabTwo.tabTwoSecond.index', compact('tabTwoSecond'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('adminDashboard.tabTwo.tabTwoSecond.insert');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoretabTwoSecondRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required|min:3|max:200',
            'description' => 'required|min:3|max:500',
        ]);

        $tabTwoSecond = new tabTwoSecond();
        $tabTwoSecond->title = $request->title;
        $tabTwoSecond->description = $request->description;
        $tabTwoSecond->save();
        return redirect()->route('ssawo/admindashboard/tabTwoSecond');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tabTwoSecond  $tabTwoSecond
     * @return \Illuminate\Http\Response
     */
    public function show(tabTwoSecond $tabTwoSecond)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tabTwoSecond  $tabTwoSecond
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
        $tabTwoSecond = tabTwoSecond::find($id);
        return view('adminDashboard.tabTwo.tabTwoSecond.insert', ['tabTwoSecond' => $tabTwoSecond]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetabTwoSecondRequest  $request
     * @param  \App\Models\tabTwoSecond  $tabTwoSecond
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $tabTwoSecond = tabTwoSecond::find($id);

        $request->validate([
            'title' => 'required|min:3|max:200',
            'description' => 'required|min:3|max:500'
        ]);

        $tabTwoSecond->title = $request->title;
        $tabTwoSecond->description = $request->description;
        $tabTwoSecond->save();
        return redirect()->route('ssawo/admindashboard/tabTwoSecond');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tabTwoSecond  $tabTwoSecond
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        $tabTwoSecond = tabTwoSecond::find($id);

        $tabTwoSecond->delete();
        return redirect()->route('ssawo/admindashboard/tabTwoSecond');
    }
}
