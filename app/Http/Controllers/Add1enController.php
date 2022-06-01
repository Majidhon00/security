<?php

namespace App\Http\Controllers;

use App\Models\add1;
use App\Models\add1s_en;
use Illuminate\Http\Request;

class add1enController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (session()->get('til')=='en')
        {
            $baza = add1s_en::all();
            return view('admin.add_2', ['baza' => $baza]);
        }else{
           return redirect()->route('add1.index');
        }
     
        
    }   

    /** 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create_2');    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $baza = new add1s_en;
        $data = $request->validate([
            "title"=>'required',
            "src"=>'required|mimes:jpg,jpeg,png,bpg',
            "content"=>'required',
        ]);
        $test = $request->file('src')->getClientOriginalName();
        $request->src->move(public_path('img'), $test);
        $baza->src = $data['src']->getClientOriginalName(); // validatesiz busa $test kifoya qiladi

        $baza->title = $data['title'];
        $baza->content = $data['content'];
        $baza->save();
        return back()->with('success','created'     );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\add  $add
     * @return \Illuminate\Http\Response
     */
    public function show(add1s_en $add1en)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\add  $add
     * @return \Illuminate\Http\Response
     */
    public function edit(add1s_en $add1en)
    {
        return view('admin.upd3_2', ['baza' => $add1en]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\add  $add
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, add1s_en $add1en)
    {
        
      
        if (!($request->src)) {
            $add1en->src = $request->dbsrc;
        } else {
            $test = $request->file('src')->getClientOriginalName();
            $request->src->move(public_path('img'), $test);
            $add1en->src = $test;
        }
        $add1en->title = $request->title;
        $add1en->content = $request->content;

        $add1en->save();
        return redirect()->route('add1.index')->with('success', 'The information has been successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\add  $add
     * @return \Illuminate\Http\Response
     */
    public function destroy(add1s_en $add1en)
    {
        $add1en->delete();
        return back();
    }
}
