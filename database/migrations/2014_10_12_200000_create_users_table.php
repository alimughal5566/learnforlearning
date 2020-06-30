<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->string('fname',50)->nullable();
            $table->string('lname',50)->nullable();
            $table->string('thumbnail',50)->nullable();
            $table->string('subject_id')->nullable();
//            $table->foreign('subject_id')->references('id')->on('subjects')->onDelete('cascade');
            $table->string('email',60)->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('user_contact',15)->nullable();
            $table->string('description',500)->nullable();
            $table->enum('type',['admin','teacher','student'])->default('teacher');
            $table->boolean('admin')->default(false);
            $table->timestamp('approved_at')->nullable();
            $table->string('password')->nullable();
            $table->string('country')->nullable();
            $table->string('city',50)->nullable();
            $table->boolean('fof_session')->default(0);
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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('users');
        Schema::disableForeignKeyConstraints();

    }
}
