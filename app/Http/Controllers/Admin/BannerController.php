<?php

namespace App\Http\Controllers\Admin;

use App\Models\Banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BannerController extends Controller
{
    public function list()
    {
        $banners = Banner::latest()->paginate(20);
        return view('admin.banner.list', compact('banners'));
        return view('admin.banner.list');
    }
    public function edit($id)
    {
        $banners = Banner::find(decrypt($id));
        return view('admin.banner.edit', compact('banners'));
    }
    public function delete($id)
    {
        $banners = Banner::find(decrypt($id));
        $banners->delete();
        return redirect()->route('admin.banner.list')->with('message', 'banner deleted successfully');
    }
    public function create()
    {
        return view('admin.banner.create');
    }
    public function saveImages(Request $request)
    {

        $image = $request->file('file');
        $fileInfo = $image->getClientOriginalName();
        $filename = pathinfo($fileInfo, PATHINFO_FILENAME);
        $extension = pathinfo($fileInfo, PATHINFO_EXTENSION);
        $file_name = $filename . '-' . time() . '.' . $extension;
        $image->move(public_path('uploads'), $file_name);

        dd('adasd');

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
        $product = new Banner();
        $product->name = $image_path;
        $product->sort_order = $input['sort_order'];
        $product->save();
        return redirect()->route('admin.banner.list')->with('message', 'Banner created successfully');
    }
}
