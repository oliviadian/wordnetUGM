<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tambah_kata_n extends Model
{
    public $table = "tambah_kata_nouns";

    protected $fillable = [
        'id_tambah_kata_n', 'isi'
    ];
}
