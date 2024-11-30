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
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone');
            $table->date('dob')->nullable();
            $table->unsignedBigInteger('state_id')->nullable();
            $table->unsignedBigInteger('city_id')->nullable();
            $table->string('father_name');
            $table->string('mother_name');
            $table->enum('gender', ['male', 'female', 'other'])->nullable();
            $table->enum('education', ['10th', '12th', 'diploma', 'graduate', 'post-graduate', 'phd', 'other'])->nullable();
            $table->enum('applied_for', ['d-pharmacy', 'b-pharmacy', 'd-nursing', 'b-nursing','anm','gnm'])->nullable();
            $table->string('message')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
