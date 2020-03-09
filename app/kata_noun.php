<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kata_noun extends Model
{
    protected $fillable = [
        'id_kata_n', 'id_hipernim_n', 'kata_dasar_n', 'makna_dasar_n'
    ];
}
