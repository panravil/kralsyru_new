<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\StaticPages;

class CheesecareController extends Controller
{
    /**
     * @param $id
     * @return mixed
     */

    public function index()
    {
        request()->segment(1) ? $link = request()->segment(1) : $link = '';

        $cover = StaticPages::where('link', $link)->first();

        if (!$cover) {
            $cover = '/storage/hero-photos/Desktop_cover-ORIGINAL.jpg';
        }

        return view('pages.cheesecare')
            ->with('cover', $cover);
    }
}
