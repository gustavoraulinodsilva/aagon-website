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
        Schema::create('service_texts', function (Blueprint $table) {
            $table->id();
            $table->string('hero_tag');
            $table->text('hero_title');
            $table->text('hero_description');
            $table->string('philosophy_tag');
            $table->text('philosophy_title');
            $table->text('philosophy_description');
            $table->string('catalog_tag');
            $table->text('catalog_title');
            $table->string('lifecycle_tag');
            $table->text('lifecycle_title');
            $table->boolean('show_philosophy')->default(true);
            $table->boolean('show_catalog')->default(true);
            $table->boolean('show_lifecycle')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_texts');
    }
};
