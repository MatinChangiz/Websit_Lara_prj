<?php

namespace App\Http\Controllers;

use App\Models\tabOneSubThreeSecond;
use App\Http\Requests\StoretabOneSubThreeSecondRequest;
use App\Http\Requests\UpdatetabOneSubThreeSecondRequest;
use Illuminate\Http\Request;

class TabOneSubThreeSecondController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tabOneSubThreeSecond = tabOneSubThreeSecond::all();
        return view('adminDashboard.tabOne.tabOneSubThree.tabOneSubThreeSecond.index', compact('tabOneSubThreeSecond'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('adminDashboard.tabOne.tabOneSubThree.tabOneSubThreeSecond.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoretabOneSubThreeSecondRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required|min:3|max:200',
            'description' => 'required|min:3|max:1000',
        ]);


        $tabOneSubThreeSecond = new tabOneSubThreeSecond();
        $tabOneSubThreeSecond->title = $request->title;
        $tabOneSubThreeSecond->description = $request->description;
        $tabOneSubThreeSecond->save();
        return redirect()->route('ssawo/admindashboard/tabOneSubThreeSecond');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tabOneSubThreeSecond  $tabOneSubThreeSecond
     * @return \Illuminate\Http\Response
     */
    public function show(tabOneSubThreeSecond $tabOneSubThreeSecond)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tabOneSubThreeSecond  $tabOneSubThreeSecond
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
         $tabOneSubThreeSecond = tabOneSubThreeSecond::find($id);
        return view('adminDashboard.tabOne.tabOneSubThree.tabOneSubThreeSecond.insert', ['tabOneSubThreeSecond' => $tabOneSubThreeSecond]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetabOneSubThreeSecondRequest  $request
     * @param  \App\Models\tabOneSubThreeSecond  $tabOneSubThreeSecond
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
         $tabOneSubThreeSecond = tabOneSubThreeSecond::find($id);

        $request->validate([
            'title' => 'required|min:3|max:200',
            'description' => 'required|min:3|max:1000'
        ]);

        $tabOneSubThreeSecond->title = $request->title;
        $tabOneSubThreeSecond->description = $request->description;
        $tabOneSubThreeSecond->save();
        return redirect()->route('ssawo/admindashboard/tabOneSubThreeSecond');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tabOneSubThreeSecond  $tabOneSubThreeSecond
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
          $tabOneSubThreeSecond = tabOneSubThreeSecond::find($id);

        $tabOneSubThreeSecond->delete();
        return redirect()->route('ssawo/admindashboard/tabOneSubThreeSecond');
    }
}
