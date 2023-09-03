<?php

namespace App\Http\Controllers;

use App\Models\contactFirst;
use App\Http\Requests\StorecontactFirstRequest;
use App\Http\Requests\UpdatecontactFirstRequest;
use Illuminate\Http\Request;

class ContactFirstController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
          $contactFirst = contactFirst::all();
        return view('adminDashboard.contact.contactFirst.index', compact('contactFirst'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         return view('adminDashboard.contact.contactFirst.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorecontactFirstRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
          $request->validate([
            'title' => 'required|min:3|max:50',
            'address' => 'required|min:3|max:100',
            'phone' => 'required|min:3|max:15',
            'email' => 'required|min:3|max:30'
        ]);


        $contactFirst = new contactFirst();
        $contactFirst->title = $request->title;
        $contactFirst->address = $request->address;
        $contactFirst->phone = $request->phone;
        $contactFirst->email = $request->email;
        $contactFirst->save();
        return redirect()->route('ssawo/admindashboard/contactFirst');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\contactFirst  $contactFirst
     * @return \Illuminate\Http\Response
     */
    public function show(contactFirst $contactFirst)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\contactFirst  $contactFirst
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
          $contactFirst = contactFirst::find($id);
        return view('adminDashboard.contact.contactFirst.insert', ['contactFirst' => $contactFirst]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecontactFirstRequest  $request
     * @param  \App\Models\contactFirst  $contactFirst
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
          $contactFirst = contactFirst::find($id);

        $request->validate([
            'title' => 'required|min:3|max:50',
            'address' => 'required|min:3|max:100',
            'phone' => 'required|min:3|max:15',
            'email' => 'required|min:3|max:30'
        ]);

        $contactFirst->title = $request->title;
        $contactFirst->address = $request->address;
        $contactFirst->phone = $request->phone;
        $contactFirst->email = $request->email;
        $contactFirst->save();
        return redirect()->route('ssawo/admindashboard/contactFirst');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contactFirst  $contactFirst
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        $contactFirst = contactFirst::find($id);

        $contactFirst->delete();
        return redirect()->route('ssawo/admindashboard/contactFirst');
    }
}
