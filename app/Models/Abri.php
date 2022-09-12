<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abri extends Model
{

    protected $fillable  = [
        "abri",
        "location",
        "maxplace",
        "resume",
        "img1",
    ];

    use HasFactory;
}
