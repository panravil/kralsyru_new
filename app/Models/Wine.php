<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wine extends Model
{
    use HasFactory;

    /*public function cheese($id) {
		return $this->belongsToMany('App\Cheese');
	}*/

	public function __construct(array $attributes = [])
	{
		$this->wine_id = time();

		parent::__construct($attributes);
	}

	public function getWineByCheese($id)
	{
		$wines = Wine::where('wine_id', $id)->get();
		return $wines;
	}

	protected $attributes = array(
		'title' => '',
		'text' => '',
		'img' => '',
		'link' => ''
	);
}
