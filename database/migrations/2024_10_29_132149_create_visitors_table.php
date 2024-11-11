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
        Schema::create('visitors', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('name',255);
            $table->date('birthday');
            $table->integer('age');
            $table->enum('sex', ['Male', 'Female', 'Other']);
            $table->text('address');
            $table->string('contact_info', 255)->nullable();
            $table->string('visitor_type',255);
            $table->timestamps(); // This will add both created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitors');
    }
};
