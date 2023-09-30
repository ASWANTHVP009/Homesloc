<?php

namespace App\Http\Controllers\Admin;

use App\Models\Type;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TypeController extends Controller
{
    public function list()
    {
        $types = Type::latest()->paginate(5);
        return view('admin.type.list', compact('types'));
        return view('admin.type.list');
    }
    public function create()
    {
        return view('admin.type.create');
    }
    public function delete($id)
    {
        $type = Type::find(decrypt($id));
        $type->delete();
        return redirect()->route('admin.type.list')->with('message', 'Hotel Type deleted successfully');
    }
    public function edit($id)
    {
        $types = Type::find(decrypt($id));
        return view('admin.type.edit', compact('types'));
    }
    public function update(Request $request)
    {
        $input = request()->only(['name', 'sort_order', 'status']);
        $types = Type::find(decrypt($request->type_id));
        $types->update($input);
        return redirect()->route('admin.type.list')->with('message', 'Hotel Type updated successfully');
    }

    public function save()
    {
        $input = request()->only(['name', 'sort_order', 'status']);
        $type = new Type();
        $type->name = $input['name'];
        $type->sort_order = $input['sort_order'];
        $type->status = $input['status'];
        $type->save();
        return redirect()->route('admin.type.list')->with('message', 'Hotel Type created successfully');
    }
}
