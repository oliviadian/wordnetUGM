<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hipernim_noun extends Model
{
    protected $fillable = [
        'id_hipernim_n', 'id_jarak_n','hipernim_n', 'makna_hipernim_n'
    ];
}
