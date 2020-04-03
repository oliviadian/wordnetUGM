<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tambah_kata_v extends Model
{
    public $table = "tambah_kata_verbs";

    protected $fillable = [
        'id_tambah_kata_v', 'isi'
    ];
}
