<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserBuilding extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user', 'building'];
}
