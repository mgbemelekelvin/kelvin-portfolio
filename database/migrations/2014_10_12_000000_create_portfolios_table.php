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
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->string('name', 191);
            $table->text('meta_name');
            $table->string('category');
            $table->date('date')->nullable();
            $table->string('budget')->nullable();
            $table->string('location');
            $table->string('website')->nullable();
            $table->string('technologies');
            $table->string('client')->nullable();
            $table->string('image1');
            $table->text('description');
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolios');
    }
};
