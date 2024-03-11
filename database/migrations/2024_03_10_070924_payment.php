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
        Schema::create('payment', function (Blueprint $table) {
            $table->id();
            $table->integer('amount');
            $table->string('remarks')->nullable();
            $table->foreignId('order_id')->constrained('order')->onDelete('cascade');





            $table->timestamps();
    
    }
);
      }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        {
            Schema::dropIfExists('payments');
        }
    }
};