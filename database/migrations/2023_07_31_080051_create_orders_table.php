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
            $table->string('order_id')->unique();
            $table->unsignedBigInteger('gig_id')->nullable();
            $table->unsignedBigInteger('buyer_id')->nullable();
            $table->decimal('price', 10, 2); 
            $table->unsignedBigInteger('seller_id')->nullable();
            $table->timestamps();

            $table->foreign('gig_id')->references('id')->on('gigs')->onDelete('set null');
            $table->foreign('buyer_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('seller_id')->references('id')->on('users')->onDelete('set null');
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
