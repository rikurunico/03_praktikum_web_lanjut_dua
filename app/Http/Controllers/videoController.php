<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function video()
    {
        return view('blog.video',
        ['title' => 'Video']);
    }
}
