<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;

class VideoController extends Controller
{
    public function show($id)
    {
    	$video = Video::find(1);
        return view('videos.show', array('video' => $video));
    }
}
