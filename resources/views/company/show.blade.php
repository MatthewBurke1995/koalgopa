@extends('layouts.app')

@section('preload')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

@endsection

@section('content')
<div class="container">

      <div class="row justify-content-center">
        <div class="col-md-9 card bg-white p-4">
          <div class="row mb-1 border-bottom">
            <div class="col-md-6">
          <h2 class="" id="about">
            {{$company->companyTitle}}  <stars stars="{{$company->stars}}"> </stars>
          </h2>
        </div>
          <div class="col-md-6">
            <p>평균 시급: ${{$company->wage}} <br>
            후기 횟수: {{$company->reviews}}</p>
          </div>

      </div>


          @foreach ($reviews as $review)
        <div class="border-bottom pt-4">
          <stars stars="{{$review->companyreviewStars}}"> </stars>
          <p> <b> 시급: ${{$review->companyreviewWage}} </b> </p>
          <div class="row mb-1">
            <div class="col-md-6">
              <strong class=" d-inline-block mb-2 text-primary">장점:</strong> <p class="white-space">{{$review->companyreviewPros }} </p>
            </div>
            <div class="col-md-6">
              <strong class="d-inline-block mb-2 text-warning">단점:</strong>   <p class="white-space">{{$review->companyreviewCons }} </p>
            </div>
          </div>
          	<strong class="d-inline-block mb-2 text-success">다음 사람을 위한 충고:</strong>

              @if ($review->companyreviewComment)
              <p>{{ $review->companyreviewComment}}</p>
              @else
              <p> 없음 </p>
              @endif
        </div>
          @endforeach
          <div class="mt-3">
            <p class="float-right"><a class="h4 btn btn-primary text-white" href="/company/{{$company->companyid}}/createreview" role="button">기업 리뷰 작성  </a> </p>
          </div>
        </div>

      <aside class="col-md-3 d-none d-md-block">
        <div class="p-3 mb-3 bg-white rounded">
        </div>


      </aside><!-- /.blog-sidebar -->
    </div>


</div>
@endsection
