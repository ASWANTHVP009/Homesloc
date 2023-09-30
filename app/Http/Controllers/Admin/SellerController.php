<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Group;
use App\Models\Seller;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function list()
    {
        $sellers = Admin::latest()->paginate(20);
        return view('admin.seller.list', compact('sellers'));
        return view('admin.seller.list');
    }
    public function create()
    {
        $groups = Group::all();
        return view('admin.seller.create')->with('groups', $groups);
    }
    public function delete($id)
    {
        $menu = Admin::find(decrypt($id));
        $menu->delete();
        return redirect()->route('admin.seller.list')->with('message', 'Menu deleted successfully');
    }
    public function edit($id)
    {
        $groups = Group::all();
        $sellers = Admin::find(decrypt($id));
        return view('admin.seller.edit', compact('sellers'))->with('groups', $groups);
    }
    public function update(Request $request)
    {
        $input = request()->only(['name', 'username', 'password', 'user_group_id', 'status']);
        $input['password'] = bcrypt($input['password']);
        $sellers = Admin::find(decrypt($request->seller_id));
        $sellers->update($input);
        return redirect()->route('admin.seller.list')->with('message', 'User updated successfully');
    }

    public function save()
    {
        $input = request()->all();
        $seller = new Admin();
        $seller->name = $input['name'];
        $seller->username = $input['username'];
        $seller->password = bcrypt($input['password']);
        $seller->user_group_id = $input['user_group'];
        $seller->status = $input['status'];
        $seller->save();

        return redirect()->route('admin.seller.list')->with('message', 'Menu created successfully');
    }
}
