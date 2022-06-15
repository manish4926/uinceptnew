<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use User;
use Auth;
use Session;
use App\Models\News;
use App\Models\Event;
use App\Models\PastEvent;
use App\Models\BlogPost;

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
        $news->slug         = slugs($request->title);
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

        $event = new Event;
        $event->title        = $request->title;
        $event->slug         = slugs($request->title);
        $event->subtitle     = $request->subtitle;
        $event->event_date   = $request->event_date;
        $event->content      = $request->content;
        $event->description  = $request->description;
        $event->cover_image  = $coverfileupload['filename'];
        $event->content      = $request->content;
        $event->extracontent = $request->extracontent;
        $event->source_name  = $request->source_name;
        $event->source_link  = $request->source_link;
        $event->status       = $request->status;
        $event->save();

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

        $pastevent = new PastEvent;
        $pastevent->title        = $request->title;
        $pastevent->slug         = slugs($request->title);
        $pastevent->subtitle     = $request->subtitle;
        $pastevent->event_date   = $request->event_date;
        $pastevent->content      = $request->content;
        $pastevent->description  = $request->description;
        $pastevent->cover_image  = $coverfileupload['filename'];
        $pastevent->content      = $request->content;
        $pastevent->extracontent = $request->extracontent;
        $pastevent->source_name  = $request->source_name;
        $pastevent->source_link  = $request->source_link;
        $pastevent->status       = $request->status;
        $pastevent->save();

        Session::flash('successMessage', 'Past Event Added Successfully');
        return redirect()->route('adminviewpastevent');
        
    }

    public function viewBlog(Request $request)
    {
        $user = Auth::user();
        $blogposts = BlogPost::orderBy('id','desc')->paginate();
        return view('admin.blog',compact('request','user','blogposts'));
    }

    public function addBlog(Request $request)
    {
        $user = Auth::user();
        return view('admin.blogadd',compact('request','user'));
    }

    public function addBlogSubmit(Request $request)
    {
        $user = Auth::user();

        $coverfile = $request->file('cover_image');
        $coverfileupload = json_decode(fileUpload($coverfile,'images/blogpost', 'default', $type="Image"), true);
        $coverfilestatus = $coverfileupload['status'];

        $blog = new BlogPost;
        $blog->title       = $request->title;
        $blog->slug        = slugs($request->title);
        $blog->short_desc  = $request->description;
        $blog->tags        = $request->tags;
        $blog->cover_image = $coverfileupload['filename'];
        $blog->content     = $request->content;
        $blog->posted_at   = $request->posted_at;
        $blog->status      = $request->status;
        $blog->save();

        Session::flash('successMessage', 'Blog Added Successfully');
        return redirect()->route('adminviewblog');
        
    }
}
