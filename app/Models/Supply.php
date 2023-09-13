<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supply extends Model
{
    use HasFactory;

    protected $table = 'supply';

    protected $fillable = [
        'name',
        'document',
        'city',
        'location'
    ];
}
