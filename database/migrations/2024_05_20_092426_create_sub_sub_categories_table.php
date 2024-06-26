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
        Schema::create('sub_sub_categories', function (Blueprint $table) {
            $table->id();
            $table->integer('sub_category_id');
            $table->integer('category_id');
            $table->string('sub_subcategory_name_en');
            $table->string('sub_subcategory_name_hin');
            $table->string('sub_subcategory_slug_en');
            $table->string('sub_subcategory_slug_hin');       
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_sub_categories');
    }
};
