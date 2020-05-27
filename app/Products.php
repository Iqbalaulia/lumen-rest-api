<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Products extends Model 
{   
    protected $table = 'products';

    protected $fillable = [

        'nama', 
        'harga',
        'warna',
        'kondisi',
        'deskripsi',

    ];

}
