<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        if ($user) {
            $customerId = $user->id;
        } else {
            $customerId = '';
        }

        $order_history = null;
        $order_history_data = DB::table('orders')->select('*')->where('customer_id', $customerId)->get();



        if (isset($order_history_data) && !empty($order_history_data)) {
            foreach ($order_history_data as $data) {

                $hotel_data = DB::table('products')->select('checkin', 'checkout')->where('id', $data->hotel_id)->first();



                if (isset($hotel_data) && !empty($hotel_data)) {
                    $image_path = DB::table('images')->select('name')->where('property_id', $data->hotel_id)->first();
                    if (isset($image_path) && !empty($image_path)) {
                        $single_image_path =  $image_path->name;
                    } else {
                        $single_image_path =  'placeholder.jpg';
                    }

                    $order_history[] = array(
                        'property_name' => $data->hotel_name,
                        'hotel_id' => $data->hotel_id,
                        'hotel_location' => $data->hotel_location,
                        'room_count' => $data->room_count,
                        'guest_count' => $data->guest_count,
                        'image' => $single_image_path,
                        'daterange' => $data->date_range,
                        'time' => $hotel_data->checkin . '-' . $hotel_data->checkout,
                        'total' => $data->total / 100,
                    );
                }
            }
        } else {
            $order_history = null;
        }

        $complete_order = null;
        $completed_orders = DB::table('orders')->select('*')->where('customer_id', $customerId)->get();
        if (isset($completed_orders) && !empty($completed_orders)) {
            foreach ($completed_orders as $cmp_data) {
                $hotel_data = DB::table('products')->select('checkin', 'checkout')->where('id', $data->hotel_id)->first();
                if (isset($hotel_data) && !empty($hotel_data)) {

                    $com_image_path = DB::table('images')->select('name')->where('property_id', $cmp_data->hotel_id)->first();
                    if (isset($com_image_path) && !empty($com_image_path)) {
                        $com_single_image_path =  $com_image_path->name;
                    } else {
                        $com_single_image_path =  'placeholder.jpg';
                    }

                    $complete_order[] = array(
                        'property_name' => $cmp_data->hotel_name,
                        'hotel_id' => $cmp_data->hotel_id,
                        'hotel_location' => $cmp_data->hotel_location,
                        'room_count' => $cmp_data->room_count,
                        'guest_count' => $cmp_data->guest_count,
                        'image' => $com_single_image_path,
                        'daterange' => $cmp_data->date_range,
                        'time' => $hotel_data->checkin . '-' . $hotel_data->checkout,
                        'total' => $cmp_data->total / 100
                    );
                }
            }
        } else {
            $complete_order = null;
        }

        // dd($order_history);

        return view('order', compact('order_history', 'complete_order'));
    }
}
