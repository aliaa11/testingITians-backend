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
        Schema::create('itian_registration_requests', function (Blueprint $table) {
            $table->id('request_id');
            $table->foreignId('user_id')->unique()->constrained('users')->onDelete('cascade');
            $table->string('certificate', 500);
            $table->string('status', 50)->default('Pending');
            $table->foreignId('reviewed_by_admin_id')->nullable()->constrained('users')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('itian_registration_requests');
    }
};
