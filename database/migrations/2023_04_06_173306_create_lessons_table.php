<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_id')->default(1); //id курса, к которому относится урок
            $table->string('title')->nullable(); //название урока
            $table->text('info')->nullable(); //информация об уроке
            $table->integer('is_active')->default(0); //активен ли данный урок
            $table->index('course_id','post_course_idx');
            $table->foreign('course_id', 'post_course_fk')->on('courses')->references('id');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lessons');
    }
}
