<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;

    // กำหนดชื่อของตาราง
    protected $table = 'orders';

    // กำหนดคอลัมน์ที่สามารถรับข้อมูลได้
    protected $fillable = [
        'total_price',
        'final_price',
        'items',         // ข้อมูลสินค้าในตะกร้า
    ];

    // กำหนดคอลัมน์ที่ไม่ต้องการให้บันทึกอัตโนมัติ
    protected $guarded = [];

    // ฟังก์ชันในการแปลงข้อมูล JSON ในคอลัมน์ items
    protected $casts = [
        'items' => 'array',  // แปลงคอลัมน์ 'items' เป็น array อัตโนมัติ
    ];
}
