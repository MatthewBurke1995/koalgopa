<?php

namespace koreansite\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

  public function index() {
    if(Auth::check()) {
      $name = Auth::user()->name;

      $posts = DB::table('forumposts')->where('name',$name)->get();
      $comments = DB::table('comments')->where('name',$name)->get();
      return view('user.index ', ['posts'=>$posts, 'comments'=>$comments]);
    }

    else {
      return redirect()->route('welcome');
    }

  }

public function show($name) {

  $posts = DB::table('forumposts')->select('postid', 'postTitle', 'postCreatedTime', 'name')->where('name',$name)->get();
  $comments = DB::table('comments')->select('postid','commentText')->where('name',$name)->get();
  return view('user.show ', ['posts'=>$posts, 'comments'=>$comments, 'name'=>$name]);

}

}
