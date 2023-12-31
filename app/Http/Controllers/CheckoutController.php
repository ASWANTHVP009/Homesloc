<?php

namespace App\Http\Controllers;

use App\Models\Roomtype;
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
        // $this->api = new Api("rzp_test_7jzaCCPRSnsuFj", "6K1sdQwpJAbbG8LFl80a0QTr");

        $this->api = new Api("rzp_live_a4Z4SMNTQ4azeb", "fNgKcmcaidSzncT0uBnuZMca");
        
    }
    public function index(Request $request)
    {
        $property_id = $request->input('property');
        $room_count = $request->input('rm-count');
        $guest_count = $request->input('gt-count');
        $tick = $request->input('tick');

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


        $room_info = Roomtype::where('property_id', $property_id)
            ->where('id', '=', $tick)
            ->first();

        if (isset($room_info) && !empty($room_info)) {
            if ($room_info->special_price != 0) {
                $total = $days * ($room_count * $room_info['special_price']);
                $unit_price = $room_info['special_price'];
                // $total = $days * ($room_count * $hotel_data->special_price);
                // $unit_price = $hotel_data->special_price;
            } else {
                $total = $days * ($room_count * $room_info['price']);
                $unit_price = $room_info['price'];
                // $total = $days * ($room_count * $hotel_data->price);
                // $unit_price = $hotel_data->price;
            }
        } else {
            if ($hotel_data->special_price != 0) {
                $total = $days * ($room_count * $hotel_data->special_price);
                $unit_price = $hotel_data->special_price;
            } else {
                $total = $days * ($room_count * $hotel_data->price);
                $unit_price = $hotel_data->price;
            }
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

    // stripe

    public function booknow()
    {
        return view('booknow');
    }

    public function session(Request $request)
    {
        \Stripe\Stripe::setApiKey(config('stripe.sk'));

        $productname = $request->get('productname');
        $totalprice = $request->get('total');

        $name = $request->get('name');
        $email = $request->get('email');
        $mobile = $request->get('mobile');
        $property_id = $request->get('property_id');
        $room_count = $request->get('room_count');
        $guest_count = $request->get('guest_count');
        $daterange = $request->get('daterange');
        $total = $request->get('total');

        $session = \Stripe\Checkout\Session::create([
            'line_items'  => [
                [
                    'price_data' => [
                        'currency'     => 'INR',
                        'product_data' => [
                            "name" => $productname,
                        ],
                        'unit_amount'  => $total * 100,
                    ],
                    'quantity'   => 1,
                ],

            ],
            'mode'        => 'payment',
            'success_url' => route(
                'razorpay.payment.store',
                [
                    'name' => $name,
                    'email' => $email,
                    'mobile' => $mobile,
                    'property_id' => $property_id,
                    'room_count' => $room_count,
                    'guest_count' => $guest_count,
                    'daterange' => $daterange,
                    'total' => $total,
                ]
            ),
            'cancel_url'  => route('index'),
        ]);

        return redirect()->away($session->url);
    }

    public function stripe()
    {
        return "Thanks for you order You have just completed your payment. The seeler will reach out to you as soon as possible";
    }
}
