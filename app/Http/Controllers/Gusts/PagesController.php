<?php

namespace App\Http\Controllers\Gusts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\House;


class PagesController extends Controller
{
    //


    public function index()
    {
        $latest_houses = House::orderByDesc('id')->take(4)->get();
        //dd($latest_houses);

        return view('welcome', compact('latest_houses'));
    }

    public function houses()
    {
        $houses = House::orderByDesc('id')->paginate(12);
        //dd($latest_houses);

        return view('houses', compact('houses'));
    }
}
