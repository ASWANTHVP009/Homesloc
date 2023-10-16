<?php

namespace App\Http\Controllers;

// include
// include_once 'vendor/autoload.php';

use Exception;
use App\Models\Menu;
use App\Models\Type;
use App\Mail\MailNotify;
use App\Models\Amentity;
use App\Models\Callback;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

use Carbon\Carbon;


class CallbackController extends Controller
{

    public function mail()
    {
        $name = request('name');
        $email = request('email');
        $subject = request('message');

        if (isset($email) && !empty($email)) {
            $data = [
                'subject' => "HomesLoc Contact",
                'name' => $name,
                'email' => $email,
                'body' => $subject
            ];
            try {
                Mail::to($email)->send(new MailNotify($data));
            } catch (Exception $e) {
            }
            session()->flash('msg', 'Message send successfully!');
            return redirect('/contact');
        } else {
            session()->flash('success', 'Message send successfully!');
            return redirect('/contact');
        }
    }

    public function mailnotify()
    {
        return view('mailnotify');
    }

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
            $files = [];
            if ($request->file('files')) {
                foreach ($request->file('files') as $key => $file) {
                    $file_name = time() . rand(1, 99) . '.' . $file->extension();
                    $file->move(public_path('uploads'), $file_name);
                    $files[] = $file_name;
                }
            }

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

            $request_id = $callback->id;

            if (isset($files) && !empty($files)) {
                foreach ($files as $file_data) {
                    $imgs = [
                        'user_id' => $request_id,
                        'name' => $file_data,
                    ];
                    $insert[] = $imgs;
                }
                DB::table('request_images')->insert($insert);
            }

            return view('callbackSuccess');
        } else {
            return 'Please fill the details.';
        }
    }

    public function newsletter()
    {
        $input = request()->all();
        $currentDateTime = Carbon::now();
        $formattedDateTime = $currentDateTime->format('Y-m-d H:i:s');
        $insert = [
            'email' => $input['email'],
            'created_at' => $formattedDateTime,
            'updated_at' => $formattedDateTime,
        ];

        DB::table('newsletter')->insert($insert);
        session()->flash('success', 'Subscribed successfully!');
        return redirect()->back();
    }
}
