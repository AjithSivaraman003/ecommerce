<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('casuals', function (Blueprint $table) {

            // Add only if columns do not exist
            if (!Schema::hasColumn('casuals', 'price')) {
                $table->decimal('price', 10, 2)->default(0);
            }

            if (!Schema::hasColumn('casuals', 'size')) {
                $table->string('size')->nullable();
            }

        });
    }

    public function down(): void
    {
        Schema::table('casuals', function (Blueprint $table) {

            if (Schema::hasColumn('casuals', 'price')) {
                $table->dropColumn('price');
            }

            if (Schema::hasColumn('casuals', 'size')) {
                $table->dropColumn('size');
            }

        });
    }
};