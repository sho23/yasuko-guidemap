<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TracksController extends Controller
{
    public function index()
    {
        // $tracks = DB::table('tracks')->where('publish_flag', 1)->where('name', 'like', '%JR%')->orderBy('id', 'desc')->get();
        // $tracks = DB::table('tracks')->where('publish_flag', 1)->where('name', 'like', '%JR%')->orderBy('id', 'desc')->get();
        $tracks = DB::table('tracks')->where('publish_flag', 1)->orderBy('id', 'desc')->get();
        return view('tracks.index', compact('tracks'));
    }
}
