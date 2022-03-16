<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class VideoPage extends Controller
{
    public function videoPage()
    {
        $videos = Video::paginate(3);
        return view('blog.video-page',['title' => 'Video'],['videos' => $videos]);
    }
}
