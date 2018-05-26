@extends('layouts.app')

@section('content')
<div class="container">

          <div class="row justify-content-center">
              <div class="col-md-9">

                <h3 class="pb-3 mb-4 font-italic border-bottom">
                  기사
                </h3>

          @foreach ($articles as $article)
          <div class="blog-post border-bottom">
            <h2 class="blog-post-title"><a href="news/{{ $article->articleid }}">{{ ($article->articleTitle) }}</a></h2>
            <p class="blog-post-meta">{{ prettydate($article->articleCreatedTime) }} by {{ ($article->author) }}</p>
            <p class="lead">{!! firstParagraph($article->articleText) !!}</p>
            <p class="font-italic text-right"><a href="news/{{ $article->articleid }}">Continue reading... </a></p>


          </div><!-- /.blog-post -->
          @endforeach

        </div>

        <div class="col-md-3">
          <div class="p-3 mb-3 bg-white rounded">
            <h4 class="font-italic">호주 트렌딩 뉴스</h4>
            @foreach ($headlines as $headline)
                <p><a href="{{$headline->headlineURL}}">{{$headline->headlineTitle}} </a></p>
                @endforeach

          </div>
        </div>
    </div>
</div>
@endsection
