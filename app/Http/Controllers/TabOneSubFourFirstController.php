<?php

namespace App\Http\Controllers;

use App\Models\tabOneSubFourFirst;
use App\Http\Requests\StoretabOneSubFourFirstRequest;
use App\Http\Requests\UpdatetabOneSubFourFirstRequest;
use Illuminate\Http\Request;

class TabOneSubFourFirstController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $tabOneSubFourFirst = tabOneSubFourFirst::all();
        return view('adminDashboard.tabOne.tabOneSubFour.tabOneSubFourFirst.index', compact('tabOneSubFourFirst'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('adminDashboard.tabOne.tabOneSubFour.tabOneSubFourFirst.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoretabOneSubFourFirstRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         $request->validate([
            'title' => 'required|min:3|max:200',
            'description' => 'required|min:3|max:1000',
        ]);


        $tabOneSubFourFirst = new tabOneSubFourFirst();
        $tabOneSubFourFirst->title = $request->title;
        $tabOneSubFourFirst->description = $request->description;
        $tabOneSubFourFirst->save();
        return redirect()->route('ssawo/admindashboard/tabOneSubFourFirst');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tabOneSubFourFirst  $tabOneSubFourFirst
     * @return \Illuminate\Http\Response
     */
    public function show(tabOneSubFourFirst $tabOneSubFourFirst)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tabOneSubFourFirst  $tabOneSubFourFirst
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
          $tabOneSubFourFirst = tabOneSubFourFirst::find($id);
        return view('adminDashboard.tabOne.tabOneSubFour.tabOneSubFourFirst.insert', ['tabOneSubFourFirst' => $tabOneSubFourFirst]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetabOneSubFourFirstRequest  $request
     * @param  \App\Models\tabOneSubFourFirst  $tabOneSubFourFirst
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
          $tabOneSubFourFirst = tabOneSubFourFirst::find($id);

        $request->validate([
            'title' => 'required|min:3|max:200',
            'description' => 'required|min:3|max:1000'
        ]);

        $tabOneSubFourFirst->title = $request->title;
        $tabOneSubFourFirst->description = $request->description;
        $tabOneSubFourFirst->save();
        return redirect()->route('ssawo/admindashboard/tabOneSubFourFirst');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tabOneSubFourFirst  $tabOneSubFourFirst
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
           $tabOneSubFourFirst = tabOneSubFourFirst::find($id);

        $tabOneSubFourFirst->delete();
        return redirect()->route('ssawo/admindashboard/tabOneSubFourFirst');
    }
}
