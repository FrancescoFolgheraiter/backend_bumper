<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'text',
        'attachment',
        'date',
    ];

    /*
        Relationships
    */

    // Many-to-Many con Users
    public function users() 
    {
        return $this->belongsToMany(User::class);
    }
}
