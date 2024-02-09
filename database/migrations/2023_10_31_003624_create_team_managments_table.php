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
        Schema::create('team_managments', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('position');
            $table->enum('gender',['male','female']);
            $table->unsignedBigInteger('status')->default(1);
            $table->unsignedBigInteger('order_position')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('team_managments');
    }
};