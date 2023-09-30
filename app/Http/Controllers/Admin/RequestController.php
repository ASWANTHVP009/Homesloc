<?php

namespace App\Http\Controllers\Admin;

use App\Models\Menu;
use App\Models\Type;
use App\Models\Amentity;
use App\Models\Callback;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RequestController extends Controller
{
    public function list()
    {
        $callbacks = Callback::latest()->paginate(20);
        return view('admin.request.list', compact('callbacks'));
        return view('admin.request.list');
    }
    public function create()
    {
        $callbacks = Callback::all();
        return view('admin.request.create')->with('callbacks', $callbacks);
    }
    public function delete($id)
    {
        $callbacks = Callback::find(decrypt($id));
        $callbacks->delete();
        return redirect()->route('admin.request.list')->with('message', 'Menu deleted successfully');
    }
    public function edit($id)
    {
        $amentities = Amentity::all();
        $menus = Menu::all();
        $types = Type::all();

        $callbacks = Callback::find(decrypt($id));

        return view('admin.request.edit', compact('callbacks'))->with('amentities', $amentities)->with('menus', $menus)->with('types', $types);
    }
    public function update(Request $request)
    {
        $input = request()->only(['name', 'username', 'password', 'user_group_id', 'status']);
        $input['password'] = bcrypt($input['password']);
        $sellers = Callback::find(decrypt($request->seller_id));
        $sellers->update($input);
        return redirect()->route('admin.request.list')->with('message', 'User updated successfully');
    }

    public function save()
    {
        $input = request()->all();
        $seller = new Callback();
        $seller->name = $input['name'];
        $seller->username = $input['username'];
        $seller->password = bcrypt($input['password']);
        $seller->user_group_id = $input['user_group'];
        $seller->status = $input['status'];
        $seller->save();

        return redirect()->route('admin.request.list')->with('message', 'Menu created successfully');
    }
}
