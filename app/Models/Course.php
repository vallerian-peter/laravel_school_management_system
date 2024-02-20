<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'year_duration',
        'department_id'
    ];

    public function student()
    {
        return $this->hasMany(Student::class);
    }
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
}
