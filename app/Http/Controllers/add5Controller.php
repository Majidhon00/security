<?php

namespace App\Http\Controllers;

use App\Models\add5;
use Illuminate\Http\Request;

class add5Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(session()->get('til')=='uz')
        {

            $baza = add5::orderByDesc('created_at')->get();
            return view('admin.create.show',['baza'=>$baza]);
          
        }else{
            return redirect()->route('add5en.index');

        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create.crit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $baza = $request -> validate([
            'title'=>'required',
            'content'=>'required',
            'icon'=>'required'
        ]);
        add5::create($baza);
        return back();
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
    public function edit(add5 $add5)
    {
        return view('admin.create.update',['baza'=>$add5]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, add5 $add5)
    {
        $add5 ->update($request->all());
        return redirect()->route('add5.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(add5 $add5)
    {
        $add5->delete();
        return redirect()->route('add5.index');

    }
}
