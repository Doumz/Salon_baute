<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coiffure;
use App\Models\Comment;
use App\Models\Image;
use App\Models\Make_up;
use App\Models\Massage;
use App\Models\Preocupation;
use App\Models\Realisation;
use App\Models\Reservation;

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
      
        $coiffure = Coiffure::all();
        $make_up= Make_up::all();
        $massage= Massage::all();
        $realisation= Realisation::all();
        $reservation= Reservation::all();
        $image= Image::all();
        return view('home', compact('coiffure','make_up' ,'massage' ,'reservation','image'));
       
    }
}
