<?php

namespace App\Http\Controllers;

use App\Models\index2;
use Illuminate\Http\Request;

class update2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.in2lay');

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
    public function edit(index2 $admin2)
    {
        return view('admin.in2',['baza'=>$admin2]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, index2 $admin2)
    {


        if(!($request->src))
        {
            $admin2->src = $request->dbsrc;
        }else{
            $test = $request->file('src')->getClientOriginalName();
            $request->src->move(public_path('img'),$test);
            $admin2->src = 'img/' . $test;
        }
        $admin2->title = $request->title;
        $admin2->k_title = $request->k_title;
        $admin2->k2_title = $request->k2_title;
        $admin2->content = $request->content;
        $admin2->k_content = $request->k_content;
        $admin2->k2_content = $request->k2_content;
        $admin2 -> update();
        return back()->with('success','updated');
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
