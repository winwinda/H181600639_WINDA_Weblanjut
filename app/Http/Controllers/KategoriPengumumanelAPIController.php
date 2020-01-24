<?php

namespace App\Http\Controllers;

use App\KategoriPengumuman;
use Illuminate\Http\Request;

class KategoriPengumumanAPIController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
{
    $kategoripengumuman=KategoriPengumuman::orderBy('id','desc')->get();

    return $kategoriPengumuman;
}

/**
 * Store a newly created resource in storage.
 * 
 * @param \Illuminate\Http\Request  $_request
 * @return \Illuminate\Http\Response
 */
public function store(Request $request)
{
    $input=$request->all();

    $kategoripengumuman=KategoriPengumuman::create($input);

    return $kategoriPengumuman;
}
/**
 * Display the specified resource
 * 
 * @param int $id
 * @return \Illuminate\Http\Response
 */
public function show($id)
{
    $kategoripengumuman=KategoriPengumuman::find($id);

    return $pengumuman;
}

/**
 * update the specified resource in storage.
 * 
 * @param \Illuminate\Http\Request $request
 * @param int $id
 * @return \Illuminate\Http\Response
 */
public function update(Request $request, $id)
{
    $input=$request->all();

    $kategoripengumuman=KategoriPengumuman::find($id);

    if(empty($kategoriPengumuman)){
        return response()->json(['message'=>'data tidak ditemukan'],404);  
    }

    $kategoriPengumuman->update($input);

    return response()->json($kategoriGaleri);
}

/**
 * Remove the specified resource from storage.
 * 
 * @param int $id
 * @return \Illuminate\Http\Response
 */
public function destroy($id)
{
    $kategoripengumuman=KategoriPengumuman::find($id);

    if(empty($kategoriPengumuman)){
        return response()->json(['message'=>'data tidak ditemukan'],404);
    }

    $kategoriPengumuman->delete();

    return response()->json(['message'=>'data telah dihapus']);

    }
}
