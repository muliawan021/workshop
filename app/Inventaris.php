<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventaris extends Model
{
    protected $fillable = [
        'nama','jumlah','berfungsi','rusak','keterangan'
    ];
}
