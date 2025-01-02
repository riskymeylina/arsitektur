<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';
    protected $fillable = ['name', 'gambar1', 'culture', 'concept', 'gambar2', 'gambar3', 'gambar4', 'challenge', 'solution', 'gambar5'];
}
