<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view("home.index", ["posts" => BlogPost::all()]);
    }

    public function contact()
    {
        return view("home.contact");
    }

    public function about()
    {
        return view("home.about");
    }
}
