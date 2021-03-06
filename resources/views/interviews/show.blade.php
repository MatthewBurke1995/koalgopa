@extends('layouts.app')

@section('preload')
<title>코알고파 | 인터뷰 - {{ $interview->interviewTitle }} </title>
<meta name="keywords" content="워홀, 워홀러, 호주, 인터뷰">
@endsection


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

          <h3 class="pb-3 mb-4 font-italic border-bottom">
            Interviews
          </h3>

          <div class="blog-post">
            <h2>{{ $interview->interviewTitle }}</h2>
            <p class="blog-post-meta">{{ $interview->interviewCreatedTime}} by {{ $interview->author }}</p>

            <p class="white-space">{!! $interview->interviewText !!} </p>

            <hr>




        </div>
    </div>
  </div>
@endsection
