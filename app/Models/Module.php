<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "module_code",
        "credit",
        "semester_year",
        "department_id",
        "department_share"
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function lecture()
    {
        return $this->hasOne(lecture::class);
    }

    public function result()
    {
        return $this->hasMany(Result::class);
    }
}
