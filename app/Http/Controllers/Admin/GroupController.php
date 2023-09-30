<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function list()
    {
        $groups = Group::latest()->paginate(20);
        return view('admin.group.list', compact('groups'));
        return view('admin.group.list');
    }
    public function create()
    {
        return view('admin.group.create');
    }
    public function delete($id)
    {
        $menu = Group::find(decrypt($id));
        $menu->delete();
        return redirect()->route('admin.group.list')->with('message', 'User Group deleted successfully');
    }
    public function edit($id)
    {
        $groups = Group::find(decrypt($id));
        return view('admin.group.edit', compact('groups'));
    }
    public function update(Request $request)
    {
        $input = request()->only(['name', 'manager']);
        $groups = Group::find(decrypt($request->group_id));

        // dd($groups);

        $groups->update($input);
        return redirect()->route('admin.group.list')->with('message', 'Menu updated successfully');
    }

    public function save()
    {
        $input = request()->only(['name', 'manager']);
        $menu = new Group();
        $menu->name = $input['name'];
        $menu->manager = $input['manager'];
        $menu->save();
        return redirect()->route('admin.group.list')->with('message', 'User Group created successfully');
    }
}
