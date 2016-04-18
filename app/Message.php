<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //
        protected $fillable = [
        'message', 'user_email', 'admin_id',
    ];

}
