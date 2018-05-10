<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public function send_tos(){
    	return $this->belongsTo('App\SendTo');
    }

    public function admins(){
    	return $this->belongsTo('App\Admin');
    }

    public function users(){
    	return $this->belongsTo('App\User');
    }
}
