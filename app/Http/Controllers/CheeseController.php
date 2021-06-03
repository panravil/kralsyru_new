<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Cheese;
use App\Models\Wine;

class CheeseController extends Controller
{
    /**
	 * @param $id
	 * @return mixed
	 */
	public function index($url) {

		$cheeses = Cheese::orderBy('ordering','ASC')->get();
		$wines = Wine::all();

		$cheese = Cheese::where('link', $url)->first();
		if(empty($cheese)){
			abort(404);
		}
		$items = DB::table('cheese_combinations')->where('cheese_id', $cheese['cheeses_id'])->get();


		//return($items);
		return view('pages.matching-cheese')
			->with('cheese', $cheese)
			->with('cheeses', $cheeses)
			->with('wines', $wines)
			->with('items', $items);
	}
}
