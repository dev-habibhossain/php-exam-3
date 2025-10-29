<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function home()
    {
        return view('Portfolio.layouts.app');
    }

    public function index()
    {
        return view('Portfolio.pages.Home');
    }
    
    public function resume()
    {
        return view('Portfolio.pages.Resume');
    }
    public function contact()
    {
        return view('Portfolio.pages.Contact');
    }

    public function projects()
    {
        return view('Portfolio.pages.Projects');
    }
}
