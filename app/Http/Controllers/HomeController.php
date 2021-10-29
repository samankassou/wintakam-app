<?php

namespace App\Http\Controllers;

use App\Models\Advert;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $latestAds = Advert::latest()->paginate(10);
        //dd(auth()->user()->getMedia());
        return view('home', [
            'adverts' => $latestAds
        ]);
    }
}
