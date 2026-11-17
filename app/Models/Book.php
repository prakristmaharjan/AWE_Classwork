<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    // mass assignment
    protected $guarded =[];
    protected $fillable =['title','pages','price','author'];
}
