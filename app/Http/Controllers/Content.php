<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App/Content;

class Content extends Controller
{
	$content = Content::all();
	return view('admin/content',['content'=>$content]);
}
