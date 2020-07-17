<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function contact()
    {
        return view('contact');
    }
    public function blogpost($id,$welcome = 1)
    {
        $pages = [
            1 => [
                'title' => 'to page 1',
            ],
            2 => [
                'title' => '<h1>to page 2</h1>',
            ],
        ];
        $welcomes = [
            1=>'<h1>Hello </h1>',
            2=>'<h1>welcome </h1>'
        ];
        return view('blog_post',[
            'data' => $pages[$id],
            'welcome' => $welcomes[$welcome]
            ]);
    }
}
