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
        Schema::create('generals', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('location');
            $table->string('linkedin')->nullable();
            $table->string('instagram')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('slogan')->nullable();
            $table->string('privacy_policy_link')->nullable();
            $table->string('terms_of_service_link')->nullable();
            $table->string('cookie_policy_link')->nullable();
            $table->string('cta_tag')->nullable();
            $table->string('cta_title')->nullable();
            $table->text('cta_description')->nullable();
            $table->string('cta_btn_label')->nullable();
            $table->string('cta_btn_link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('generals');
    }
};
