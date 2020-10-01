<?php

namespace App\Http\Controllers;

use App\Cannel;
use App\Category;
use App\Course;
use App\Video;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $categories = Category::all();

        $videos = Video::orderBy('created_at', 'desc')->take(8)->get();

        $channels = Cannel::orderBy('created_at', 'desc')->take(8)->get();

        $courses = Course::orderBy('created_at', 'desc')->take(8)->get();


        return view('index', compact('categories', 'videos', 'channels', 'courses'));
    }

    public function historyPage()
    {
        return view('historyPage');
    }
    public function videoPage()
    {
        return view('videoPage');
    }
//    public function uploadVideo()
//    {
//        return view('uploadVideo');
//    }
    public function settings()
    {
        return view('settings');
    }
    public function subscriptions()
    {
        return view('subscriptions');
    }
    public function account()
    {
        return view('account');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        return view('home');
    }



}
