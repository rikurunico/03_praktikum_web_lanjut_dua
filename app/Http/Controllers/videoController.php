<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class videoController extends Controller
{
    public function video()
    {
        return view('blog.video');
    }
}
