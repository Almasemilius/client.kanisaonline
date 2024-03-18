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
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_event_id')->nullable()->constrained();
            $table->foreignId('church_service_id')->nullable()->constrained();
            $table->integer('men');
            $table->integer('women');
            $table->integer('children');
            $table->integer('guests');
            $table->integer('online');
            $table->integer('deliverance');
            $table->integer('filled_with_holy_spirit');
            $table->integer('baptism');
            $table->integer('offerings');
            $table->integer('tithe');
            $table->integer('special_offerings');
            $table->integer('others');
            $table->integer('expenses');
            $table->integer('sales');
            $table->timestamp('start_date');
            $table->timestamp('end_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reports');
    }
};
