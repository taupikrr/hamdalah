<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kontak;

class kontakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kontak = kontak::all();
        return view('kontak.index',compact('kontak'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         $kontak=kontak::all();
         return view('kontak.create', compact('kontak'));
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
        $kontak = new kontak;
        $kontak->email= $request->a;
        $kontak->seluler= $request->b;

        $kontak->save();
        return redirect('/kontak/');
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
    public function edit($id)
    {
        //
        $kontak=kontak::find($id);
        $kontak->email= $request->a;
        $kontak->seluler= $request->b;

        $kontak->save();
        return redirect('/kontak/');
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
        $kontak=kontak::findOrFail($id);
        $kontak->delete();
        return redirect('kontak');
    }
}
