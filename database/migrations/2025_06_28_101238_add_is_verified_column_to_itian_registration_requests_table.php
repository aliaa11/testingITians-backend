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
        Schema::table('itian_registration_requests', function (Blueprint $table) {
            //
            // is_verified column already added in previous migration
            // $table->boolean('is_verified')->default(false);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('itian_registration_requests', function (Blueprint $table) {
            //
            $table->dropColumn('is_verified');
        });
    }
};
