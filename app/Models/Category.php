<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'title',
        'description',
    ];

    public function books()
    {
        return $this->belongsToMany(Book::class);
    }
}
