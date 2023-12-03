<?php

namespace App\Http\Controllers\Admin;

use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LocationController extends Controller
{
    public function list()
    {
        $banners = Location::latest()->paginate(20);
        return view('admin.location.list', compact('banners'));
        return view('admin.location.list');
    }
    public function edit($id)
    {
        $banners = Location::find(decrypt($id));
        return view('admin.location.edit', compact('banners'));
    }
    public function delete($id)
    {
        $banners = Location::find(decrypt($id));
        $banners->delete();
        return redirect()->route('admin.location.list')->with('message', 'banner deleted successfully');
    }
    public function create()
    {
        return view('admin.location.create');
    }
    public function saveImages(Request $request)
    {

        $image = $request->file('file');
        $fileInfo = $image->getClientOriginalName();
        $filename = pathinfo($fileInfo, PATHINFO_FILENAME);
        $extension = pathinfo($fileInfo, PATHINFO_EXTENSION);
        $file_name = $filename . '-' . time() . '.' . $extension;
        $image->move(public_path('uploads'), $file_name);

        // $path = storage_path('tmp/uploads');
        $path = public_path('/uploads');

        $file = $request->file('file');
        $name = uniqid() . '_' . trim($file->getClientOriginalName());
        // dd($file);
        // $file->move('img/', $name);

        $file->move($path, $name);

        // $destinationPath = 'img';
        // $request->file->move(public_path($destinationPath), $name);
        return response()->json([
            'name'          => $name,
            'original_name' => $file->getClientOriginalName(),
        ]);
        return 'success';
    }
    public function save(Request $request)
    {
        $input = request()->all();
        foreach ($request->input('document', []) as $file) {
            $image_path = $file;
        }
        $product = new Location();
        $product->title = $input['title'];
        $product->location = $input['location'];
        $product->description = $input['description'];
        $product->path = $image_path;
        $product->status = $input['status'];
        $product->save();

        return redirect()->route('admin.location.list')->with('message', 'Banner created successfully');
    }
}
