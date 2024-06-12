<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kost extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'price', 'location', 'image', 'user_id'
    ];
}
