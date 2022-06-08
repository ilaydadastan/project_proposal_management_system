<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('password');
            $table->string('name')->index();
            $table->string('surname');
            $table->string('studentNo')->unique()->index();
            $table->string('faculty');
            $table->string('department');
            $table->integer('grade');
            $table->string('phoneNumber')->unique();
            $table->string('email')->unique()->index();
            $table->enum('role', ['student','teacher','admin'])->default('student');
            $table->rememberToken();
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
        Schema::dropIfExists('project_user');
    }
};
