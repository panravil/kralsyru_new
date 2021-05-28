<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function cheeseId()
    {
        return $this->belongsTo('App\Cheese', 'cheese_id', 'cheeses_id');
    }

    protected $attributes = array(
        'img' => '',
        'title' => '',
        'ordering' => 1
    );
}
