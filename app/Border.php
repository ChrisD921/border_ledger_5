<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Border extends Model
{
    protected $table = 'border';
    protected $fillable = [
        'border_name'
    ];
}
