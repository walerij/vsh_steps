<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "courses";
    protected $guarded = false;

    public function lessons(){
        return $this->hasMany(Lesson::class, 'course_id', 'id');
    }
    public function author(){
        return $this->belongsTo(User::class, 'author_id', 'id');
    }

    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
