<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transection extends Model
{
      public  function userDetail() {
        return $this->belongsTo('App\User', 'user_id');
    }
 

}
