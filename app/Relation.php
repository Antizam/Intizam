<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relation extends Model
{
    protected $primaryKey = 'relation_id';
    
    protected $fillable = [
        'relation_id',
        'relation',
        'relation_name',
        'relation_number',
        'std_relation_id'
     
    ];
    public function students()
    {
    	return $this->belongsTo(students::class);
    }
}
