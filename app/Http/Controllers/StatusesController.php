<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Status;
use Auth;

class StatusesController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    /**
     * 保存动态
     */
    public function store(Request $request)
    {
    	$this->validate($request, [
    		'content' => 'required|max:140'
    	]);

    	Auth::user()->statuses()->create([
    		'content' => $request->input('content')
    	]);

    	session()->flash('success', '发布成功');

    	return redirect()->back();
    }
}
