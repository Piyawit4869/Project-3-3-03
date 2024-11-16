<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function list()
    {
        // ดึงข้อมูลคำสั่งซื้อทั้งหมดจากฐานข้อมูล
        $orders = Order::all();

        // แปลง JSON ในคอลัมน์ items เป็นอาร์เรย์
        foreach ($orders as $order) {
            $order->items = json_decode($order->items, true);
        }

        // ส่งข้อมูลไปยัง View สำหรับแสดงในหน้า "รายการสินค้า"
        return view('l.index', ['orders' => $orders]);
    }

    public function index() {
        // ดึงข้อมูลคำสั่งซื้อทั้งหมดจากฐานข้อมูล
        $orders = Order::all();

        // แปลง JSON ในคอลัมน์ items เป็นอาร์เรย์
        foreach ($orders as $order) {
            $order->items = json_decode($order->items, true);
        }

        // ส่งข้อมูลไปยัง View สำหรับแสดงในหน้า "รายการสินค้า"
        return view('backend.list.index', ['orders' => $orders]);
    }
}
