@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

          <h3 class="pb-3 mb-4 font-italic border-bottom">
            News
          </h3>


          @foreach ($articles as $article)
          <div class="blog-post">
            <h2 class="blog-post-title">{{ ($article->articleTitle) }}</h2>
            <p class="blog-post-meta">{{ prettydate($article->articleCreatedTime) }} by {{ ($article->author) }}</p>
            <p class="lead">{!! firstParagraph($article->articleText) !!}</p>
            <p class="font-italic text-right"><a href="news/{{ $article->articleid }}">Continue reading... </a></p>
            <hr>


          </div><!-- /.blog-post -->
          @endforeach

        </div>
    </div>
</div>
@endsection
