<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cheese extends Model
{
    use HasFactory;

    public function __construct(array $attributes = [])
	{
		$this->cheeses_id = time();

		parent::__construct($attributes);
	}

	public function wine()
	{
		return $this->belongsToMany('App\Wine');
	}

	public function package()
	{
		return $this->hasMany('App\Models\Package', 'cheese_id', 'cheeses_id');
	}

	protected $attributes = array(
		'title' => '',
		'text' => '',
		'img' => '',
		'link' => '',
		'exp_high' => '',
		'exp_medium' => '',
		'exp_low' => '',
		'high' => '',
		'medium' => '',
		'low' => '',
		'structure' => '',
		'proteins' => '',
		'carbos' => '',
		'fats' => '',
		'cover' => '',
		'energy' => '',
		'taste' => '',
		'ordering' => 1
	);
}
