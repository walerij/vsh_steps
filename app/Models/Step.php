<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Step extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "steps";
    protected $guarded = false;

    public function videostep(){
        return $this->hasOne(Videostep::class, 'steps_id', 'id');
    }

    public function imagestep(){
        return $this->hasOne(Imagestep::class, 'steps_id', 'id');
    }

    public function queststep(){
        return $this->hasOne(Queststep::class, 'steps_id', 'id');
    }

    public function textstep(){
        return $this->hasOne(Textstep::class, 'steps_id', 'id');
    }

    public function linkstep(){
        return $this->hasOne(Linkstep::class, 'steps_id', 'id');
    }
    public function Teststeps(){
        return $this->hasOne(Teststep::class, 'steps_id', 'id');
    }
}
