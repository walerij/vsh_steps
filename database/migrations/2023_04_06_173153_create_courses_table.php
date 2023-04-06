<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->string('title')->default("Новый курс");
            $table->text('info')->nullable();
            $table->string("imagelink")->default("image");
            $table->string("courl")->default("course_url");
            $table->boolean('is_active')->default(0); //опубликован ли курс
            $table->time('stat_duration')->nullable(); //дата публикации
            //$table->index('category_id','post_category_idx');
            //$table->foreign('category_id', 'post_category_fk')->on('categories')->references('id');
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
        Schema::dropIfExists('courses');
    }
}
