<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class techSupports extends Model
{
    protected $fillable = [
        'id',
        'title',
        'description',
        'email',
        'support_id'

    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
