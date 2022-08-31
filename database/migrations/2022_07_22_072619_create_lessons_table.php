<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

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
            $table->string('name');
            $table->unsignedBigInteger('admin_id');
            $table->foreign('admin_id')->references('id')->on('admins');
            $table->string('picture')->nullable();
            $table->text('description')->nullable();
            $table->integer('sort_order')->nullable();
            $table->boolean('text_required')->nullable();
            $table->unsignedBigInteger('test_id')->nullable();
            $table->char('type');
            $table->text('introduction');
            $table->boolean('enforce_lecture_order');
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
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        
        Schema::dropIfExists('lessons');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
