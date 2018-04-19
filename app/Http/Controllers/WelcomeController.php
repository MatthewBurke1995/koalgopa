<?php

namespace koreansite\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
  public function index()
  {
    $interview = DB::table('interviews')->select('interviewid', 'interviewTitle', 'interviewCreatedTime', 'interviewText' )->latest('interviewCreatedTime')->first();
    $article = DB::table('articles')->select('articleid', 'articleTitle', 'articleCreatedTime', 'articleText')->latest('articleCreatedTime')->first();



      return view('welcome', ['interview'=>$interview, 'article' => $article]);

  }
}
