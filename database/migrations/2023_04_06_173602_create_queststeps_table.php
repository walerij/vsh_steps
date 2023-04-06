<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQueststepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('queststeps', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('steps_id')->default(1);

            $table->text('answer')->nullable();
            $table->boolean('is_true')->default(0); //правильный ответ или нет
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
        Schema::dropIfExists('queststeps');
    }
}
