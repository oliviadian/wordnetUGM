<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kata_noun extends Model
{
    public $table = "kata_nouns";

    protected $fillable = [
        'id_kata_n', 'id_noun', 'kata_dasar_n', 'makna_dasar_n'
    ];

    public function hipernim(){
        return $this->hasMany('App\hipernim_noun', 'id_kata_n','id_kata_n');
    }
}
