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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_id')->constrained();
            // $table->integer('quantity')->default(1);
            $table->double('total');
            $table->double('amount_paid')->nullable();
            $table->boolean('is_paid')->nullable();
            $table->boolean('is_email_opted')->default(false);
            $table->enum('email_status',['Sent','Not Sent'])->default('Not Sent')->nullable();
            $table->boolean('is_sms_opted')->default(false);
            $table->enum('sms_status',['Sent','Not Sent'])->default('Not Sent')->nullable();
            $table->boolean('is_whatsapp_opted')->default(false);
            $table->enum('whatsapp_status',['Sent','Not Sent'])->default('Not Sent')->nullable();
            $table->string('payment_method');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
