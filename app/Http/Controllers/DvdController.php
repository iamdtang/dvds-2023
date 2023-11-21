<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DvdController extends Controller
{
    public function index()
    {
        // SELECT * FROM dvd_titles
        $dvds = DB::table('dvd_titles')->get();

        return view('index', [
            'dvds' => $dvds,
        ]);
    }
}
