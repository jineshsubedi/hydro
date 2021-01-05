<?php

namespace App\Http\Controllers\Theme;

use DB;
use Auth;
use Session;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\ProductAttachment;
use App\Http\Controllers\Controller;

class ThemeController extends Controller
{
    public function index(Request $request)
    {
    	return view('theme.index');
    }

    //about section
    public function company_overview()
    {
        return view('theme.company_overview');
    }
    public function mission_vision()
    {
        return view('theme.mission_vision');
    }
    public function chairman_message()
    {
        return view('theme.chairman_message');
    }
    public function team()
    {
        return view('theme.team');
    }

    //reports
    public function reports()
    {
        return view('theme.reports');
    }

    //news n event
    public function news_event()
    {
        return view('theme.news_event');
    } 
    public function news_event_view($slug)
    {
        return view('theme.news_event_view');
    }

    //gallery
    public function photo_gallery()
    {
        return view('theme.photo_gallery');
    }
    public function video_gallery()
    {
        return view('theme.video_gallery');
    }

    //contact
    public function contact()
    {
        return view('theme.contact');
    }
}
