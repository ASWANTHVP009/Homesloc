<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    //     public function getAmentitiesAttribute($value)
    //     {
    //         return explode(',', $value);
    //     }
    // 
    //     public function setAmentitiesAttribute($value)
    //     {
    //         $this->attributes['amentities'] = implode(',', $value);
    //     }
    // 
    //     public function getMenusAttribute($value)
    //     {
    //         return explode(',', $value);
    //     }
    // 
    //     public function setMenusAttribute($value)
    //     {
    //         $this->attributes['menus'] = implode(',', $value);
    //     }
    // 
    //     public function images()
    //     {
    //         return $this->hasMany(Images::class);
    //     }
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

    public function recommendedHotels()
    {
        $hotels = DB::table('products')->select('id', 'name', 'price', 'location', 'special_price', 'quote')->where('hotel_type', 6)->where('status', 1)->get();
        $hotels_data = [];
        foreach ($hotels as $hotel) {

            $image_path = DB::table('images')->select('name')->where('property_id', $hotel->id)->first();

            if (isset($image_path) && !empty($image_path)) {
                $single_image_path =  $image_path->name;
            } else {
                $single_image_path =  'placeholder.jpg';
            }

            $rate_cn = 0;
            $image_data = new Product();
            $rating_array =  $image_data->getTotalRatings($hotel->id);
            $ratings =  $image_data->getRatings($hotel->id);
            $hotels_data[] = array(
                'id' => $hotel->id,
                'property_name' => $hotel->name,
                'price' => $hotel->price,
                'special_price' => $hotel->special_price,
                'location' => $hotel->location,
                'quote' => $hotel->quote,
                'rating_count' => count($ratings),
                'average_rating' => $rating_array['average_rating'],
                'path' => $single_image_path,
            );
        }
        return $hotels_data;
    }

    public function getHotelBasicdatas()
    {
        $hotels = DB::table('products')->select('id', 'name', 'price', 'location', 'special_price', 'quote', 'status')->where('status', 1)->get();

        $hotels_data = [];
        foreach ($hotels as $hotel) {

            $image_path = DB::table('images')->select('name')->where('property_id', $hotel->id)->first();

            if (isset($image_path) && !empty($image_path)) {
                $single_image_path =  $image_path->name;
            } else {
                $single_image_path =  'placeholder.jpg';
            }
            // dd($image_path);

            // $ratings = DB::table('rating')
            //     ->selectRaw('COUNT(*) as count, SUM(rating) AS total')
            //     ->where([
            //         ['hotel_id', '=', $hotel->id],
            //         ['status', '=', 1]
            //     ])
            //     ->first();

            //             if ($ratings->count == 0) {
            // 
            //                 $rate_cn = 0;
            //             } else {
            // 
            //                 $rate_cn = ($ratings->total) / $ratings->count;
            //             }

            $rate_cn = 0;

            $image_data = new Product();
            $rating_array =  $image_data->getTotalRatings($hotel->id);
            $ratings =  $image_data->getRatings($hotel->id);
            $hotels_data[] = array(
                'id' => $hotel->id,
                'property_name' => $hotel->name,
                'price' => $hotel->price,
                'special_price' => $hotel->special_price,
                'location' => $hotel->location,
                // 'path' => 'files/9Rrrf-Kjll5kSg1ilKNTB5NvwiiHOP5pBkm1rBk-K3I=_plaintext_638270220129039908.jpg',
                'quote' => $hotel->quote,
                'rating_count' => count($ratings),
                'average_rating' => $rating_array['average_rating'],
                'path' => $single_image_path,
            );
        }

        // dd($hotels_data);

        return $hotels_data;
    }

    public function getHotelImages($hotel_id)
    {
        $images = DB::table('images')->select('name')->where('property_id', $hotel_id)->get();
        $image_data = [];
        foreach ($images as $image) {
            $image_data[] = array(
                'path' => $image->name,
            );
        }
        return $image_data;
    }
    // 
    public function getHotelSingleImage($hotel_id)
    {
        $images = DB::table('images')->select('name')->where('property_id', $hotel_id)->first();

        if (isset($images) && !empty($images)) {
            $single_image_path =  $images->name;
        } else {
            $single_image_path['path'] =  'placeholder.jpg';
        }

        // dd($images);
        return $single_image_path;
    }
    // 
    public function getHotelDetails($hotel_id)
    {
        $hotel_data = DB::table('products')->select('*')->where('id', $hotel_id)->first();
        if (isset($hotel_data->amentities) && !empty($hotel_data->amentities)) {

            $amentities = Amentity::whereIn('id', explode(',', $hotel_data->amentities))->pluck('name');

            // $amentities = DB::table('amentity')->select('name')->wherein('id', [trim($hotel_data->amentities, '"')])->get();
        } else {
            $amentities = [];
        }
        if (isset($hotel_data->menus) && !empty($hotel_data->menus)) {
            $menus = Menu::whereIn('id', explode(',', $hotel_data->menus))->pluck('name');
        } else {
            $menus = [];
        }

        if (isset($hotel_data->geolocation) && !empty($hotel_data->geolocation)) {

            $loc = explode(',', $hotel_data->geolocation);

            if ($loc[0] && !empty($loc[0])) {

                $latitude = $loc[0];
            } else {
                $latitude = '';
            }

            if ($loc[1] && !empty($loc[1])) {

                $longitude = $loc[1];
            } else {
                $longitude = '';
            }
        } else {
            $latitude = '';
            $longitude = '';
        }
        $data = array(
            'id' => $hotel_data->id,
            'property_name' => $hotel_data->name,
            'description' => $hotel_data->description,
            'price' => $hotel_data->price,
            'special_price' => $hotel_data->special_price,
            'geolocation' => $hotel_data->geolocation,
            'quote' => $hotel_data->quote,
            'hotel_type' => $hotel_data->hotel_type,
            'checkin' => $hotel_data->checkin,
            'checkout' => $hotel_data->checkout,
            'location' => $hotel_data->location,
            'rating' => $hotel_data->rating,
            'hotel_policy' => $hotel_data->hotel_policy,
            'latitude' => $latitude,
            'longitude' => $longitude,
            'amentities' => $amentities,
            'menus' => $menus,
        );
        return $data;
    }
    // 
    public function getRatings($hotel_id)
    {
        $ratings = DB::table('reviews')
            ->select(
                'reviews.customer_id',
                'reviews.rating',
                'reviews.description',
                'reviews.created_at',
                'users.name',
                // 'users.last_name',
            )
            ->leftJoin('users', 'users.id', '=', 'reviews.customer_id')
            ->where([
                ['reviews.property_id', '=', $hotel_id],
                ['reviews.status', '=', 1]
            ])
            ->get();
        return $ratings;
    }
    public function getTotalRatings($hotel_id)
    {
        $ratings = DB::table('reviews')
            ->selectRaw('COUNT(*) as count, SUM(rating) AS total')
            ->where([
                ['property_id', '=', $hotel_id],
                ['status', '=', 1]
            ])
            ->first();

        if (!empty($ratings)) {

            $data = array(
                'rating_count' => $ratings->count,
                'average_rating' => $ratings->total ? ($ratings->total) / $ratings->count : 0,
                'five_rating' => $this->calculateRating(5, $hotel_id),
                'four_rating' => $this->calculateRating(4, $hotel_id),
                'three_rating' => $this->calculateRating(3, $hotel_id),
                'two_rating' => $this->calculateRating(2, $hotel_id),
                'one_rating' => $this->calculateRating(1, $hotel_id),
            );
        } else {
            $data = null;
        }
        return $data;
    }
    public function calculateRating($rating, $hotel_id)
    {
        $ratings = DB::table('reviews')
            ->selectRaw('COUNT(*) as count')
            ->where([
                ['property_id', '=', $hotel_id],
                ['status', '=', 1],
                ['rating', '=', $rating]
            ])
            ->first();
        return $ratings->count;
    }

    public function getBanners()
    {
        $banners = DB::table('banners')->select('id', 'name')->get();
        $banners_data = [];
        foreach ($banners as $banner) {
            $banners_data[] = array(
                'id' => $banner->id,
                'path' => $banner->name
            );
        }
        return $banners_data;
    }
    public function getMainBanners()
    {
        $banners = DB::table('mainbanners')->select('id', 'name')->first();
        $banners_data = array(
            'id' => $banners->id,
            'path' => $banners->name
        );

        return $banners_data;
    }

    public function getMobileBanners()
    {
        $mobile_banners = DB::table('banners')->take(2)->select('id', 'name')->get();
        $mobile_banners_data = [];
        foreach ($mobile_banners as $banner) {
            $mobile_banners_data[] = array(
                'id' => $banner->id,
                'path' => $banner->name
            );
        }
        return $mobile_banners_data;
    }

    // Location Banners
    public function getLocationBanners()
    {
        $images = DB::table('locations')->select('*')->where('status', '!=', 1)->get();
        $image_data = [];

        foreach ($images as $image) {
            $data[] = array(
                'id' =>  $image->id,
                'title' =>  $image->title,
                'location' =>  $image->location,
                'description' =>  $image->description,
                'path' =>  $image->path,
            );
        }
        return $data;
    }
    // 
    public function getMainLocationBanners()
    {
        $images = DB::table('locations')->select('*')->where('status', 1)->first();
        if (isset($images) && !empty($images)) {
            $data = array(
                'id' =>  $images->id,
                'title' =>  $images->title,
                'location' =>  $images->location,
                'description' =>  $images->description,
                'path' =>  $images->path,
            );
        } else {
            $data = '';
        }
        return $data;
    }
    // end

    // room type
    public function getRoomTypes($hotel_id)
    {
        // $hotel_data = DB::table('roomtypes')->select('*')->where('property_id', $hotel_id)->get();
        $hotel_data = Roomtype::where('property_id', $hotel_id)->orderBy('id', 'asc')->get();

        if ($hotel_data->isNotEmpty()) {
            foreach ($hotel_data as $value) {
                if (isset($value->amentities) && !empty($value->amentities)) {
                    $amentities = Amentity::whereIn('id', explode(',', $value->amentities))->pluck('name');
                } else {
                    $amentities = [];
                }
                $room_types[] = array(
                    'id' => $value['id'],
                    'property_id' => $value['id'],
                    'price' => $value['price'],
                    'special_price' => $value['special_price'],
                    'name' => $value['name'],
                    'image' => $value['image'],
                    'amentities' => $amentities
                );
            }
        } else {
            $room_types = array();
        }
        return $room_types;
    }
}
