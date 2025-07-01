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
        Schema::create('article', function (Blueprint $table) {
            $table->id('a_id');
            $table->string('ar_name')->nullable()->default('text');
            $table->string('ar_url')->nullable()->default('text');
            $table->integer('ac_id')->unsigned()->nullable()->default(12);
            $table->string('long_desc')->nullable()->default('text');
            $table->string('meta_title')->nullable()->default('text');
            $table->string('keyword')->nullable()->default('text');
            $table->string('description')->nullable()->default('text');
            $table->boolean('status')->nullable()->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('article');
    }
};
