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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
           $table->string('payment_id')->nullable();
           $table->string('payment_status')->nullable();
           $table->string('email_address')->nullable();
           $table->string('given_name')->nullable();
           $table->string('surname')->nullable();
           $table->string('currency_code')->nullable();
           $table->decimal('value',10, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
