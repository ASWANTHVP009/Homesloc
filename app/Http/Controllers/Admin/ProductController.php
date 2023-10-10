<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use App\Models\Menu;
use App\Models\Type;
use App\Models\Image;
use App\Models\Product;
use App\Models\Amentity;
use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Symfony\Component\Console\Input\Input;

class ProductController
{
    public function list()
    {
        $user_id = auth()->guard('admin')->id();
        $user_group = Admin::select('user_group_id')->find(auth()->guard('admin')->id());
        if ($user_group->user_group_id == 1) {
            $products = Product::latest()->paginate(20);
        } else {
            $products = Product::where('user_id', $user_id)->paginate(20);
        }
        // $products = Product::latest()->paginate(20);

        return view('admin.products.list', compact('products'));
        return view('admin.products.list');
    }
    public function create()
    {
        $amentities = Amentity::all();
        $menus = Menu::all();
        $types = Type::all();
        return view('admin.products.create')->with('amentities', $amentities)->with('menus', $menus)->with('types', $types);

        // return view('admin.products.create');
    }

    public function update(Request $request)
    {

        $input = request()->all();

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

        if (isset($input['latitude']) && !empty($input['latitude']) && isset($input['longitude']) && !empty($input['longitude'])) {
            $geolocation = $input['latitude'] . ',' . $input['longitude'];
        } else {
            $geolocation = '';
        }

        DB::table('products')
            ->where('id', decrypt($input['product_id']))
            ->update(
                [
                    'name'          => $input['name'],
                    'description'   => $input['description'],
                    'price'         => $input['price'],
                    'special_price' => $input['special_price'] ? $input['special_price'] : null,
                    'location'      => $input['location'],
                    'rating'      => $input['rating'],
                    'geolocation'   => $geolocation,
                    'searchlocation' => $input['geolocation'] ? $input['geolocation'] : '',
                    'quote'         => $input['quote'] ? $input['quote'] : 'per room per night',
                    'hotel_type'    => $input['hotel_type'],
                    'checkin'       => $input['checkin'],
                    'checkout'      => $input['checkout'],
                    'amentities'    => $amentities,
                    'menus'         => $menus,
                    'hotel_policy'  => $input['hotel_policy'] ? $input['hotel_policy'] : '',
                    'user_id'       => auth()->guard('admin')->id() ? auth()->guard('admin')->id() : 0,
                    'status'  => $input['status'] ? $input['status'] : 0,


                ]
            );

        // Delete image from DB
        if (isset($input['del-images']) && !empty($input['del-images'])) {
            foreach ($input['del-images'] as $file_id) {
                DB::table('images')->where('id', $file_id)->delete();
            }
        }

        // Save Images with property ID
        $insert = [];
        foreach ($request->input('document', []) as $file) {
            $imgs = [
                'property_id' => decrypt($input['product_id']),
                'name' => $file,
                'sort_order' => 1,
            ];
            $insert[] = $imgs;
        }
        DB::table('images')->insert($insert);


        $user_id = auth()->guard('admin')->id();
        $user_group = Admin::select('user_group_id')->find(auth()->guard('admin')->id());
        if ($user_group->user_group_id == 1) {
            $products = Product::latest()->paginate(20);
        } else {
            $products = Product::where('user_id', $user_id)->paginate(20);
        }

        return view('admin.products.list', compact('products'));
        return view('admin.products.list');
    }

    public function edit($id)
    {
        $amentities = Amentity::all();
        $menus = Menu::all();
        $types = Type::all();

        $images = DB::table('images')->select('name', 'id')->where('property_id', decrypt($id))->get();
        $image_datas = [];
        foreach ($images as $image) {
            $image_datas[] = array(
                'id' => $image->id,
                'path' => $image->name,
            );
        }
        $product = Product::find(decrypt($id));



        if (isset($product['geolocation']) && !empty($product['geolocation'])) {

            $loc_cord = explode(',', $product['geolocation']);


            if (isset($loc_cord[0]) && !empty($loc_cord[0])) {
                $latitude = $loc_cord[0];
            } else {
                $latitude = '';
            }

            if (isset($loc_cord[1]) && !empty($loc_cord[1])) {
                $longitude = $loc_cord[1];
            } else {
                $longitude = '';
            }
        } else {

            $latitude = '';
            $longitude = '';
        }

        // dd($longitude);


        return view('admin.products.edit')->with('image_datas', $image_datas)->with('amentities', $amentities)->with('menus', $menus)->with('types', $types)->with('product', $product)->with('latitude', $latitude)->with('longitude', $longitude);
    }
    public function delete($id)
    {
        $property = Product::find(decrypt($id));
        $property->delete();
        DB::table('images')->where('property_id', decrypt($id))->delete();

        $user_id = auth()->guard('admin')->id();
        $user_group = Admin::select('user_group_id')->find(auth()->guard('admin')->id());
        if ($user_group->user_group_id == 1) {
            $products = Product::latest()->paginate(20);
        } else {
            $products = Product::where('user_id', $user_id)->paginate(20);
        }

        return view('admin.products.list', compact('products'))->with('message', 'Product deleted successfully');

        // return view('admin.products.list')->with('message', 'Product deleted successfully');
    }

    public function saveImages(Request $request)
    {
        // $path = storage_path('tmp/uploads');
        // $file = $request->file('file');
        // $name = uniqid() . '_' . trim($file->getClientOriginalName());
        // $file->move($path, $name);

        $image = $request->file('file');
        $fileInfo = $image->getClientOriginalName();
        $filename = pathinfo($fileInfo, PATHINFO_FILENAME);
        $extension = pathinfo($fileInfo, PATHINFO_EXTENSION);
        $file_name = $filename . '-' . time() . '.' . $extension;
        $image->move(public_path('uploads'), $file_name);

        return response()->json([
            'name'          => $file_name,
            'original_name' => $image->getClientOriginalName(),
        ]);
        return 'success';
    }

    public function productSave(Request $request)
    {

        $input = request()->all();

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

        if (isset($input['latitude']) && !empty($input['latitude']) && isset($input['longitude']) && !empty($input['longitude'])) {
            $geolocation = $input['latitude'] . ',' . $input['longitude'];
        } else {
            $geolocation = '';
        }


        // $amentities = implode(',', $input['amentities']);
        // $menus = implode(',', $input['menus']);
        // dd($menus);

        $product = new Product();
        $product->name = $input['name'];
        $product->description = $input['description'];
        $product->price = $input['price'];
        $product->special_price = $input['special_price'] ? $input['special_price'] : null;
        $product->location = $input['location'];
        $product->rating = $input['rating'];
        $product->geolocation = $geolocation;
        $product->quote = $input['quote'] ? $input['quote'] : 'per room per night';
        $product->hotel_type = $input['hotel_type'];
        $product->checkin = $input['checkin'];
        $product->checkout = $input['checkout'];
        $product->amentities = $amentities;
        $product->menus = $menus;
        $product->hotel_policy = $input['hotel_policy'] ? $input['hotel_policy'] : '';
        $product->searchlocation = $input['geolocation'] ? $input['geolocation'] : '';
        $product->user_id = auth()->guard('admin')->id() ? auth()->guard('admin')->id() : 0;
        $product->status  = $input['status'] ? $input['status'] : 0;

        // dd($product);

        $product->save();
        $property_id = $product->id;

        // Save Images with property ID
        $insert = [];
        foreach ($request->input('document', []) as $file) {
            $imgs = [
                'property_id' => $property_id,
                'name' => $file,
                'sort_order' => 1,
            ];
            $insert[] = $imgs;
        }
        DB::table('images')->insert($insert);
        return redirect()->route('admin.product.list')->with('message', 'Property created successfully');
    }
}
