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
        Schema::create('contact_texts', function (Blueprint $table) {
            $table->id();
            $table->string('hero_tag');
            $table->text('hero_title');
            $table->text('hero_description');
            $table->string('service_tag');
            $table->text('service_title');
            $table->text('service_description');
            $table->string('business_hours');
            $table->string('availability');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_texts');
    }
};
