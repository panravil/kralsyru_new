<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Wine;
use App\Models\Cheese;
use App\Models\StaticPages;

class HomeController extends Controller
{
    public function index()
	{
		$cheeses = Cheese::where("enabled", "=", "1")->orderBy('ordering', 'ASC')->get();
		$wines = Wine::all();

		request()->segment(1) ? $link = request()->segment(1) : $link = '';
		$cover = StaticPages::where('link', $link)->first();
		if (!$cover) {
			$cover = '/storage/hero-photos/Desktop_cover-ORIGINAL.jpg';
		}

		return view('pages.home')
			->with('title', 'Kral syru')
			->with('wines', $wines)
			->with('cheeses', $cheeses)
			->with('cover', $cover);
	}
}
