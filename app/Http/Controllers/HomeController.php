<?php

namespace App\Http\Controllers;

use App\Models\Achievment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $data_achiev = Achievment::select([DB::raw('TIMESTAMPDIFF(minute, time_from, time_to) as duration'), 'kode_achievment'])->get();
        return view('home', compact('data_achiev'));
    }
}
