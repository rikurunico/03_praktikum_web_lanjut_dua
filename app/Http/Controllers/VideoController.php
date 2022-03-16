<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
    public function video()
    {
        $videos = Video::paginate(3);
        return view('blog.video',['title' => 'Video'],['videos' => $videos]);
    }
}
