@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

          <h3 class="pb-3 mb-4 font-italic border-bottom">
            News
          </h3>
        </div>
    </div>

          <div class="row justify-content-center">
              <div class="col-md-9">


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

        <div class="col-md-3 d-none d-md-block">
          <div class="p-3 mb-3 bg-white rounded">
            <h4 class="font-italic">호주 트렌딩 뉴스</h4>
                <p><a href="http://www.abc.net.au/news/2018-05-04/emergency-services-say-telstra-did-not-inform-them-of-000-outage/9726832">Emergency Services say Telstra did not inform them of the triple-0 outage </a></p>
                <p><a href="http://www.abc.net.au/news/2018-05-04/amp-rejects-royal-commission-findings-argues-asic-should-deal/9726802">AMP furiously rejects royal commission findings, argues matters should be dealt with by ASIC </a></p>
                <p><a href="https://www.theguardian.com/australia-news/2018/may/04/bill-shorten-to-face-push-from-labor-ranks-to-increase-newstart">Bill Shorten to face push from Labor ranks to increase Newstart </a></p>
                <p><a href="http://www.abc.net.au/news/2018-05-04/puppy-farm-ban-plan-opens-for-public-comment/9727048">Plan to turn pet shops into adoption centres for unwanted animals as part of puppy farm ban </a></p>
          </div>
        </div>
    </div>
</div>
@endsection
