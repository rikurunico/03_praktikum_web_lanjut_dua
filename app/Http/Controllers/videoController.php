<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
    public function video()
    {
        return view('blog.video',
        ['title' => 'Video'],
        ['videos' => Video::all()]);
    }
}
