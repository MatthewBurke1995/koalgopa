@extends('layouts.app')

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
