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
        Schema::create('katalogs', function (Blueprint $table) {
            $table->id();
            $table->string('image', 100)->nullable()->default('text');
            $table->string('name_product', 100)->nullable()->default('text');
            $table->text('description')->nullable()->default('text');
            $table->integer('price')->unsigned()->nullable()->default(12);
            $table->string('video', 100)->nullable()->default('text');
            $table->bigInteger('id_category')->nullable()->default(12)->unsigned();
            $table->foreign('id_category')->references('id')->on('categorys')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('katalogs');
    }
};
