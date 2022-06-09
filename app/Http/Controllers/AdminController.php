<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use User;
use Auth;
use Session;
use App\Models\News;
use App\Models\Event;
use App\Models\PastEvent;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $user = auth()->user();
            
            //View::share(['userProfile' => $this->userProfile ]);
            return $next($request);
        });
    }

    public function dashboard(Request $request)
    {
        $user = Auth::user();
        return view('admin.dashboard',compact('request','user'));
    }

    public function viewNews(Request $request)
    {
        $user = Auth::user();
        $newslist = News::orderBy('id','desc')->paginate();
        return view('admin.news',compact('request','user','newslist'));
    }

    public function addNews(Request $request)
    {
        $user = Auth::user();
        return view('admin.newsadd',compact('request','user'));
    }

    public function addNewsSubmit(Request $request)
    {
        $user = Auth::user();

        $cardfile = $request->file('card_image');
        $cardfileupload = json_decode(fileUpload($cardfile,'images/news', 'default', $type="Image"), true);
        $cardfilestatus = $cardfileupload['status'];

        $coverfile = $request->file('cover_image');
        $coverfileupload = json_decode(fileUpload($coverfile,'images/news', 'default', $type="Image"), true);
        $coverfilestatus = $coverfileupload['status'];

        $news = new News;
        $news->title        = $request->title;
        $news->subtitle     = $request->subtitle;
        $news->news_date    = $request->news_date;
        $news->content      = $request->content;
        $news->description  = $request->description;
        $news->card_image   = $cardfileupload['filename'];
        $news->cover_image  = $coverfileupload['filename'];
        $news->content      = $request->content;
        $news->extracontent = $request->extracontent;
        $news->source_name  = $request->source_name;
        $news->source_link  = $request->source_link;
        $news->status       = $request->status;
        $news->save();

        Session::flash('successMessage', 'News Added Successfully');
        //return redirect()->back();
        return redirect()->route('adminviewnews');
        
    }

    public function viewEvent(Request $request)
    {
        $user = Auth::user();
        $eventlist = Event::orderBy('id','desc')->paginate();
        return view('admin.event',compact('request','user','eventlist'));
    }

    public function addEvent(Request $request)
    {
        $user = Auth::user();
        return view('admin.eventadd',compact('request','user'));
    }

    public function addEventSubmit(Request $request)
    {
        $user = Auth::user();

        $coverfile = $request->file('cover_image');
        $coverfileupload = json_decode(fileUpload($coverfile,'images/event', 'default', $type="Image"), true);
        $coverfilestatus = $coverfileupload['status'];

        $news = new Event;
        $news->title        = $request->title;
        $news->subtitle     = $request->subtitle;
        $news->event_date   = $request->event_date;
        $news->content      = $request->content;
        $news->description  = $request->description;
        $news->cover_image  = $coverfileupload['filename'];
        $news->content      = $request->content;
        $news->extracontent = $request->extracontent;
        $news->source_name  = $request->source_name;
        $news->source_link  = $request->source_link;
        $news->status       = $request->status;
        $news->save();

        Session::flash('successMessage', 'Event Added Successfully');
        //return redirect()->back();
        return redirect()->route('adminviewevent');
        
    }

    public function viewPastEvent(Request $request)
    {
        $user = Auth::user();
        $eventlist = PastEvent::orderBy('id','desc')->paginate();
        return view('admin.pastevent',compact('request','user','eventlist'));
    }

    public function addPastEvent(Request $request)
    {
        $user = Auth::user();
        return view('admin.pasteventadd',compact('request','user'));
    }

    public function addPastEventSubmit(Request $request)
    {
        $user = Auth::user();

        $coverfile = $request->file('cover_image');
        $coverfileupload = json_decode(fileUpload($coverfile,'images/pastevent', 'default', $type="Image"), true);
        $coverfilestatus = $coverfileupload['status'];

        $news = new PastEvent;
        $news->title        = $request->title;
        $news->subtitle     = $request->subtitle;
        $news->event_date   = $request->event_date;
        $news->content      = $request->content;
        $news->description  = $request->description;
        $news->cover_image  = $coverfileupload['filename'];
        $news->content      = $request->content;
        $news->extracontent = $request->extracontent;
        $news->source_name  = $request->source_name;
        $news->source_link  = $request->source_link;
        $news->status       = $request->status;
        $news->save();

        Session::flash('successMessage', 'Past Event Added Successfully');
        return redirect()->route('adminviewpastevent');
        
    }
}
