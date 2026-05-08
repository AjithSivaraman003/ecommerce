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
    Schema::create('casuals', function (Blueprint $table) {

        $table->id();

        $table->string('image');

        $table->string('title');

        $table->string('category');

        // Price
        $table->decimal('price', 10, 2)->default(0);

        // Product Size
        $table->string('size')->nullable();

        $table->integer('order')->default(0);

        $table->boolean('status')->default(1);

        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('casuals', function (Blueprint $table) {

              $table->decimal('price', 10, 2)->default(0);

        $table->string('size')->nullable();
        });
    }
};
