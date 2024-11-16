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
        Schema::create('order_item', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->foreignId('order_id')->constrained()->onDelete('cascade'); // Foreign key จากตาราง orders
            $table->string('name'); // ชื่อสินค้า
            $table->string('category'); // หมวดหมู่สินค้า
            $table->decimal('price', 10, 2); // ราคาสินค้า
            $table->string('image'); // URL ของภาพสินค้า
            $table->timestamps(); // เวลาที่สร้างและอัปเดต
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_item');
    }
};
