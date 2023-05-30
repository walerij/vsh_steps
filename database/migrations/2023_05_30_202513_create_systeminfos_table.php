<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSysteminfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('systeminfos', function (Blueprint $table) {
            $table->id();
            $table->string('site_name')->nullable()->default('vsh_steps');
            $table->string('project_hame')->nullable()->default('Videosharp');
            $table->string('info')->default("Формула программирования");
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
        Schema::dropIfExists('systeminfos');
    }
}
