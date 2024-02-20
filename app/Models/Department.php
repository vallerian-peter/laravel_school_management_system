<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function course()
    {
        return $this->hasOne(Course::class);
    }

    public function module()
    {
        return $this->hasMany(Module::class);
    }
}
