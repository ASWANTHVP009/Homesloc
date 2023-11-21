<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mainbanner;
use Illuminate\Http\Request;

class MainbannerController extends Controller
{
    public function list()
    {
        $banners = Mainbanner::latest()->paginate(20);
        return view('admin.mainbanner.list', compact('banners'));
        return view('admin.mainbanner.list');
    }
    public function edit($id)
    {
        $banners = Mainbanner::find(decrypt($id));
        return view('admin.mainbanner.edit', compact('banners'));
    }
    public function delete($id)
    {
        $banners = Mainbanner::find(decrypt($id));
        $banners->delete();
        return redirect()->route('admin.mainbanner.list')->with('message', 'banner deleted successfully');
    }
    public function create()
    {
        return view('admin.mainbanner.create');
    }
    public function saveImages(Request $request)
    {

        $image = $request->file('file');
        $fileInfo = $image->getClientOriginalName();
        $filename = pathinfo($fileInfo, PATHINFO_FILENAME);
        $extension = pathinfo($fileInfo, PATHINFO_EXTENSION);
        $file_name = $filename . '-' . time() . '.' . $extension;
        $image->move(public_path('uploads'), $file_name);

        $path = public_path('/uploads');
        $file = $request->file('file');
        $name = uniqid() . '_' . trim($file->getClientOriginalName());
        $file->move($path, $name);

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
        $product = new Mainbanner();
        $product->name = $image_path;
        $product->save();
        return redirect()->route('admin.mainbanner.list')->with('message', 'Banner created successfully');
    }
}
