<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hipernim_noun extends Model
{
    protected $fillable = [
        'id_hipernim_n', 'id_kata_n','hipernim_n', 'makna_hipernim_n'
    ];

    public function kata(){
        return $this->belongsTo('App\kata_noun', 'id_kata_n','id_kata_n');
    }
}
