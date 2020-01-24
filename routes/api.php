<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::apiResource('artikel','ArtikelAPIController');
Route::apiResource('berita','BeritaAPIController');
Route::apiResource('galeri','GaleriAPIController');
Route::apiResource('pengumuman','PengumumanAPIController');

Route::apiResource('kategori_artikel','Kategori_ArtikelAPIController');
Route::apiResource('kategori_berita','Kategori_BeritaAPIController');
Route::apiResource('kategori_galeri','Kategori_GaleriAPIController');
Route::apiResource('kategori_pengumuman','Kategori_PengumumanAPIController');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
