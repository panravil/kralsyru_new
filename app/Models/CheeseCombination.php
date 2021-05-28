<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheeseCombination extends Model
{
    use HasFactory;

    public function cheeseId()
    {
        return $this->belongsTo('App\Cheese', 'cheese_id', 'cheeses_id');
    }

    protected $attributes = array(
        'nuts' => '',
        'fruit_fresh' => '',
        'fruit_dried' => '',
        'vegetables' => '',
        'marmelade' => '',
        'wine_general' => '',
        'wine_special' => ''
    );
}
