<?php

namespace App\Http\Controllers;

use App\Models\tabOneSubFourThird;
use App\Http\Requests\StoretabOneSubFourThirdRequest;
use App\Http\Requests\UpdatetabOneSubFourThirdRequest;
use Illuminate\Http\Request;

class TabOneSubFourThirdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $tabOneSubFourThird = tabOneSubFourThird::all();
        return view('adminDashboard.tabOne.tabOneSubFour.tabOneSubFourThird.index', compact('tabOneSubFourThird'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('adminDashboard.tabOne.tabOneSubFour.tabOneSubFourThird.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoretabOneSubFourThirdRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         $request->validate([
            'title' => 'required|min:3|max:200',
            'description' => 'required|min:3|max:1000',
        ]);


        $tabOneSubFourThird = new tabOneSubFourThird();
        $tabOneSubFourThird->title = $request->title;
        $tabOneSubFourThird->description = $request->description;
        $tabOneSubFourThird->save();
        return redirect()->route('ssawo/admindashboard/tabOneSubFourThird');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tabOneSubFourThird  $tabOneSubFourThird
     * @return \Illuminate\Http\Response
     */
    public function show(tabOneSubFourThird $tabOneSubFourThird)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tabOneSubFourThird  $tabOneSubFourThird
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
          $tabOneSubFourThird = tabOneSubFourThird::find($id);
        return view('adminDashboard.tabOne.tabOneSubFour.tabOneSubFourThird.insert', ['tabOneSubFourThird' => $tabOneSubFourThird]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetabOneSubFourThirdRequest  $request
     * @param  \App\Models\tabOneSubFourThird  $tabOneSubFourThird
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        $tabOneSubFourThird = tabOneSubFourThird::find($id);

        $request->validate([
            'title' => 'required|min:3|max:200',
            'description' => 'required|min:3|max:1000'
        ]);

        $tabOneSubFourThird->title = $request->title;
        $tabOneSubFourThird->description = $request->description;
        $tabOneSubFourThird->save();
        return redirect()->route('ssawo/admindashboard/tabOneSubFourThird');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tabOneSubFourThird  $tabOneSubFourThird
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        $tabOneSubFourThird = tabOneSubFourThird::find($id);

        $tabOneSubFourThird->delete();
        return redirect()->route('ssawo/admindashboard/tabOneSubFourThird');
    }
}
