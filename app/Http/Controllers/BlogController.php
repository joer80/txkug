<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function bloghome()
    {
        return view('blog');
    }
}
