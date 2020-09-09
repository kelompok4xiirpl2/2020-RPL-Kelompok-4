<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnouncementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('announcements', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('class_id');
            $table->foreign('class_id')->references('id')->on('classes');
            $table->foreignId('teacher_id');
            $table->foreign('teacher_id')->references('id')->on('teachers');
            $table->foreignId('subject_id');
            $table->foreign('subject_id')->references('id')->on('subjects');
            $table->string('description');
            $table->timestamp('deleted_at')->nullable();
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
        Schema::dropIfExists('announcements');
    }
}
