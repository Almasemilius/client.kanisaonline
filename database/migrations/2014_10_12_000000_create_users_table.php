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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('image_url')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('spouse_name')->nullable();
            $table->string('number_of_children')->nullable();
            $table->string('phone')->nullable();
            $table->string('gender')->nullable();
            $table->string('citizenship')->nullable();
            $table->string('language')->nullable();
            $table->string('region')->nullable();
            $table->string('district')->nullable();
            $table->string('ward')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('street_name')->nullable();
            $table->string('water_baptist')->nullable()->default('No');
            $table->string('holy_ghost_baptism')->nullable()->default('No');
            $table->string('salvation_status')->nullable();
            $table->string('home_cell')->nullable();
            $table->string('service_group')->nullable();
            $table->string('role')->nullable();
            $table->string('fellowship_group')->nullable();
            $table->boolean('new_user')->default(true);
            $table->date('date_of_birth')->nullable();
            $table->enum('education_level', ['Primary Level Education','Secondary Level Education','wvanced Secondary Level Education','Certificate Level Education','Diploma Level Education','Bachelor Degree','Master Degree','PhD Degree'])->nullable();
            $table->enum('employment_status', ['Unemployed','Self Employed','Part-time Employed','Full-time Employed'])->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
