@extends('layouts.app')


@section('preload')
<title>코알고파 | 게시판 - {{$post->postTitle}}</title>
<meta name="description" content="호주 워홀러들을 위한 자유 게시판에 사는 얘기나 하자 {{$post->postTitle}}">
<meta name="keywords" content="워홀, 워홀러, 호주, 게시판">
@endsection

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

								<comment iteration="{{$loop->iteration}}" commentid="{{$comment->commentid}}" name="{{ $comment->name }}" commenttext="{{ $comment->commentText }}"  commentcreatedtime="{{ $comment->commentCreatedTime }}"  level="{{ $comment->level }}" parentid="{{ $comment->parentid }}"> </comment>

								<div class="collapse" id="{{'comment' . $comment->commentid}}">

								@if (Auth::check())

								<form action="commentStore" method="POST">
									@csrf
									<div style="margin-left:{{ ($comment->level+1) *40 }}px">
									<div class="form-group" >
										<input name="parentid" type="hidden" value="{{$comment->commentid}}">
										<textarea name="commentText" class="form-control" id="commentText" rows="3" required></textarea>
										<input name="postid" type="hidden" value="{{$post->postid}}">

									</div>
									<button type="submit" class="btn btn-success">Submit</button>
								</div>
								</form>

							@else
								<p> Please <a href="{{ route('login') }}"><b>login</b></a> to create a comment. </p>

								@endif
							</div>



							@endforeach




							@if (Auth::check())

							<form action="commentStore" method="POST">
								@csrf
								<div class="form-group mt-5">

									<label for="commentText">New comment:</label>
									<textarea name="commentText" class="form-control" id="commentText" rows="3" required></textarea>
									<input name="postid" type="hidden" value="{{ $post->postid }}">
									<input name="parentid" type="hidden" value="0">

								</div>
								<button type="submit" class="btn btn-primary">Submit</button>

							</form>

						@else
							<p> Please <a href="{{ route('login') }}"><b>login</b></a> to create a comment. </p>

							@endif


				</div>
		</div>
</div>
@endsection
