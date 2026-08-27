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
        Schema::create('about_texts', function (Blueprint $table) {
            $table->id();
            $table->string('hero_tag');
            $table->text('hero_title');
            $table->text('hero_description')->nullable();
            $table->string('hero_image');
            $table->string('hero_figcaption')->nullable();
            $table->string('philosophy_tag');
            $table->text('philosophy_title');
            $table->text('philosophy_description')->nullable();
            $table->string('manifest_tag');
            $table->text('manifest_text');
            $table->string('approach_tag');
            $table->text('approach_title');
            $table->string('workflow_tag');
            $table->text('workflow_title');
            $table->string('values_tag');
            $table->text('values_title');
            $table->string('metrics_tag');
            $table->text('metrics_title');
            $table->boolean('show_philosophy')->default(true);
            $table->boolean('show_approach')->default(true);
            $table->boolean('show_workflow')->default(true);
            $table->boolean('show_values')->default(true);
            $table->boolean('show_metrics')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_texts');
    }
};
