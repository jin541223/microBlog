<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Auth;

class StaticPagesController extends Controller
{
    public function home()
    {
        $feedItems = [];
        if (Auth::user()) {
            $feedItems = Auth::user()->feed()->paginate(30);
        }

        return view('staticPages/home', compact('feedItems'));
    }

    public function help()
    {
        return view('staticPages/help');
    }

    public function about()
    {
        return view('staticPages/about');
    }
}
