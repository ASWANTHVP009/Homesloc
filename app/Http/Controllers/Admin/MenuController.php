<?php

namespace App\Http\Controllers\Admin;

use App\Models\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuController extends Controller
{
    public function list()
    {
        $menus = Menu::latest()->paginate(20);
        return view('admin.menu.list', compact('menus'));
        return view('admin.menu.list');
    }
    public function create()
    {
        return view('admin.menu.create');
    }
    public function delete($id)
    {
        $menu = Menu::find(decrypt($id));
        $menu->delete();
        return redirect()->route('admin.menu.list')->with('message', 'Menu deleted successfully');
    }
    public function edit($id)
    {
        $menus = Menu::find(decrypt($id));
        return view('admin.menu.edit', compact('menus'));
    }
    public function update(Request $request)
    {
        $input = request()->only(['name', 'sort_order', 'status']);
        $menus = Menu::find(decrypt($request->menu_id));
        $menus->update($input);
        return redirect()->route('admin.menu.list')->with('message', 'Menu updated successfully');
    }

    public function save()
    {
        $input = request()->only(['name', 'sort_order', 'status']);
        $menu = new Menu();
        $menu->name = $input['name'];
        $menu->sort_order = $input['sort_order'];
        $menu->status = $input['status'];
        $menu->save();
        return redirect()->route('admin.menu.list')->with('message', 'Menu created successfully');
    }
}
