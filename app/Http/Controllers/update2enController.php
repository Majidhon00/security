<?php

namespace App\Http\Controllers;

use App\Models\index2;
use App\Models\upd2s_en;
use Illuminate\Http\Request;

class update2enController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.in2_2');
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
    public function edit(upd2s_en $upd2en)
    {
        return view('admin.in2',['baza'=>$upd2en]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, upd2s_en $upd2en)
    {
        if(!($request->src))
        {
            $upd2en->src = $request->dbsrc;
        }else{
            $test = $request->file('src')->getClientOriginalName();
            $request->src->move(public_path('img'),$test);
            $upd2en->src = 'img/' . $test;
        }   
        $upd2en->title = $request->title;
        $upd2en->k_title = $request->k_title;
        $upd2en->k2_title = $request->k2_title;
        $upd2en->content = $request->content;
        $upd2en->k_content = $request->k_content;
        $upd2en->k2_content = $request->k2_content;
        $upd2en -> update();
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
