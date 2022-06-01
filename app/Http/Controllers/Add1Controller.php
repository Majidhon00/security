<?php

namespace App\Http\Controllers;

use App\Models\add1;
use App\Models\add1s_en;
use Illuminate\Http\Request;

class add1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (session()->get('til')=='uz')
        {
            $baza = add1::all();
            return view('admin.add', ['baza' => $baza]);
        }else{
           return redirect()->route('add1en.index');
        }
    }   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $baza = new add1;
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
    public function show(add1 $add)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\add  $add
     * @return \Illuminate\Http\Response
     */
    public function edit(add1 $add1)
    {
        return view('admin.upd3', ['baza' => $add1]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\add  $add
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, add1 $add1)
    {
        
      
        if (!($request->src)) {
            $add1->src = $request->dbsrc;
        } else {
            $test = $request->file('src')->getClientOriginalName();
            $request->src->move(public_path('img'), $test);
            $add1->src = $test;
        }
        $add1->title = $request->title;
        $add1->content = $request->content;

        $add1->save();
        return redirect()->route('add1.index')->with('success', 'The information has been successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\add  $add
     * @return \Illuminate\Http\Response
     */
    public function destroy(add1 $add1)
    {
        $add1->delete();
        return back();
    }
}
