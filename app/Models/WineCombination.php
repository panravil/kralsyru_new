<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WineCombination extends Model
{
    use HasFactory;

    public $table = 'wine_combination';


    public function cheeseId()
    {
        return $this->belongsTo('App\Cheese', 'cheese_id', 'cheeses_id');
    }

    public function wineId()
    {
        return $this->belongsTo('App\Wine', 'wine_id', 'wine_id');
    }

    protected $attributes = array(
        'nuts' => '',
        'fruit_fresh' => '',
        'fruit_dried' => '',
        'vegetables' => '',
        'marmelade' => ''
    );
}
