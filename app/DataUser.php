<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataUser extends Model
{
    protected $fillable = [
        'name', 'email', 'endpoint',
    ];
}
