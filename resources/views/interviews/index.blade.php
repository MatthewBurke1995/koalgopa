@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">

          <h3 class="pb-3 mb-4 font-italic border-bottom">
            Interviews
          </h3>

          @foreach ($interviews as $interview)


          <interviewpreview interviewtitle="{{ $interview->interviewTitle }}" author="{{ $interview->author }}" interviewcreatedtime="{{ prettydate($interview->interviewCreatedTime) }}" interviewtext="{!! firstParagraph($interview->interviewText) !!}" interviewid="{{$interview->interviewid}}" interviewthumbnail="{{ $interview->interviewThumbnail }}"> </interviewpreview>


          @endforeach




    </div>
  </div>
@endsection
