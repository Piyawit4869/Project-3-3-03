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
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('contact_id',10)->comment("รหัสการติดต่อ");
            $table->string('name',255)->comment("ชื่อผู้ติดต่อ");
            $table->string('subject',255)->comment("หัวเรื่อง");
            $table->text('message')->comment("รายละเอียดการติดต่อ");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
