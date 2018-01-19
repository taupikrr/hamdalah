<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\agen;
use App\rumah;
use App\jenis;
use Yajra\Datatables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Exceptions\rumahException;

class rumahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $rumah = rumah::all();
        return view('rumah.index',compact('rumah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $agen=agen::all();
         $jenis=jenis::all();
         $rumah=rumah::all();
         return view('rumah.create', compact('agen','rumah','jenis'));
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
        $rumah = new rumah;
        $rumah->tipe_rumah= $request->a;
        $rumah->harga_rumah= $request->b;
        $rumah->luas_tanah= $request->c;
        $rumah->jumlah_lantai= $request->e;
        $rumah->kamar_tidur= $request->f;
        $rumah->kamar_mandi= $request->g;
        $rumah->alamat= $request->h;
        $rumah->agen_id=$request->agen_id;
        $rumah->jenis_id=$request->jenis_id;
        
        if($request->hasFile('foto'))
        {
            $rumahs = $request->file('foto');
            $extension=$rumahs->getClientOriginalExtension();
            $filename=str_random(6).'.'.$extension;
            $destinationPath=public_path().
            DIRECTORY_SEPARATOR.'img';
            $rumahs->move($destinationPath, $filename);
            $rumah->foto=$filename;
            
        }

        $rumah->save();
        return redirect('/rumah/');
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
        $rumah=rumah::findOrFail($id);
        $agen=agen::all();
        $jenis=jenis::all();
        return view('rumah.edit',compact('rumah','agen','jenis'));
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
        $rumah = rumah::find($id);
        $rumah->tipe_rumah= $request->a;
        $rumah->harga_rumah= $request->b;
        $rumah->luas_tanah= $request->c;
        $rumah->jumlah_lantai= $request->e;
        $rumah->kamar_tidur= $request->f;
        $rumah->kamar_mandi= $request->g;
        $rumah->alamat= $request->h;
        $rumah->agen_id=$request->agen_id;
        $rumah->jenis_id=$request->jenis_id;
        
        if($request->hasFile('foto'))
        {
            $rumahs = $request->file('foto');
            $extension=$rumahs->getClientOriginalExtension();
            $filename=str_random(6).'.'.$extension;
            $destinationPath=public_path().
            DIRECTORY_SEPARATOR.'img';
            $rumahs->move($destinationPath, $filename);
            $rumah->foto=$filename;
            
        }

        $rumah->save();
        return redirect('/rumah/');

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
        $rumah = rumah::findOrFail($id);
        $rumah->delete();
        return redirect('rumah');
    }
}
