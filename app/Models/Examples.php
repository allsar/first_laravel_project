<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examples extends Model
{
    use HasFactory;
    protected $table = 'examples';

    protected $fillable = [
        'name',
        'firstname',
        'lastname'
    ];
}
