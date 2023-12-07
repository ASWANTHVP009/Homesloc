<?php

namespace App\Http\Controllers;


use Exception;
use Razorpay\Api\Api;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;

class RazorpayController extends Controller
{
    public $api;
    public function index(): View
    {
        return view('razorpayView');
    }

    public function __construct($foo  = null)
    {
        $this->api = new Api("rzp_test_7jzaCCPRSnsuFj", "6K1sdQwpJAbbG8LFl80a0QTr");
    }

    public function store(Request $request)
    {
        $input = $request->all();

        // dd($input);
        // $payment_details = $this->api->payment->fetch($request->get('payment_id'));
        $hotel_data = DB::table('products')->select('name', 'location', 'price', 'special_price')->where('id', $input['property_id'])->first();

        $user = auth()->user();
        if ($user) {
            $customerId = $user->id;
        } else {
            $customerId = 0;
        }
        // Order save
        $order_data = [
            // 'order_id' => $payment_details->order_id,
            'order_id' => 'HMLC-' . substr($input['mobile'], -6) . '-' . substr($input['name'], -3),
            'name' => $input['name'],
            'last_name' => "",
            'email' => $input['email'],
            'mobile' => $input['mobile'],
            'room_count' => $input['room_count'],
            'guest_count' => $input['guest_count'],
            'hotel_id' => $input['property_id'],
            'hotel_name' => $hotel_data->name,
            'hotel_location' => $hotel_data->location,
            'price' => $hotel_data->special_price ? $hotel_data->special_price : $hotel_data->price,
            // 'total' => $payment_details->amount,
            // 'payment_method' => $payment_details->method,
            'total' => $input['total'],
            'payment_method' => "Card Payment",
            'status' => 1,
            'customer_id' => $customerId,
            'date_range' => $input['daterange'],
        ];
        $newOrderId = DB::table('orders')->insertGetId($order_data);
        // Order save End

        // Order save
        // $pay_data = [
        //     'order_id' => $newOrderId,
        //     'transaction_id' => $payment_details->id ? $payment_details->id : '',
        //     'payment_method' => $payment_details->method ? $payment_details->method : '',
        //     'bank_name' => $payment_details->bank ? $payment_details->bank : '',
        //     'payment_status' => $payment_details->status ? $payment_details->status : '',
        // ];
        // DB::table('payment')->insert($pay_data);
        // Order save End

        $invoice_data = array(
            'order_id' => $newOrderId,
            'name' => $input['name'],
            'email' => $input['email'],
            'mobile' => $input['mobile'],
            'room_count' => $input['room_count'],
            'guest_count' => $input['guest_count'],
            'room_info' => $input['room_count'] . "Rooms , " . $input['guest_count'] . "Guests",
            'hotel_name' => $hotel_data->name,
            'hotel_location' => $hotel_data->location,
            'price' => $hotel_data->special_price ? $hotel_data->special_price : $hotel_data->price,
            'date_range' => $input['daterange'],
            'payment_method' => 'Card Payment',
            'total' => $input['total'],
            // 'payment_method' => $payment_details->method,
            // 'total' => $payment_details->amount / 100,
        );
        return view('invoice', compact('invoice_data'));
    }
}
