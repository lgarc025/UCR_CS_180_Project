<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function about()
    {
        $name = 'Luis';
        //return 'About Me';
        return view ('about')->with('name', $name);

    }
}
