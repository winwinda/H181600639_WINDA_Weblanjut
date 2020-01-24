<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    //
    protected $table='Berita';

    protected $fillable=[
        'nama','keterangan','path','users_id','kategori_berita_id'

    ];

    public function kategoriBerita(){
        return $this->belongsTo(\App\kategoriBerita::class,'kategori_berita_id','id');

    }
    public function user(){
        return $this->belongTo(\App\User::class,'users_id','id');
    }
}
