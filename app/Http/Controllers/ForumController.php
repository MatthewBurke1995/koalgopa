<?php

namespace koreansite\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ForumController extends Controller
{

    public function index() {
      
      $posts = DB::select('SELECT f.postTitle, f.name, f.postCreatedTime, f.postid, COUNT(c.commentid) AS commentsCount
                          FROM forumposts AS f
                          LEFT JOIN comments AS c ON f.postid = c.postid
                          GROUP BY postid
                          ORDER BY postid DESC');

      $new_comments = DB::select('SELECT f.postid, f.postTitle, MAX(c.commentCreatedTime) as commentCreatedTime
                                    FROM comments AS c
                                    LEFT JOIN forumposts AS f ON c.postid = f.postid
                                    GROUP BY f.postid
                                    ORDER BY commentCreatedTime DESC
                                    LIMIT 10;');
      return view('forum.index',['posts'=>$posts, 'new_comments'=>$new_comments]);

    }

    public function show($id) {

      $post = DB::table('forumposts')->where('postid',$id)->first();

      $comments = DB::table('comments')->where('postid', $id)->get();

      return view('forum.show', ['post'=>$post, 'comments'=>$comments]);
    }


    public function create() {
      if (Auth::check())
      {
      return view('forum.create');

      }  else {
        return redirect()->route('login');

      }
    }

    public function store(Request $request)
    {
      // FINISH ME!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
      $postTitle = $request->input('postTitle');
      $postText = $request->input('postText');
      $name = Auth::user()->name;
      DB::table('forumposts')->insert(
        ['name' => $name, 'postTitle' => $postTitle, 'postText' => $postText]);

        return redirect()->route('forum');

    }

    public function commentStore(Request $request)
    {
      // FINISH ME!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

      $commentText = $request->input('commentText');

      $name = Auth::user()->name;
      $postid = $request->input('postid');
      DB::table('comments')->insert(
        ['name' => $name, 'commentText' => $commentText, 'postid' => $postid]);

      return back();
    }


}
