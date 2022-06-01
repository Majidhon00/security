<?php

namespace App\Http\Controllers;

use App\Models\upd4;
use Illuminate\Http\Request;

class upd4Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $baza = upd4::all();
        return view('admin.apd4', [
            'baza' => $baza
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function edit(upd4 $upd4)
    {
        return view('admin.apd4', ['baza' => $upd4]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, upd4 $upd4)
    {

        if (!($request->src)) {
            $upd4->src = $request->dbsrc;
        } else {
            //image move
            $test = $request->file('src')->getClientOriginalName();
            $request->src->move(public_path('img'), $test);
            //end image move
            $upd4->src = 'img/' . $test;
        }
        $upd4->title = $request->title;
        $upd4->content = $request->content;
        $upd4->update();
        return back()->with('success','The information has been successfully updated');
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
    }
}
