<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posse_img extends Model
{
    use HasFactory;

    protected $table = 'posse_imgs';

    protected $fillable = [
        'img'
    ];
}
