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
        Schema::create('pharmacovigilances', function (Blueprint $table) {
            $table->id();
            $table->string("subject_ar");
            $table->string("subject_en");
            $table->text("description_ar");
            $table->text("description_en");
            $table->string("email")->nullable();
            $table->string("phone")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pharmacovigilances');
    }
};
