<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class videoPage extends Controller
{
    public function videoPage()
    {
        return view('blog.video-page');
    }
}
