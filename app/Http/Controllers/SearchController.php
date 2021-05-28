<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cheese;
use App\Models\Wine;

class SearchController extends Controller
{
    public function search(Request $request) {

		$query = $request->input('q');

		if ( $query ) {

			$post = Cheese::where('title', 'LIKE', "%$query%")->get();

			$post_id = $post->toArray();
			$post_id = $post_id[0]["cheese_id"];

			$wines = new Wine();
			$wines = $wines->getWineByCheese($post_id);

			return view('pages.matching')
				->with('wines', $wines)
				->with('cheeses', $post);

		}
	}
}
