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
        Schema::create('boarder_log_histories', function (Blueprint $table) {
            $table->id();
            $table->string('boarder_id', 9);
            $table->enum('status', ['Checked In', 'Checked Out']);
            $table->timestampTz('time_stamp')->useCurrent();
            $table->text('reason')->nullable();
            // Foreign key constraint to boarders table
            $table->foreign('boarder_id')->references('school_id')->on('boarders')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('boarder_log_histories');
    }
};
