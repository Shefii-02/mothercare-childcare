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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->integer('service_id')->nullable();
            $table->integer('doctor_id')->nullable();
            $table->string('email')->nullable();
            $table->string('mobile')->nullable();
            $table->longText('notes')->nullable();
            $table->integer('status')->default(0)->comment('0:not_attended,1:confirmed,2:rejected');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
