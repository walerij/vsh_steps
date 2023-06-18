<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsExperienceToUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('rank')->nullable(); //звание
            $table->integer('experience')->nullable()->default(0); //опыт
            $table->integer('megahash')->nullable()->default(0); //мегахеши
            $table->string('city')->nullable(); //город проживания

            $table->string('skills')->nullable(); //навыки
            $table->boolean('form_club')->default(0); //состоит ли в Клубе формулистов (по умолчанию - не состоит)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('rank');
            $table->dropColumn('experience');
            $table->dropColumn('megahash');
            $table->dropColumn('city');
            $table->dropColumn('skills');
            $table->dropColumn('form_club');
        });
    }
}
