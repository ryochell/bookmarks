<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    protected $fillable = [
        'title', 'url', 'description'
    ];
}
