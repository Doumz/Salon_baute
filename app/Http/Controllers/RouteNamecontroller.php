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

class RouteNamecontroller extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function barber_shop()
    {
        return view('barber-shop');
    }

    public function service()
    {
        return view('services');
    }

    public function blog()
    {
        return view('blog');
    }

    public function contact()
    {
        return view('contact');
    }

    public function rdv()
    {
        return view('rdv');
    }

    public function detail()
    {
        return view('detail');
    }

    public function pass()
    {
        return view('pass');
    }

    /*sous-page*/
    public function dashForm()
    {
        $make_up= Make_up::all(); 
        return view('dashboard.update.dashForm', compact('make_up'));
    }
    public function form_update()
    {
        return view('dashboard.update.forms');
    }

    public function gallery()
    {
        return view('gallery');
    }

    public function detail_img()
    {
        return view('detail_img');
    }

    public function dashReal()
    {
        return view('dashboard.dashRealisation');
    }

    public function dashPoint()
    {
        return view('dashboard.dashPoint');
    }
}
