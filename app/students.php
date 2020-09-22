<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class students extends Model
{
    public function User()
    {
    	return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'std_id',
        'std_password',
        'std_name',
        'std_email',
        'std_relation',
        'std_relation_name',
        'std_relation_number',
        'user_id'
     
    ];
}
