<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Victorygroup extends Model
{

   // public $table = 'victorygroups';
	
	protected $guarded = [];
    
    public function getId()
    {
    return $this->id;
    
    }
    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function members()
    {   
        return $this->hasMany(Member::class)->orderBy('created_at', 'ASC');
    }
    
}
