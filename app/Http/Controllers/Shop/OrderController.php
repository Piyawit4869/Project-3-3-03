<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        // รับข้อมูลจาก Frontend
        $data = $request->all();

        // สร้างข้อมูลคำสั่งซื้อในฐานข้อมูล
        $order = Order::create([
            'total_price' => $data['total_price'],
            'final_price' => $data['final_price'],
            'items' => json_encode($data['cart_items']), // แปลงข้อมูลตะกร้าเป็น JSON
        ]);

        // ส่งกลับการตอบสนอง
        return response()->json(['message' => 'สั่งซื้อสำเร็จ!', 'order' => $order]);
    }

    public function order() {
        return view('shop.order');
    }
}
