<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class NewsletterController extends Controller
{
    public function list()
    {
        $datas = DB::table('newsletter')->latest()->paginate(20);
        return view('admin.newsletter.list', compact('datas'));
        return view('admin.newsletter.list');
    }
}
