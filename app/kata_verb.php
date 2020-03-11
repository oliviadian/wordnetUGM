<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kata_verb extends Model
{
    protected $fillable = [
        'id_kata_v', 'id_hipernim_v', 'id_user', 'kata_dasar_v', 'makna_dasar_v'
    ];
}
