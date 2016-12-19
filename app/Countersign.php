<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Countersign extends Model
{
    public $timestamps = false;
    public $fillable = ['name', 'signed_at', 'phone', 'email'];
}
