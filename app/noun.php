<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class noun extends Model
{
    protected $fillable = [
        'id_noun', 'id_kata_n', 'id_user', 'kategori'
    ];
}
