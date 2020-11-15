<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Opinion;

class OpinionController extends Controller
{
	public function home(Request $request)
	{
		$blogs = Opinion::all();

		return view('welcome', ['blogs' => $blogs]);
	}

	public function createOpinion(Request $request)
	{
		$title = request()->input('title');
		$content = request()->input('content');

		$blog = Opinion::create([
			'title' => $title,
			'content' => $content
		]);

		return response()->json([
			"data" => $blog,
		]);
	}
}
