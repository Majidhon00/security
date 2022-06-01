<?php

namespace App\Http\Controllers;

use App\Models\acaunt;
use App\Models\foot;
use App\Models\upd4;
use App\Models\comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class indexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        if(session()->has('lang'))
        {
            $lang = session()->get('lang');
        }else{
            $lang = 'uz';
        }
        $indexes = DB::select("select * from upd1s_".$lang);
        $indexes2 = DB::select("select * from upd2s_".$lang);
        $crets = DB::select("select * from add1s_".$lang);
        $upd4s = DB::select("select * from upd4s_".$lang);
        $add5s = DB::select("SELECT * from add5s_".$lang.'  limit 6');
        $contact = acaunt::where('tf',1)->get();
        $blogs = foot::all();
        $baza2 = comment::all();
        
        return view('index',[
            'update1s'=>$indexes,
            'update2s'=>$indexes2,
            'crets'=>$crets,
            'upd4s'=>$upd4s,
            'add5s'=>$add5s,
            'contacts'=>$contact,
            'blogs'=>$blogs,
            'baza2'=>$baza2,
        ]);
    }


    public function tilch($lang)
    {
        session()->put('lang',$lang);
        app()->setLocale(session()->get('lang'));
        return redirect()->back();
    }    
    public function tilclick($til)
    {
        session()->put('til',$til);
        app()->setlocale(session()->get('til'));
        return back();
    }



    public function des()
{
    Session::put('name','');
    return redirect()->route('index.index');
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
    public function show(upd4 $index)
    {
        return view('lerm',['blog'=>$index]);
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
