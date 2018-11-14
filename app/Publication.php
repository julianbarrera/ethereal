<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    // $publication->user

    public function Publication()
    {
    	return $this->belongsTo(User::class, 'usario_id');
    }
}
