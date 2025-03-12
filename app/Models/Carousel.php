<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
    protected $fillable = [
      'id',
      'title',
      'filepath',
      'status',
      'created_at',
      'updated_at',
    ];
}
