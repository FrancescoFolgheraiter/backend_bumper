<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'start_date',
        'end_date',
        'description',
        'min_number',
        'max_number',
        'price', 
        'address',
        'image',
    ];

    /*
        Relationships
    */

    // Many-to-Many con Users
    public function users() 
    {
        return $this->belongsToMany(User::class)->withPivot('role', 'date', 'check_pay');
    }

    // Many-to-Many con Genres
    public function genres() 
    {
        return $this->belongsToMany(Genre::class);
    }
}
