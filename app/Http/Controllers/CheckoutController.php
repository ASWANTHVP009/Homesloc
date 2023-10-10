<?php

namespace App\Http\Controllers;

use DateTime;

use Razorpay\Api\Api;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    public $api;

    public function invoice()
    {
        return view('invoice');
    }

    public function __construct($foo  = null)
    {
        $this->api = new Api("rzp_test_7jzaCCPRSnsuFj", "6K1sdQwpJAbbG8LFl80a0QTr");
    }
    public function index(Request $request)
    {
        $property_id = $request->input('property');
        $room_count = $request->input('rm-count');
        $guest_count = $request->input('gt-count');

        $hotel_data = DB::table('products')->select('price', 'special_price')->where('id', $property_id)->first();

        $daterange = $request->get('daterange') ? $request->get('daterange') : '';
        $room_count = $request->get('rm-count') ? $request->get('rm-count') : 1;
        if (isset($daterange) && !empty($daterange)) {
            $dates =  explode(" - ", $daterange);

            $date1_str = DateTime::createFromFormat("d/m/Y", $dates[0]);
            $date2_str = DateTime::createFromFormat("d/m/Y", $dates[1]);

            // $date1_str = $dates[0];
            // $date2_str = $dates[1];
            // $date1 = new DateTime($date1_str);
            // $date2 = new DateTime($date2_str);

            $interval = $date1_str->diff($date2_str);
            $days = $interval->days;
        } else {
            $days = 1;
        }

        if ($hotel_data->special_price != 0) {
            $total = $days * ($room_count * $hotel_data->special_price);
            $unit_price = $hotel_data->special_price;
        } else {
            $total = $days * ($room_count * $hotel_data->price);
            $unit_price = $hotel_data->price;
        }
        $orderid = rand(1111111, 9999999);
        $orderData = [
            'receipt'         => 'rcptid_' . $orderid,
            'amount'          => $total * 100, // 39900 rupees in paise
            'currency'        => 'INR'
        ];


        $razorpayOrder = $this->api->order->create($orderData);
        $unit_price = $unit_price;
        $total = $total;

        return view('checkout', compact('orderid', 'razorpayOrder', 'unit_price', 'total'));
    }
}
