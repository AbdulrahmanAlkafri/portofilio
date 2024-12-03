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
        Schema::create('questionairs', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("phone_number");
            $table->string("country");
            $table->string("trademark_name");
            $table->string("trademark_type");
            $table->string("notes");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questionairs');
    }
};