<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class Lecture extends Model implements Authenticatable
{
    use AuthenticatableTrait; 

    use HasFactory;

    protected $fillable = [
        'fullname',
        'email',
        'username',
        'phone',
        'module_id',
        'avatar',
        'password',
    ];

    public function module()
    {
        return $this->belongsTo(Module::class);
    }
}
