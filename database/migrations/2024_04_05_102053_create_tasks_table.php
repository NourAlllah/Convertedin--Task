<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('task_id');
            $table->string('title');
            $table->text('description');
            $table->unsignedBigInteger('assigned_to_id');
            $table->unsignedBigInteger('assigned_by_id');
            $table->timestamps();

            //$table->foreign('assigned_to_id')->references('id')->on('users'); 
            //$table->foreign('assigned_by_id')->references('id')->on('users'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
