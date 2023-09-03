<?php

namespace App\Http\Controllers;

use App\Models\fightPoverty;
use App\Http\Requests\StorefightPovertyRequest;
use App\Http\Requests\UpdatefightPovertyRequest;
use Illuminate\Http\Request;


class FightPovertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $fightPoverty = fightPoverty::all();
        return view('adminDashboard.what_we_do.index_what_we_do',compact('fightPoverty'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('adminDashboard.what_we_do.insert_what_we_do');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorefightPovertyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title' => 'required|min:3|max:50',
            'description' => 'required|min:3|max:300',
            'title2' => 'required|min:3|max:50',
            'description2' => 'required|min:3|max:2000',
            'image' => 'nullable|file|image|mimes:jpeg,png,jpg,svg|max:10000',
            'image2' => 'nullable|file|image|mimes:jpeg,png,jpg,svg|max:10000',
            'imageicon' => 'nullable|file|image|mimes:jpeg,png,jpg,svg|max:10000'
        ]);

        $imageName = 'default.png';
        $imageName2 = 'default2.png';
        $imageNameIcon = 'defaultIcon.png';


        if($request->image){
            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('upload/tabTwo/fight'),$imageName);
        }
        if($request->image2){
            $imageName2 = date('mdYHis').uniqid().'.'.$request->image2->extension();
            $request->image2->move(public_path('upload/tabTwo/fight'),$imageName2);
        }
        if($request->imageicon){
            $imageNameIcon = date('mdYHis').uniqid().'.'.$request->imageicon->extension();
            $request->imageicon->move(public_path('upload/tabTwo/fight/icon'),$imageNameIcon);
        }


        $fightPoverty = new fightPoverty();
        $fightPoverty->title = $request->title;
        $fightPoverty->description = $request->description;
        $fightPoverty->title2 = $request->title2;
        $fightPoverty->description2 = $request->description2;
        $fightPoverty->image = $imageName;
        $fightPoverty->image2 = $imageName2;
        $fightPoverty->imageicon = $imageNameIcon;
        $fightPoverty->save();
        return redirect()->route('ssawo/admindashboard/what-we-do');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\fightPoverty  $fightPoverty
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        //
        // $fight = fightPoverty::where('id', $id)->get();
        $fight = fightPoverty::find($id);

        return view('layoutPages.what_we_do.crisis-response', ['fight' => $fight]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\fightPoverty  $fightPoverty
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $fightPoverty = fightPoverty::find($id);
        return view('adminDashboard.what_we_do.insert_what_we_do', ['fightPoverty' => $fightPoverty]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatefightPovertyRequest  $request
     * @param  \App\Models\fightPoverty  $fightPoverty
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $fightPoverty = fightPoverty::find($id);

        $request->validate([
            'title' => 'required|min:3|max:50',
            'description' => 'required|min:3|max:300',
            'title2' => 'required|min:3|max:50',
            'description2' => 'required|min:3|max:2000'

        ]);

        // image
        if($request->image){
            $request->validate([
                'image' => 'nullable|file|image|mimes:jpeg,png,jpg,svg|max:10000'
            ]);

            if($fightPoverty->image != 'default.png'){
                unlink(public_path('upload/tabTwo/fight').'/'.$fightPoverty->image);
            }

            $imageName = date('mdYHis').uniqid().'.'.$request->image->extension();
            $request->image->move(public_path('upload/tabTwo/fight'),$imageName);
        }
        else{
            $imageName = $fightPoverty->image;
        }

        // image more info
        if($request->image2){
            $request->validate([
                'image2' => 'nullable|file|image|mimes:jpeg,png,jpg,svg|max:10000'
            ]);

            if($fightPoverty->image2 != 'default2.png'){
                unlink(public_path('upload/tabTwo/fight').'/'.$fightPoverty->image2);
            }

            $imageName2 = date('mdYHis').uniqid().'.'.$request->image2->extension();
            $request->image2->move(public_path('upload/tabTwo/fight'),$imageName2);
        }
        else{
            $imageName2 = $fightPoverty->image2;
        }

        // image for icon
        if($request->imageicon){
            $request->validate([
                'imageicon' => 'nullable|file|image|mimes:jpeg,png,jpg,svg|max:10000'
            ]);

            if($fightPoverty->imageicon != 'defaultIcon.png'){
                unlink(public_path('upload/tabTwo/fight/icon').'/'.$fightPoverty->imageicon);
            }

            $imageNameIcon = date('mdYHis').uniqid().'.'.$request->imageicon->extension();
            $request->imageicon->move(public_path('upload/tabTwo/fight/icon'),$imageNameIcon);
        }
        else{
            $imageNameIcon = $fightPoverty->imageicon;
        }


        $fightPoverty->title = $request->title;
        $fightPoverty->description = $request->description;
        $fightPoverty->title2 = $request->title2;
        $fightPoverty->description2 = $request->description2;
        $fightPoverty->image = $imageName;
        $fightPoverty->image2 = $imageName2;
        $fightPoverty->imageicon = $imageNameIcon;
        $fightPoverty->save();
        return redirect()->route('ssawo/admindashboard/what-we-do');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\fightPoverty  $fightPoverty
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $fightPoverty = fightPoverty::find($id);

        if($fightPoverty->image != 'default.png'){
            unlink(public_path('upload/tabTwo/fight').'/'.$fightPoverty->image);
        }
        if($fightPoverty->image2 != 'default2.png'){
            unlink(public_path('upload/tabTwo/fight').'/'.$fightPoverty->image2);
        }
        if($fightPoverty->imageicon != 'defaultIcon.png'){
            unlink(public_path('upload/tabTwo/fight/icon').'/'.$fightPoverty->imageicon);
        }

        $fightPoverty->delete();
        return redirect()->route('ssawo/admindashboard/what-we-do');

    }

    public function search(){
        $search_text = $_GET['query'];

            $search = fightPoverty::where('title','LIKE', '%'.$search_text.'%')->get();
            return view('adminDashboard.search', compact('search'));
    }
}
