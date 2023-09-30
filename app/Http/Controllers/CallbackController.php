<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Type;
use App\Models\Amentity;
use App\Models\Callback;
use Illuminate\Http\Request;

class CallbackController extends Controller
{

    public function index()
    {
        $amentities = Amentity::all();
        $menus = Menu::all();
        $types = Type::all();
        return view('request')->with('amentities', $amentities)->with('menus', $menus)->with('types', $types);
    }


    public function callback(Request $request)
    {
        $request->validate(
            [
                'property_name' => 'required',
                'price' => 'required',
                'location' => 'required',
                'hotel_type' => 'required',
                'checkin' => 'required',
                'checkout' => 'required',
                'amentities' => 'required',
                'menus' => 'required'
            ]
        );

        $input = request()->all();

        if (isset($input) && !empty($input)) {

            if (isset($input['amentities']) && !empty($input['amentities'])) {
                $amentities = implode(',', $input['amentities']);
            } else {
                $amentities = '';
            }

            if (isset($input['menus']) && !empty($input['menus'])) {
                $menus = implode(',', $input['menus']);
            } else {
                $menus = '';
            }

            if (isset($input['price']) && !empty($input['price'])) {
                if (is_numeric($input['price'])) {
                    $price = $input['price'];
                } else {
                    $price = 0;
                }
            } else {
                $price = 0;
            }

            $callback = new Callback();
            $callback->firstname = $input['firstname'] ? $input['firstname'] : '';
            $callback->lastname = $input['lastname'] ? $input['lastname'] : '';
            $callback->email = $input['email'] ? $input['email'] : '';
            $callback->mobile = $input['mobile'] ? $input['mobile'] : '';
            $callback->status = 0;

            $callback->property_name = $input['property_name'] ? $input['property_name'] : '';
            $callback->location = $input['location'] ? $input['location'] : '';
            $callback->price = $price;
            $callback->hotel_type = $input['hotel_type'];
            $callback->checkin = $input['checkin'] ? $input['checkin'] : '';
            $callback->checkout = $input['checkout'] ? $input['checkout'] : '';
            $callback->amentities = $amentities;
            $callback->menus = $menus;
            $callback->save();

            // $callback = new Callback();
            // $callback->firstname = $input['firstname'] ? $input['firstname'] : '';
            // $callback->lastname = $input['lastname'] ? $input['lastname'] : '';
            // $callback->email = $input['email'];
            // $callback->mobile = $input['mobile'] ? $input['mobile'] : '';
            // $callback->status = 0;
            // $callback->save();

            return view('callbackSuccess');
        } else {
            return 'Please fill the details.';
        }
    }

    public function newsletter()
    {
        $input = request()->all();
        return view('callbackSuccess');
    }
}
