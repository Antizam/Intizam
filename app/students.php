<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class students extends Model
{
    protected $primaryKey = 'std_id';
    
    protected $fillable = [
        'std_id',
        'std_password',
        'std_name',
        'std_email',
        'user_id'
     
    ];
    
    public function User()
    {
    	return $this->belongsTo(User::class);
    }

   
}
