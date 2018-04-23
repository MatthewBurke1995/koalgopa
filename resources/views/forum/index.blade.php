@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">

          <h1 class="text-secondary mx-auto"> 자유 게시판</h1>

          <table class="table table-striped">
            <tbody>
              @foreach ($posts as $post)
              <tr is="forumpost" postid="{{$post->postid}}"  posttitle="{{ $post->postTitle }}" commentscount="{{ $post->commentsCount }}" postcreatedtime="{{ prettydate($post->postCreatedTime) }}" name="{{ $post->name }}"></tr>
              @endforeach
            </tbody>
          </table>



        @if (Auth::check())
          <p><a class="btn btn-primary text-white" href="forum/create" role="button">New Post</a> </p>
        @else
          <p> Please <a href="{{ route('login') }}"><b>login</b></a> to create a post. </p>
        @endif

        {{ $posts->links() }}

        </div>

          <div class="col-md-3 d-none d-md-block">
          <div class="sidebar-module">
            <h4>게시판 매너</h4>
            <ol class="list-unstyled">
              <li>불법 자료 올리지 마세요</li>
              <li>광고 올리지 마세요</li>
            </ol>
          </div>
          <div class="sidebar-module">
            <h4>최신 댓글</h4>
            <ol class="list-unstyled">
              @foreach ($new_comments as $new_comment)
                <li> <a href="forum/{{ $new_comment->postid }}"> {{ regex_substring($new_comment->postTitle,20) }} - {{prettydatetime($new_comment->commentCreatedTime)}} </a></li>

              @endforeach
            </ol>
          </div>
          <div class="sidebar-module">
          </div>
        </div><!-- /.blog-sidebar -->


    </div>

</div>
@endsection
