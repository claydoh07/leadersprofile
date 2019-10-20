<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $guarded = [];
    
    public function victorygroup()
    {	
    	return $this->belongsTo(Victorygroup::class);
    }
}
