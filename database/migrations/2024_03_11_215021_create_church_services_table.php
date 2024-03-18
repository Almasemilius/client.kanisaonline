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
        Schema::create('church_services', function (Blueprint $table) {
            $table->id();
            // $table->string('cc');
            $table->string('name');
            $table->string('type');
            $table->text('description');
            $table->string('minister_type')->nullable();
            $table->string('minister_name')->nullable();
            $table->string('target_type')->nullable();
            $table->string('target_name')->nullable();
            $table->string('location');
            $table->string('image_url');
            $table->string('end_date');
            $table->string('start_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('church_services');
    }
};
