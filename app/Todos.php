<?php

namespace App;
use User;

use Illuminate\Database\Eloquent\Model;

class Todos extends Model
{
    protected $fillable = [
        'title',
        'description'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
