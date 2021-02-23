<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{  protected $guarded=[];
    //
    
    public function annonceur(){
        return $this->belongsTo('App\Annonceur','codeAnnonceur','codeAnnonceur');
        
    }
    public function rubrique(){
        return $this->belongsTo('App\Rubrique','codeRubrique','codeRubrique');
    }
    public function nature_insertion(){
        return $this->belongsTo('App\Nature_insertion','code_nature','id');

    }
    public function type_insertion(){
        return $this->belongsTo('App\Type_insertion','code_type','code');
    }
}
