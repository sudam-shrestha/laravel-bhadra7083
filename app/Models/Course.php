<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        "title",
        "price",
        "description"
    ];

    public function admissions()
    {
        return $this->hasMany(Admission::class);
    }
}
