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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_id')->constrained();
            $table->enum('type',['Free', 'Paid']);
            $table->string('title');
            $table->text('description');
            $table->double('price')->nullable();
            $table->string('currency_code');
            $table->foreign('currency_code')->references('code')->on('currencies');
            $table->enum('availability',['Limited','Unlimited']);
            $table->integer('units_available')->nullable();
            $table->enum('availability_per_customer',['Limited','Unlimited']);
            $table->integer('units_per_customer')->nullable();
            $table->integer('units_reserved')->nullable();
            $table->dateTime('sales_start_date');
            $table->dateTime('sales_end_date');
            $table->string('tempelate_url');
            $table->json('required_data_guide')->nullable();
            $table->json('print_data_guide')->nullable();
            $table->enum('ebd_availability',['Limited','Unlimited'])->nullable();
            $table->enum('ebd_type',['Percentage','Amount'])->nullable();
            $table->double('ebd_amount')->nullable();
            $table->dateTime('ebd_start_date')->nullable();
            $table->dateTime('ebd_end_date')->nullable();
            $table->double('height');
            $table->double('width');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
