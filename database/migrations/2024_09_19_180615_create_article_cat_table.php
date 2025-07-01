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
        Schema::create('article_cat', function (Blueprint $table) {
            $table->id('ac_id'); // Primary key of article_cat
            $table->string('ac_name');
            $table->string('ac_url')$table->integer('votes')->unsigned()->nullable()->default(12);
            $table->unsistgnedBigInteger('ap_cat'); // Foreign key

            // Foreign key constraint
            $table->foreign('ap_cat')
                  ->references('ac_id')->on('ap_cat')
                  ->onDelete('cascade');

            $table->text('long_desc')->nullable();
            $table->string('keyword')->nullable();
            $table->string('description')->nullable();
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('article_cat');
    }
};
