<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Map;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $now = now();
        // $date= $now->toDateString();

        // $item = Map::whereDate('akhir_pelaksanaan', '<=', $date);
        
        $item = Map::where('blok', 'C401');

        dd($item);

        return view('pages.home',[
            'item' => $item,
        ]);
    }
}
