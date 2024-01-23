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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->foreignId('organizer_id')->constrained();
            $table->foreignId('event_type_id')->constrained();
            $table->foreignId('category_id')->constrained();
            $table->string('title');
            $table->longText('description');
            $table->string('thumbnail_url');
            $table->string('timezone');
            $table->dateTime('start_date_time');
            $table->dateTime('end_date_time')->nullable();
            $table->double('latitude');
            $table->double('longitude');
            $table->string('venue_address');
            // $table->string('period');
            $table->text('refund_policy')->nullable();
            $table->string('more_info_link');
            $table->boolean('is_featured')->default(false);
            $table->enum('status',['Active'])->default('Active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
