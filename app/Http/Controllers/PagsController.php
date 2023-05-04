<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;


class PagsController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('pags.about');
    }

    public function resume()
    {
        return view('pags.resume');
    }

    public function services()
    {
        return view('pags.services');
    }

    public function portfolio()
    {
        return view('pags.portfolio');
    }

    public function contact()
    {
        return view('pags.contact');
    }
}
