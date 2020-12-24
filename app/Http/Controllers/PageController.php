<?php
# @Date:   2020-11-26T12:34:33+00:00
# @Last modified time: 2020-11-26T12:52:25+00:00




namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome()
    {
      return view('welcome');
    }

    public function about()
    {
      return view('about');
    }
}
