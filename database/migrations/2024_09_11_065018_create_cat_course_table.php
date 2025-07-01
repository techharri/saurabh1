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
        Schema::create('cat_course', function (Blueprint $table) {
            $table->id()->cat_id();
            $table->string('cat_name')->nullable()->default('text');
            $table->integer('c_id')->unsigned()->nullable()->default(12);
            $table->string('title')->nullable()->default('text');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cat_course');
    }
};
