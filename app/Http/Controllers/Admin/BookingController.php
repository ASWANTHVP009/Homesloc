<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class BookingController extends Controller
{
    public function list()
    {
        $orders = DB::table('orders')->select('*')->where('status', 1)->paginate(20);
        return view('admin.order.list', compact('orders'));
    }
    public function edit($id)
    {
        $order_info = DB::table('orders')->select('*')->where('id', decrypt($id))->first();
        return view('admin.order.edit', compact('order_info'));
    }
}
