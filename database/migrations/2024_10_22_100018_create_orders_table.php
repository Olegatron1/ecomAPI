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
			$table->enum('status', ['pending', 'paid', 'cancelled'])->default('pending');
			$table->foreignId('user_id')->index()->constrained('users');
			$table->foreignId('cart_id')->index()->nullable()->constrained('carts');
			$table->foreignId('payment_method_id')->index()->constrained('payment_methods');
			$table->string('payment_url')->nullable();
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
