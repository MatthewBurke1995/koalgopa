<?php

namespace koreansite\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    public function index() {
      $articles = DB::table('articles')->orderBy('articleCreatedTime', 'desc')->get();

      return view('news.index', ['articles' => $articles]);

      //return view('news', ['articles'=>$articles]);
      }

    public function show($id) {

      $article = DB::table('articles')->where('articleid',$id)->first();

      return view('news.show', ['article' => $article]);

    }


    public function create() {

      if (Auth::check() && Auth::user()->name == "admin" )
      {
      return view('news.create');

      }  else {
        return redirect()->route('login');

      }

    }


    public function store(Request $request)
    {

      $articleTitle = $request->input('articleTitle');
      $articleText = $request->input('articleText');
      $author = $request->input('author');
      DB::table('articles')->insert(
        ['author' => $author, 'articleTitle' => $articleTitle, 'articleText' => $articleText]);

        return redirect()->route('news');

    }

}
