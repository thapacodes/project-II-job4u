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
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('role'); /* 'employee', 'admin' or 'job-seeker' */
            $table->string('avater')->nullable();
            $table->string('uploaded_cv')->nullable();
            $table->string('contact')->nullable();
            $table->mediumText('about')->nullable();
            $table->mediumText('education')->nullable();
            $table->mediumText('experience')->nullable();
            $table->mediumText('skill')->nullable();
            $table->string('address')->nullable();
            $table->string('token_key')->nullable();
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
        Schema::dropIfExists('users');
    }
}
