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
        Schema::create('home_texts', function (Blueprint $table) {
            $table->id();
            $table->string('hero_background');
            $table->string('hero_eyebrow');
            $table->text('hero_title');
            $table->text('hero_description');
            $table->string('hero_primary_label')->nullable();
            $table->string('hero_primary_link')->nullable();
            $table->string('hero_secondary_label')->nullable();
            $table->string('hero_secondary_link')->nullable();
            $table->text('philosophy_text');
            $table->string('methodology_label');
            $table->string('methodology_title');
            $table->text('methodology_description');
            $table->string('services_label');
            $table->string('services_title');
            $table->string('services_link_label')->nullable();
            $table->string('services_link_url')->nullable();
            $table->string('about_label');
            $table->string('about_title');
            $table->text('about_description');
            $table->boolean('show_philosophy')->default(true);
            $table->boolean('show_methodology')->default(true);
            $table->boolean('show_services')->default(true);
            $table->boolean('show_about')->default(true);
            $table->boolean('show_cta')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_texts');
    }
};
