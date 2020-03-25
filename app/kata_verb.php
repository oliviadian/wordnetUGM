<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kata_verb extends Model
{
    public $table = "kata_verbs";

    protected $fillable = [
        'id_kata_v', 'id_user', 'kata_dasar_v', 'makna_dasar_v'
    ];

    public function hipernim(){
        return $this->hasMany('App\hipernim_verb', 'id_kata_v', 'id_kata_v');
    }
}
