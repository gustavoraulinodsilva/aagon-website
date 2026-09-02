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
        Schema::create('team_texts', function (Blueprint $table) {
            $table->id();
            $table->string('hero_tag');
            $table->text('hero_title');
            $table->text('hero_description');
            $table->string('essence_tag');
            $table->text('essence_title');
            $table->text('essence_description');
            $table->string('team_tag');
            $table->text('team_title');
            $table->string('philosophy_tag');
            $table->text('philosophy_text');
            $table->boolean('show_essence')->default(true);
            $table->boolean('show_team')->default(true);
            $table->boolean('show_philosophy')->default(true);
            $table->boolean('show_cta')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('team_texts');
    }
};
