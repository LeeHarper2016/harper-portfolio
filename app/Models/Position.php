<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Position extends Model
{
    use HasFactory;

    protected $fillable = [
            'company_name',
            'position',
            'body',
            'description',
            'image',
            'img_alt'
    ];
}
