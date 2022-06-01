<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\acaunt;

class contactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $baza = acaunt::where('tf',0)->get();
        return view('admin.acaunt',['bazas'=>$baza]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        return view('contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $baza = new acaunt;
        //move
            $test = $request->file('img')->getClientOriginalName();
            $request->img->move(public_path('img'),$test);
        //move
            $baza->img = $request->file('img')->getClientOriginalName();
            $baza->name=$request->name;
            $baza->title=$request->title;
            $baza->text=$request->text;
            $baza->tf=0;
        $baza->save();
        return redirect()->route('contact.create');
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, acaunt $contact)
    {
        $contact->tf=1;
        $contact->update();
        return back();  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(acaunt $contact)
    {
        $contact->delete();
        return back();
    }
}
