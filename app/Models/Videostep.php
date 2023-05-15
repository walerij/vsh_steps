<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Videostep extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "videosteps";
    protected $guarded = false;

    public function step(){
        return $this->belongsTo(Step::class, 'steps_id', 'id');
    }
}
