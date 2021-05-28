<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Cheese;
use App\Models\Wine;

class WineController extends Controller
{
    public function index($url) {

		$wine = Wine::where('link', $url)->first();

		if(empty($wine)){
			abort(404);
		}

		$items = DB::table('wine_combination')->where('wine_id', $wine['wine_id'])
			->join('cheeses', 'wine_combination.cheese_id', '=', 'cheeses.cheeses_id')
			->select('wine_combination.*', 'cheeses.*')
			->get();

		return view('pages.matching-wine')
			->with('wine', $wine)
			->with('items', $items);
	}
}
