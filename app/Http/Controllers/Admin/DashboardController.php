<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Admin;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController
{
    public function dashboard()
    {
        $user = User::get();
        $property = Product::get();

        $user_count = $user->count();
        $property_count = $property->count();

        $user_id = auth()->guard('admin')->id();
        $user_group = Admin::select('user_group_id')->find(auth()->guard('admin')->id());

        return view('admin.dashboard', [
            'user_count' => $user_count,
            'property_count' => $property_count,
            'user' => $user,
            'user_group' => $user_group,
            'user_id' => $user_id,
            'property' => $property,
        ]);
        // return view('admin.dashboard');
    }
}
