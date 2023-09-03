<?php

namespace App\Http\Controllers;

use App\Models\pressModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $press = pressModel::all();
        return view('adminDashboard.news.index',compact('press'));
    }

    public function press()
    {
        $presses = pressModel::orderBy('id',"desc")->take(3)->get();
        return view('main')->with('presses',$presses);
    }

    public function news()
    {
        $news = pressModel::orderBy('id',"desc")->paginate(15);
        return view('layoutPages.news',compact('news'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('adminDashboard.news.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required|min:3|max:100',
            'description' => 'required|min:3|max:350',
            'image' => 'nullable|file|image|mimes:jpeg,png,jpg,svg|max:10000'
        ]);

        $imageName = 'default.png';

        if($request->image){

            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('upload'),$imageName);
        }


        $press = new pressModel();
        $press->title = $request->title;
        $press->description = $request->description;
        $press->image = $imageName;
        $press->save();
        return redirect()->route('ssawo/admindashboard/press');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        // return $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $press = pressModel::find($id);
        return view('adminDashboard.news.form', ['press' => $press]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $press = pressModel::find($id);

        $request->validate([
            'title' => 'required|min:3|max:100',
            'description' => 'required|min:3|max:350'
        ]);

        if($request->image){
            $request->validate([
                'image' => 'nullable|file|image|mimes:jpeg,png,jpg,svg|max:10000'
            ]);

            if($press->image != 'default.png'){
                unlink(public_path('upload').'/'.$press->image);
            }

            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('upload'),$imageName);
        }else{
            $imageName = $press->image;
        }

        $press->title = $request->title;
        $press->description = $request->description;
        $press->image = $imageName;
        $press->save();
        return redirect()->route('ssawo/admindashboard/press');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $press = pressModel::find($id);

        if($press->image != 'default.png'){
            unlink(public_path('upload').'/'.$press->image);
        }

        $press->delete();
        return redirect()->route('ssawo/admindashboard/press');
    }
}
