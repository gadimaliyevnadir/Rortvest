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
        Schema::create('meta_tags', function (Blueprint $table) {
            $table->id();
            $table->longText('home_title');
            $table->longText('home_desc');
            $table->longText('home_keywords');
            $table->longText('category_title');
            $table->longText('category_desc');
            $table->longText('category_keywords');
            $table->longText('blog_title');
            $table->longText('blog_desc');
            $table->longText('blog_keywords');
            $table->longText('vacancy_title');
            $table->longText('vacancy_desc');
            $table->longText('vacancy_keywords');
            $table->longText('about_title');
            $table->longText('about_desc');
            $table->longText('about_keywords');
            $table->longText('contact_title');
            $table->longText('contact_desc');
            $table->longText('contact_keywords');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meta_tags');
    }
};
