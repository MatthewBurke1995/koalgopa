@extends('layouts.app')

@section('preload')
<title>코알고파 | 인터뷰</title>
<meta name="description" content="워홀 하다 보면 누구한테도 재밌는 사건 생기곤 하잖아요 궁금하지 않아요?">
<meta name="keywords" content="워홀, 워홀러, 호주, 인터뷰">
@endsection



@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">

          <h3 class="pb-3 mb-4 font-italic border-bottom">
            인터뷰
          </h3>

          @foreach ($interviews as $interview)


          <interviewpreview interviewtitle="{{ $interview->interviewTitle }}" author="{{ $interview->author }}" interviewcreatedtime="{{ prettydate($interview->interviewCreatedTime) }}" interviewtext="{!! firstParagraph($interview->interviewText) !!}" interviewid="{{$interview->interviewid}}" interviewthumbnail="{{ $interview->interviewThumbnail }}"> </interviewpreview>


          @endforeach




    </div>
  </div>
@endsection
