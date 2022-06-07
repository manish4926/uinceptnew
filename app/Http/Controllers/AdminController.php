<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use User;
use Auth;
use App\Models\News;

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

        $news               = new News;
        $news->title        = $request->title;
        $news->news_date    = $request->news_date;
        $news->content      = $request->content;
        $news->extracontent = $request->extracontent;
        $news->source_name  = $request->source_name;
        $news->source_link  = $request->source_link;
        $news->status       = true;
        $news->save();

        Session::flash('successMessage', 'News Added Successfully');
        //return redirect()->back();
        return redirect()->route('adminnews');
        
    }
}
