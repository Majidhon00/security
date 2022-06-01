<?php

namespace App\Http\Controllers;

use App\Models\comment;
use App\Models\contactAcc;
use App\Models\foot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class commentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $baza = new comment;
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $baza=new comment;

        $baza->name = $request->name;
        $baza->content = $request->content;
        $baza->b_id=$request->b_id;
        $baza->save();
        return back()->with('success',Session::get('name').'  '.'commentaryangiz yozildi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(foot $comment)
    {
        $baza = comment:: orderByDesc('created_at')->where('b_id',$comment->id)->get();
        $baza2 = comment::where('b_id',$comment->id)->count('b_id');
        
        return view('comment',['blog'=>$comment,'bazas'=>$baza,'bazas2'=>$baza2]);
    }
     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   

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
    public function update(Request $request, $id)
    {
        //
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
