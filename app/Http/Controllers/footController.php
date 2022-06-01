<?php

namespace App\Http\Controllers;

use App\Models\comment;
use App\Models\foot;
use Illuminate\Http\Request;

class footController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bazas = comment::all();
        $blog = foot::all();
        return view('admin.foot', ['blogs' => $blog,'bazas'=>$bazas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create2.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blog = $request->file('img')->getClientOriginalName();
        $request->img->move(public_path('img'), $blog);

        $baza = new foot;
        
        $baza->img = $request->file('img')->getClientOriginalName();
        $baza->title = $request->title;
        $baza->content = $request->content;
        $baza->save();
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
    public function edit(foot $footer)
    {

        return view('admin.create2.update',[
            'blog'=>$footer
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, foot $footer)
    {
        if(!($request->img)){
            $footer->img=$request->dbimg;
        }else{
            $blog = $request->file('img')->getClientOriginalName();
            $request->img->move(public_path('img'),$blog);
            $footer->img = $blog;
        }

        $footer->title = $request->title;
        $footer->content = $request->content;


        $footer->update();
        return redirect()->route('footer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(foot $footer)
    {
        $footer->delete();
        return back();
    }
}
