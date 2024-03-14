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
            $table->string('name');
            $table->integer('phone');
            $table->integer('amount');
            $table->string('remarks')->nullable();
            $table->string('type');
            $table->string('photo')->nullable();

        
            $table->foreignId('order_id')->constrained('orders')->onDelete('cascade')->default(0);
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
