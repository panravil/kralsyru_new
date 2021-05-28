<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cheese;
use App\Models\OurCheesesPage;
use App\Models\StaticPages;

class OurcheeseController extends Controller
{
    public function index()
	{
		$original = Cheese::where([['enabled', 1], ['original', 1]])->orderBy('ordering', 'ASC')->get();
		//$original = Cheese::where([ ['enabled', '=', 1] ])->get();
		$special = Cheese::where('original', 0)->where('enabled', 1)->orderBy('ordering', 'ASC')->get();

		$text = OurCheesesPage::where('id', 1)->first();

		request()->segment(1) ? $link = request()->segment(1) : $link = '';
		$cover = StaticPages::where('link', $link)->first();
		if (!$cover) {
			$cover = '/storage/hero-photos/Desktop_cover-ORIGINAL.jpg';
		}

		return view('pages.our-cheese')
			->with('title', 'Král sýrů')
			->with('original', $original)
			->with('special', $special)
			->with('text', $text)
			->with('cover', $cover);
	}
}
