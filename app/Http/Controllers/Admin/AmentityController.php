<?php

namespace App\Http\Controllers\Admin;

use App\Models\Amentity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AmentityController extends Controller
{
    public function list()
    {
        $amentities = Amentity::latest()->paginate(5);
        return view('admin.amentity.list', compact('amentities'));
        return view('admin.amentity.list');
    }
    public function create()
    {
        return view('admin.amentity.create');
    }
    public function delete($id)
    {
        $amentity = Amentity::find(decrypt($id));
        $amentity->delete();
        return redirect()->route('admin.amentity.list')->with('message', 'Amentity deleted successfully');
    }
    public function edit($id)
    {
        $amentities = Amentity::find(decrypt($id));
        return view('admin.amentity.edit', compact('amentities'));
    }
    public function update(Request $request)
    {
        $input = request()->only(['name', 'sort_order', 'status']);
        $amentities = Amentity::find(decrypt($request->amentity_id));
        $amentities->update($input);
        return redirect()->route('admin.amentity.list')->with('message', 'Amentity updated successfully');
    }

    public function save()
    {
        $input = request()->only(['name', 'sort_order', 'status']);
        $amenity = new Amentity();
        $amenity->name = $input['name'];
        $amenity->sort_order = $input['sort_order'];
        $amenity->status = $input['status'];
        $amenity->save();
        return redirect()->route('admin.amentity.list')->with('message', 'Amentity created successfully');
    }
}
