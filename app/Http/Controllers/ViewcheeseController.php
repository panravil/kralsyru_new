<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cheese;

class ViewcheeseController extends Controller
{
    public function index($url)
	{
		$cheese = Cheese::with('package')->where('link', $url)->first();
		if (empty($cheese)) {
			abort(404);
		}
		$items = DB::table('cheese_combinations')->where('cheese_id', $cheese['cheeses_id'])->paginate(1);

		//return($items);
		return view('pages.view-cheese')
			->with('cheese', $cheese)
			->with('items', $items);
	}
}
