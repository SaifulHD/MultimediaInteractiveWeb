<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('landing page/index');
    }

    public function sinkronous()
    {
        return view('content/sinkronous');
    }

    public function asinkronous()
    {
        return view('content/asinkronous');
    }

    public function gabungan()
    {
        return view('content/gabungan');
    }

    public function timeawal()
    {
        return view('content/timeawal');
    }

    public function timeakhir()
    {
        return view('content/timeakhir');
    }
    public function awalakhir()
    {
        return view('content/awalakhir');
    }
    public function tutorial()
    {
        return view('content/tutorial');
    }
}
