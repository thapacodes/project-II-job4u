<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->string('slug', 255)->unique();
            $table->string('category', 255);
            $table->string('type', 255);
            $table->string('logo', 255);
            $table->string('fully_remote');
            $table->string('work_region')->nullable();
            $table->string('url', 255);
            $table->longText('description');
            $table->integer('salary')->nullable();
            $table->string('experience_level');
            $table->string('education_level');
            $table->string('uploaded_by')->nullable();/* Who uploaded his/her email */
            $table->boolean('status')->nullable();
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
        Schema::dropIfExists('jobs');
    }
}
