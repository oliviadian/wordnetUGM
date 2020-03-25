<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hipernim_verb extends Model
{
    protected $fillable = [
        'id_hipernim_v', 'id_kata_v','hipernim_v', 'makna_hipernim_v'
    ];

    public function kata(){
        return $this->belongsTo('App\kata_verb', 'id_kata_v','id_kata_v');
    }
}
