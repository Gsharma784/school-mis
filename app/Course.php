<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    protected $guarded = [];

    public function levels() {
        return $this->belongToMany(\App\Level::class);
    }

    public function staffs() {
        return $this->hasMany(\App\Staff::class);
    }
}
