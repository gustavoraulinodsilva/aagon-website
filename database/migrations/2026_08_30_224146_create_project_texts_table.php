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
        Schema::create('project_texts', function (Blueprint $table) {
            $table->id();
            $table->string('hero_tag');
            $table->text('hero_title');
            $table->text('hero_description');
            $table->string('category_tag');
            $table->boolean('show_cta')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_texts');
    }
};
