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
        Schema::create('karyawans', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('place_of_birth', 25);
            $table->dateTime('date_of_birth')->nullable();
            $table->enum('gender', ['male', 'female']);
            $table->text('address');
            $table->string('division', 50);
            $table->string('position', 25);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karyawans');
    }
};
