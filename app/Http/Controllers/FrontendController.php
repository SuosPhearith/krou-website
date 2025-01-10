<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        return view('frontend.home');
    }
    public function worksheet()
    {
        return view('frontend.worksheet');
    }
    public function worksheetDetail()
    {
        return view('frontend.worksheetDetail');
    }
    public function video()
    {
        return view('frontend.video');
    }
    public function videoDetail()
    {
        return view('frontend.videoDetail');
    }
    public function book()
    {
        return view('frontend.book');
    }
    public function bookDetail()
    {
        return view('frontend.bookDetail');
    }
}
