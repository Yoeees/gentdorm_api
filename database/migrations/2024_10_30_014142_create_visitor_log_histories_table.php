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
        Schema::create('visitor_log_histories', function (Blueprint $table) {
            $table->id();
            $table->integer('visitor_id');
            $table->enum('status', ['Checked In', 'Checked Out']);
            $table->timestampTz('time_stamp')->useCurrent();
            $table->text('purpose')->nullable();
            // Foreign key constraint to boarders table
            $table->foreign('visitor_id')->references('id')->on('visitors')->onDelete('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitor_log_histories');
    }
};
