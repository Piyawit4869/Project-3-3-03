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
        Schema::create('promotions', function (Blueprint $table) {
            $table->increments('promotion_id',10)->comment("รหัสโปรโมชั่น");
            $table->string('name',255)->comment("ชื่อโปรโมชั่น");
            $table->string('duration',255)->comment("ระยะเวลาโปรโมชั่น");
            $table->string('festival',255)->comment("เทศกาลของโปรโมชั่น");
            $table->text('description')->comment("รายละเอียดโปรโมชั่น");
            $table->string('image',255)->comment("รูปโปรโมชั่น");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promotions');
    }
};
