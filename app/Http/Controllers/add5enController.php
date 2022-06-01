<?php

namespace App\Http\Controllers;

use App\Models\add5;
use App\Models\add5s_en;
use Illuminate\Http\Request;

class add5enController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(session()->get('til')=='en')
        {

            $baza = add5s_en::orderByDesc('created_at')->get();
            return view('admin.create.show_2',['baza'=>$baza]);
        }else{
            return redirect()->route('add5.index');

        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create.crit_2');
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
        add5s_en::create($baza);
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
    public function edit(add5s_en $add5en)
    {
        return view('admin.create.update_2',['baza'=>$add5en]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, add5s_en $add5en)
    {
        $add5en ->update($request->all());
        return redirect()->route('add5.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(add5s_en $add5en)
    {
        $add5en->delete();
        return redirect()->route('add5.index');

    }
}
