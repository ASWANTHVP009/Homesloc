<?php

namespace App\Http\Controllers\Admin;

use App\Models\Amenity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AmenityController extends Controller
{
    public function list()
    {
        $amentities = Amenity::orderby('sort_order', 'asc')->select('id', 'name')->get();

        dd($amentities);
        foreach ($amentities as $value) {
            $response[] = array(
                'id' => $value['id'],
                'name' => $value['name']
            );
        }

        return $response;
        return view('admin.amenity.list');
    }
    public function create()
    {
        return view('admin.amenity.create');
    }

    public function amenitytSave()
    {
        $input = request()->only(['name', 'sort_order', 'status']);
        DB::table('amentities')->insert(
            [
                'name' => $input['name'],
                'sort_order' => $input['sort_order'],
                'status' => $input['status'],
            ]
        );
        // $amenity = new Amenity();
        // $amenity->name = $input['name'];
        // $amenity->sort_order = $input['sort_order'];
        // $amenity->status = $input['status'];
        // $amenity->save();
        return view('admin.amenity.list');
    }
}
