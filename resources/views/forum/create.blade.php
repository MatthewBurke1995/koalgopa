@extends('layouts.app')

@section('preload')
<title>코알고파 | 게시판 - 새로운 포스트 만들기</title>
<meta name="description" content="호주 워홀러들을 위한 자유 게시판에 사는 얘기나 하자">
<meta name="keywords" content="워홀, 워홀러, 호주, 게시판">
@endsection


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

          <h1> 새로운 포스트 만들기 </h1>


          <form method="POST" action="store">
            @csrf
            <div class="form-group">
              <label for="postTitle">포스트 제목</label>
              <input name="postTitle" type="text" class="form-control" id="postTitle" maxlength="100" required>
            </div>
            <div class="form-group">
              <label for="postText">포스트 내용</label>
              <textarea name = "postText"  class="form-control" id="postText" rows="10" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>

          </form>





        </div>
    </div>
</div>
@endsection
