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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_category_id')->constrained('project_categories')->onDelete('cascade');
            $table->foreignId('service_id')->nullable()->constrained('services')->nullOnDelete();
            $table->boolean('is_featured')->default(false);
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description');
            $table->string('client');
            $table->string('image')->nullable();
            $table->text('caption')->nullable();
            $table->string('challenge_tag')->nullable();
            $table->string('challenge_title')->nullable();
            $table->text('challenge_description')->nullable();
            $table->string('solution_tag')->nullable();
            $table->string('solution_title')->nullable();
            $table->text('solution_description')->nullable();
            $table->string('impact_tag')->nullable();
            $table->string('impact_title')->nullable();
            $table->text('impact_description')->nullable();
            $table->string('tech_tag');
            $table->json('tech_stack');
            $table->string('gallery_tag')->nullable();
            $table->string('gallery_title')->nullable();
            $table->unsignedSmallInteger('order')->default(0);
            $table->boolean('show_challenge')->default(true);
            $table->boolean('show_solution')->default(true);
            $table->boolean('show_impact')->default(true);
            $table->boolean('show_gallery')->default(true);
            $table->boolean('show_cta')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
