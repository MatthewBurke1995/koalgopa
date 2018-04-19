@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <h3 class="mt-4"> Forum posts </h3>
          <table class="table table-striped">
            <tbody>
              @foreach ($posts as $post)
              <tr>
                <td class="first"><a href="/forum/{{ $post->postid }}"> {{ $post->postTitle }} </a> <br>
                {{ prettydate($post->postCreatedTime) }} | {{ $post->name }}
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>

          <h3 class="mt-4"> Comments </h3>

          @foreach ($comments as $comment)
              <h5><a href="/forum/{{$comment->postid}}"> {{ $comment->commentText }}</a></h5>
          @endforeach

        </div>
    </div>
</div>
@endsection
