<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use HasFactory;
    //use SoftDeletes;
    protected $table = "roles";
    protected $guarded = false;
    public function users(){
        return $this->belongsToMany(User::class, 'user_roles', 'role_id','user_id');
    }
}
