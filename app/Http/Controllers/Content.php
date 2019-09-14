<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content_model;

class Content extends Controller
{
	public function index()
	{
		$content = Content_model::all();
		return view('admin/content',['content'=>$content]);
	}
}
