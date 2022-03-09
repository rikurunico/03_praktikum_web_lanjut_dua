<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoPage extends Controller
{
    public function videoPage()
    {
        return view('blog.video-page',
        ['title' => 'Video-Page']);
    }
}
