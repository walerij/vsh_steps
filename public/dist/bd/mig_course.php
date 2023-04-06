<?php

//таблица пользователей
class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

}

//таблица курсов
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
            $table->unsignedBigInteger('author_id')->default(1); //автор курса
            $table->string('title')->nullable(); //название курса
            $table->text('info')->nullable(); //информация о курсе
            $table->string('courl'); // ссылка курса
            $table->string('image')->nullable(); //лого курса
            $table->time('stat_duration')->nullable(); //дата публикации
            $table->integer('is_active')->default(0);  //активен ли курс


 
        });
    }

}

//таблица уроков
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
            $table->string('courl'); // ссылка курса
            $table->string('image')->nullable(); //лого курса
            $table->time('stat_duration')->nullable();
            $table->integer('is_active')->default(0);


 
        });
    }

}


//таблица шагов
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
            $table->string('courl'); // ссылка курса
            $table->string('image')->nullable(); //лого курса
            $table->time('stat_duration')->nullable();
            $table->integer('is_active')->default(0);


 
        });
    }

}