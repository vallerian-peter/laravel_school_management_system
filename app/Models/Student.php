<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class Student extends Model implements Authenticatable
{
    use AuthenticatableTrait; 

    use HasFactory;

    protected $table = "students";
    
    protected $fillable = [
        "fullname",
        "email",
        "username",
        "avatar",
        "phone",
        "reg_no",
        "course_id",
        "gender",
        "birthdate",
        "password"
    ];

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
    public function result()
    {
        return $this->hasMany(Result::class);
    }

}
