<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class VideoPage extends Controller
{
    public function videoPage()
    {
        return view('blog.video-page',
        ['title' => 'Video-Page'],
        ['videos' => Video::all()]);
    }
}
