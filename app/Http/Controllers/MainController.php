<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware(function ($request, $next) {
    //         $user = auth()->user();

    //         $this->user = $user;
    //         View::share(['currentuser' => $this->user ]);
    //         return $next($request);
    //     });
    // }


    public function home(Request $request) {

        $test = "";
        return view('home',compact('test'));
    }
}
