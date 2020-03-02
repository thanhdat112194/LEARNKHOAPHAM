<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $table = "comment";
    public function tintuc(){
        return $this->belongsTo('App\tintuc','idTinTuc','id');
    }
    public function users(){
        return $this->belongsTo('App\User','idTinTuc','id');
    }
}
