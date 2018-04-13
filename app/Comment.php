<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function users(){
        return $this->belongsTo('App\User');
    }

    public function admins(){
        return $this->belongsTo('App\Admin');
    }

    public function reports(){
        return $this->belongsTo('App\Report');
    }
}
