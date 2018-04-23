@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">


          <div class="card border-dark bottom-buffer">
            <h6 class="card-header bg-dark text-white">{{$post->name}}</h6>
            <div class="card-body">
              <h4 class="card-title text-center"> {{$post->postTitle}}</h4>

              <p class="card-text white-space"> {{ $post->postText }} </p>
              <p class="text-right text-muted">{{$post->postCreatedTime}}</p>

            </div>
          </div>

              @foreach ($comments as $comment)

              <comment iteration="{{$loop->iteration}}" commentid={{"$comment->commentid"}} name="{{ $comment->name }}" commenttext="{{ $comment->commentText }}"  commentcreatedtime="{{ $comment->commentCreatedTime }}"  level="{{ $comment->level }}" parentid="{{ $comment->parentid }}"> </comment>



              @endforeach




              @if (Auth::check())

              <form action="commentStore" method="POST">
                @csrf
                <div class="form-group mt-5">
                  <label for="parentid">parentid</label>
                  <input name="parentid" type="text" class="form-control" id="parentid" required>

                  <label for="commentText">New comment:</label>
                  <textarea name="commentText" class="form-control" id="commentText" rows="3" required></textarea>
                  <input name="postid" type="hidden" value="{{$post->postid}}">

                </div>
                <button type="submit" class="btn btn-default">Submit</button>

              </form>

            @else
              <p> Please <a href="{{ route('login') }}"><b>login</b></a> to create a comment. </p>

              @endif


        </div>
    </div>
</div>
@endsection
