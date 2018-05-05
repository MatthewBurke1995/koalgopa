<?php

namespace koreansite\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class InterviewsController extends Controller
{
    public function index() {

      $interviews = DB::table('interviews')->orderBy('interviewCreatedTime', 'desc')->get();

      return view('interviews.index', ['interviews' => $interviews]);
    }

    public function show($id) {

      $interview = DB::table('interviews')->where('interviewid',$id)->first();

      return view('interviews.show', ['interview' => $interview ]);

    }

    public function create() {

      if (Auth::check() && Auth::user()->name == "admin" )
      {
      return view('interviews.create');

      }  else {
        return redirect()->route('login');

      }

    }


    public function store(Request $request)
    {

      $author = $request->input('author');
      $interviewTitle = $request->input('interviewTitle');
      $interviewText = $request->input('interviewText');
      //$fileName   = $request->input('interviewThumbnail');
      $fileName = ($request->input('interviewThumbnail') ? 'img/interviews/'.$request->input('interviewThumbnail') : 'img/interview.svg');


      DB::table('interviews')->insert(
        ['author' => $author, 'interviewTitle' => $interviewTitle, 'interviewText' => $interviewText, 'interviewThumbnail' => $fileName]);

        return redirect()->route('interviews');

    }


}
