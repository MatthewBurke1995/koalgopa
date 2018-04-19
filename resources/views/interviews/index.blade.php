@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

          <h3 class="pb-3 mb-4 font-italic border-bottom">
            Interviews
          </h3>

          @foreach ($interviews as $interview)

          <div class="blog-post">
            <h2>{{ $interview->interviewTitle }}</h2>
            <p class="blog-post-meta">{{ prettydate($interview->interviewCreatedTime) }} by {{ $interview->author }}</p>

            <p class="lead">{!! firstParagraph($interview->interviewText) !!}</p>
            <p class="font-italic text-right"><a href="interviews/{{ $interview->interviewid}}">Continue reading... </a></p>
            <hr>

          @endforeach




        </div>
    </div>
  </div>
@endsection
