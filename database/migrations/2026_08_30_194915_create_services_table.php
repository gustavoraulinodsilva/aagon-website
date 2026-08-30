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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->unsignedTinyInteger('number');
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description');
            $table->string('challenge_tag')->nullable();
            $table->string('challenge_title')->nullable();
            $table->text('challenge_description');
            $table->string('deliverable_tag')->nullable();
            $table->string('deliverable_title')->nullable();
            $table->json('deliverables');
            $table->string('methodology_tag')->nullable();
            $table->string('methodology_title')->nullable();
            $table->string('tech_tag');
            $table->json('tech_stack');
            $table->string('project_title');
            $table->string('capability_title');
            $table->unsignedSmallInteger('order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->boolean('show_challenge')->default(true);
            $table->boolean('show_deliverables')->default(true);
            $table->boolean('show_methodology')->default(true);
            $table->boolean('show_tech_stack')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
