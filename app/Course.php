<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    protected $guarded = [];

    public function users()
    {
        return $this->belongsToMany(User::class, 'course_users');
    }
}
