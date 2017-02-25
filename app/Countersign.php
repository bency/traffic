<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Countersign extends Model
{
    public $timestamps = false;
    public $fillable = ['id', 'name', 'signed_at', 'phone', 'email', 'birth'];
}
