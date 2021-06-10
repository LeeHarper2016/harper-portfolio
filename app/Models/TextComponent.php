<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TextComponent extends Model
{
    use HasFactory;

    public $fillable = [
        'anchor',
        'title',
        'body',
        'img_src'
    ];
}
