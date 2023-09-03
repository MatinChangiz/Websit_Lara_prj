<?php

namespace App\Http\Controllers;

use App\Models\careerFirst;
use App\Http\Requests\StorecareerFirstRequest;
use App\Http\Requests\UpdatecareerFirstRequest;
use Illuminate\Http\Request;

class CareerFirstController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
          $careerFirst = careerFirst::all();
        return view('adminDashboard.career.careerFirst.index', compact('careerFirst'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('adminDashboard.career.careerFirst.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorecareerFirstRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
          $request->validate([
            'title' => 'required|min:3|max:50',
            'location' => 'required|min:3|max:100',
            'description' => 'required|min:3|max:10000'
        ]);

        $careerFirst = new careerFirst();
        $careerFirst->title = $request->title;
        $careerFirst->location = $request->location;
        $careerFirst->applyBy = $request->applyBy;
        $careerFirst->description = $request->description;
        $careerFirst->save();
        return redirect()->route('ssawo/admindashboard/careerFirst');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\careerFirst  $careerFirst
     * @return \Illuminate\Http\Response
     */
    public function show(careerFirst $careerFirst)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\careerFirst  $careerFirst
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
        $careerFirst = careerFirst::find($id);
        return view('adminDashboard.career.careerFirst.insert', ['careerFirst' => $careerFirst]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecareerFirstRequest  $request
     * @param  \App\Models\careerFirst  $careerFirst
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $careerFirst = careerFirst::find($id);

        $request->validate([
            'title' => 'required|min:3|max:50',
            'location' => 'required|min:3|max:100',
            'description' => 'required|min:3|max:10000'
        ]);

        $careerFirst->title = $request->title;
        $careerFirst->location = $request->location;
        $careerFirst->applyBy = $request->applyBy;
        $careerFirst->description = $request->description;
        $careerFirst->save();
        return redirect()->route('ssawo/admindashboard/careerFirst');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\careerFirst  $careerFirst
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        $careerFirst = careerFirst::find($id);

        $careerFirst->delete();
        return redirect()->route('ssawo/admindashboard/careerFirst');
    }
}
