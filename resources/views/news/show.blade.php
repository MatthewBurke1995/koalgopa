@extends('layouts.app')

@section('preload')
<title>코알고파 | 기사 - </title>
<meta name="description" content="{{ $article->articleTitle }}">
<meta name="keywords" content="워홀, 워홀러, 호주, 기사, 뉴스">
@endsection


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

          <h3 class="pb-3 mb-4 font-italic border-bottom">
            기사
          </h3>

          <div class="blog-post">
            <h2>{{ $article->articleTitle }}</h2>
            <p class="blog-post-meta">{{ $article->articleCreatedTime}} by {{ $article->author }}</p>

            <p class="white-space">{!! $article->articleText !!} </p>

            <hr>




        </div>
    </div>
  </div>
@endsection
