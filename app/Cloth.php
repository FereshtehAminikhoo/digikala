<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cloth extends Model
{
    //use HasFactory;
    protected $fillable = ['title', 'image', 'price'];
}
