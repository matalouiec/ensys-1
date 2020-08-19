<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $guarded = [];

    public function farmlands()
    {
        return $this->hasMany(Farmland::class);
    }
}
