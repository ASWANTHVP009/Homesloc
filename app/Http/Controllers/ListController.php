<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Nette\Utils\DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class ListController extends Controller
{
    public function getAmentities()
    {
        $amentities = DB::table('amentities')->select('id', 'name')->get();
        return $amentities;
    }
    public function getMenus()
    {
        $amentities = DB::table('menus')->select('id', 'name')->get();
        return $amentities;
    }

    // distance Caluclator 
    public function Distance($search_latitude, $search_longitude, $latitude, $longitude)
    {
        // Convert latitude and longitude from degrees to radians
        $lat1 = deg2rad($search_latitude);
        $lon1 = deg2rad($search_longitude);
        $lat2 = deg2rad($latitude);
        $lon2 = deg2rad($longitude);
        // Radius of the Earth in kilometers
        $earthRadius = 6371;
        // Haversine formula
        $dlat = $lat2 - $lat1;
        $dlon = $lon2 - $lon1;
        $a = sin($dlat / 2) * sin($dlat / 2) + cos($lat1) * cos($lat2) * sin($dlon / 2) * sin($dlon / 2);
        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
        $distance = $earthRadius * $c;
        return $distance;
    }
    public function list(Request $request)
    {
        $km = 10;
        $distance = 0;
        $input = $request->all();


        $search_latitude = isset($input['latitude']) ? $input['latitude'] : '';
        $search_longitude = isset($input['longitude']) ? $input['longitude'] : '';
        $price_values = [];
        $review_values = [];

        foreach ($input as $key => $item) {
            if ($key[0] == "t") {
                $types[] = explode("_", $key)[1];
            } else if ($key[0] == "z") {
                $price_values[] = explode("_", $key)[1];
            } else if ($key[0] == "a") {
                $amentities_values[] = explode("_", $key)[1];
            } else if (substr($key, 0, 2) == "rw") {
                $review_values[] = explode("_", $key)[1];
            }
        }

        if (isset($types) && !empty($types)) {
            $type_values = implode(',', $types);
        }
        if (isset($amentities_values) && !empty($amentities_values)) {
            $amentity_values = implode(',', $amentities_values);
        }

        $hotel_types = DB::table('types')->select('id', 'name')->get();
        $amentities = DB::table('amentities')->select('id', 'name')->get();

        $price_ranges = array(
            '1' => array(
                'id' => 1,
                'name' => "Upto ₹2000"
            ),
            '2' => array(
                'id' => 2,
                'name' => "₹2001 - ₹4000"
            ),
            '3' => array(
                'id' => 3,
                'name' => "₹4001 - ₹6000"
            ),
            '4' => array(
                'id' => 4,
                'name' => "₹6001 - ₹8000"
            ),
            '5' => array(
                'id' => 5,
                'name' => "₹8000 +"
            ),
        );

        $review_ranges = array(
            '1' => array(
                'id' => 1,
                'name' => "★"
            ),
            '2' => array(
                'id' => 2,
                'name' => "★ ★"
            ),
            '3' => array(
                'id' => 3,
                'name' => "★ ★ ★"
            ),
            '4' => array(
                'id' => 4,
                'name' => "★ ★ ★ ★"
            ),
            '5' => array(
                'id' => 5,
                'name' => "★ ★ ★ ★ ★"
            ),

        );
        $query = DB::table('products');
        $query->select('id', 'name', 'price', 'location', 'geolocation', 'special_price', 'quote');

        // review
        if (isset($review_values) && !empty($review_values)) {
            $query->addSelect(DB::raw('(SELECT AVG(rating) FROM reviews WHERE property_id = products.id) as average_rating'));
        }
        // review End

        $query->where('status', 1);

        if (!empty($type_values)) {
            $query->whereIn('hotel_type', explode(',', $type_values));
        }
        if (!empty($amentity_values)) {
            $valueArray = explode(',', $amentity_values);
            $query->where(function ($query) use ($valueArray) {
                foreach ($valueArray as $value) {
                    $query->orWhere('amentities', 'LIKE', "%$value%");
                }
            });
        }

        if (isset($price_values) && !empty($price_values)) {
            foreach ($price_values as $pvalue) {
                if ($pvalue == 1) {
                    $p1 = 1;
                } else if ($pvalue == 2) {
                    $p2 = 1;
                } else if ($pvalue == 3) {
                    $p3 = 1;
                } else if ($pvalue == 4) {
                    $p4 = 1;
                } else if ($pvalue == 5) {
                    $p5 = 1;
                }
            }
        }

        // if (isset($review_values) && !empty($review_values)) {
        //     foreach ($review_values as $rvalue) {
        //         if ($rvalue == 1) {
        //             $rw1 = 1;
        //         } else if ($rvalue == 2) {
        //             $rw2 = 1;
        //         } else if ($rvalue == 3) {
        //             $rw3 = 1;
        //         } else if ($rvalue == 4) {
        //             $rw4 = 1;
        //         } else if ($rvalue == 5) {
        //             $rw5 = 1;
        //         }
        //     }
        // }

        if (isset($p1) && !empty($p1)) {
            $query->orWhereBetween('special_price', [0, 2000]);
        }
        if (isset($p2) && !empty($p2)) {
            $query->orWhereBetween('special_price', [2001, 4000]);
        }
        if (isset($p3) && !empty($p3)) {
            $query->orWhereBetween('special_price', [4001, 6000]);
        }
        if (isset($p4) && !empty($p4)) {
            $query->orWhereBetween('special_price', [6001, 8000]);
        }
        if (isset($p5) && !empty($p5)) {
            $query->orWhereBetween('special_price', [8001, 100000]);
        }

        // review
        if (isset($review_values) && !empty($review_values)) {
            $query->havingRaw('ROUND(average_rating) IN (' . implode(',', $review_values) . ')');
        }
        // review end

        if (isset($input['sort']) && !empty($input['sort'])) {
            // 1.popularity,  2.rating ,3.price low-high, 4.price high-low
            if ($input['sort'] == 1) {
                $query->orderBy('id', 'DESC');
            } else if ($input['sort'] == 2) {
                $query->orderBy('id', 'DESC');
            } else if ($input['sort'] == 3) {
                $query->orderBy('special_price', 'ASC');
            } else if ($input['sort'] == 4) {
                $query->orderBy('special_price', 'DESC');
            }
        }
        $hotels = $query->get();
        // $hotels = $query->toSql();
        // dd($hotels);
        // $totalCount = $hotels->count();
        $hotels_data = [];
        foreach ($hotels as $hotel) {
            $rate_cn = 0;
            // calculating distance
            if (isset($hotel->geolocation) && !empty($hotel->geolocation)) {
                $coordinates = explode(',', $hotel->geolocation);
                $latitude = $coordinates[0] ? $coordinates[0] : 0;
                $longitude = $coordinates[1] ? $coordinates[1] : 0;
            } else {
                $latitude = 0;
                $longitude = 0;
            }

            if ($search_latitude && $search_longitude) {
                $distance = $this->Distance($search_latitude, $search_longitude, $latitude, $longitude);
            }
            if ($distance <= $km) {
                $image_path = DB::table('images')->select('name')->where('property_id', $hotel->id)->first();
                if (isset($image_path) && !empty($image_path)) {
                    $single_image_path =  $image_path->name;
                } else {
                    $single_image_path =  'placeholder.jpg';
                }

                $image_data = new Product();
                $rating_array =  $image_data->getTotalRatings($hotel->id);

                $hotels_data[] = array(
                    'id' => $hotel->id,
                    'property_name' => $hotel->name,
                    'price' => $hotel->price,
                    'special_price' => $hotel->special_price,
                    'location' => $hotel->location,
                    'path' => $single_image_path,
                    'quote' => $hotel->quote,
                    'rating_count' => $rating_array['average_rating'],
                    'average_rating' => $rate_cn,
                );
            }
        }
        $totalCount = count($hotels_data);
        return view('propertyList')->with('review_ranges', $review_ranges)->with('price_ranges', $price_ranges)->with('amentities', $amentities)->with('hotel_types', $hotel_types)->with('hotels', $hotels_data)->with('totalCount', $totalCount);
    }

    public function info(Request $request)
    {
        $hotel_id = Route::current()->parameter('id');

        $image_data = new Product();
        $images =  $image_data->getHotelImages($hotel_id);
        $hotel_data =  $image_data->getHotelDetails($hotel_id);
        $ratings =  $image_data->getRatings($hotel_id);
        $rating_array =  $image_data->getTotalRatings($hotel_id);
        $image =  $image_data->getHotelSingleImage($hotel_id);

        $daterange = $request->get('daterange') ? $request->get('daterange') : '';
        $room_count = $request->get('rm-count') ? $request->get('rm-count') : 1;
        if (isset($daterange) && !empty($daterange)) {
            $dates =  explode(" - ", $daterange);

            // $date1_str = (DateTime::createFromFormat("d/m/Y", $dates[0]))->format("Y-m-d");
            // $date2_str = (DateTime::createFromFormat("d/m/Y", $dates[1]))->format("Y-m-d");

            $date1_str = DateTime::createFromFormat("d/m/Y", $dates[0]);
            $date2_str = DateTime::createFromFormat("d/m/Y", $dates[1]);

            $date1 = new DateTime($date1_str);
            $date2 = new DateTime($date2_str);

            $interval = $date1->diff($date2);
            $days = $interval->days;
        } else {
            $days = 1;
        }

        // dd($days);

        $total = $days * ($room_count * ($hotel_data['special_price'] ? $hotel_data['special_price'] : $hotel_data['price']));

        return view('detail')->with('total', $total)->with('images', $images)->with('image', $image)->with('hotel_data', $hotel_data)->with('ratings', $ratings)->with('rating_array', $rating_array);
        // return view('detail', [
        //     'images' => $images,
        //     'image' => $image,
        //     'hotel_data' => $hotel_data,
        //     'ratings' => $ratings,
        //     'rating_array' => $rating_array,
        // ]);
    }
}
