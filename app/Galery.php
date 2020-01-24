<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galery extends Model
{
    //
    protected $table='galeri';

    protected $fillable=[
        'nama','keterangan','path','users_id','kategori_galeri_id'

    ];

    public function kategoriGaleri(){
        return $this->belongsTo(\App\kategoriGaleri::class,'kategori_galeri_id','id');

    }
    public function user(){
        return $this->belongTo(\App\User::class,'users_id','id');
    }

}
