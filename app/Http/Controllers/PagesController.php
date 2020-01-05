<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Song;
use App\Image;
use Auth;

class PagesController extends Controller
{
    public function home(){
        return view('pages.dashboard');
    }

    public function music()
    {
        return view('pages.muzic');
    }

    public function image(Request $request)
    {
        return view('pages.image');
    }
    
}
