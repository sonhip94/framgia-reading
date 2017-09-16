<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Relation extends Model
{
    use SoftDeletes;
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
