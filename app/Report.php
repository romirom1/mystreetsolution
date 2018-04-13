<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    public function admins(){
        return $this->belongsTo('App\Admin');
    }

    public function users(){
        return $this->belongsTo('App\User');
    }

    public function categories(){
        return $this->belongsTo('App\Category');
    }
}
