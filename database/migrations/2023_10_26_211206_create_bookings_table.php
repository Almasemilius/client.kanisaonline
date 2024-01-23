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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained();
            $table->foreignId('ticket_id')->constrained();
            $table->json('print_data');
            $table->boolean('is_printed')->default(false);
            $table->string('url')->nullable();
            // $table->boolean('is_email_opted')->default(false);
            // $table->enum('email_status',['Sent','Not Sent'])->nullable();
            // $table->boolean('is_sms_opted')->default(false);
            // $table->enum('sms_status',['Sent','Not Sent'])->nullable();
            // $table->boolean('is_whatsapp_opted')->default(false);
            // $table->enum('whatsapp_status',['Sent','Not Sent'])->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
