<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function activities(){
        return $this->belongsToMany(Activity::class);
    }

    public function users(){
        return $this->belongsToMany(User::class);
    }
}
