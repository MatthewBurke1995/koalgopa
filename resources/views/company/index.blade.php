@extends('layouts.app')

@section('preload')
<title>코알고파 | 회사 후기</title>
<meta name="description" content="호주에 있는 회사 검색하고 직원 후기 통해서 최신 정보 얻어서 더 좋은 워홀 생활 합시다">
<meta name="keywords" content="워홀, 워홀러, 호주, 회사, 후기, 검색">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
@endsection


@section('content')


<div class="container">
  <div class="row justify-content-center">
    <div class="col-sm-12 col-md-10 ">
      @if ( !$search_query and  !count($companies))
      <p> 후기 보거나 남기고싶은가요? 일단 검색해보세요 </p>

      @endif

      <div class="mb-3">
        <autocomplete></autocomplete>
      </div>

    <!--
     <form class="navbar-form" role="search">
      <div class="input-group add-on">
        <input class="form-control" placeholder="Search" name="search" id="search" type="text">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">  <i class="fa fa-search" aria-hidden="true"></i></button>
        </div>
      </div>
    </form>
  -->

    @if ($search_query and !count($companies) )
      <p class="lead mt-3"> 검색결과가 없습니다. <a href="/company/create">  {{$search_query}}의 첫뻔재 리뷰 쓰실래요? </a></p>
    @endif


    @if ($search_query and count($companies) )

    <div class="my-3 p-3 bg-white rounded box-shadow">
      <h6 class="border-bottom border-gray pb-2 mb-0">검색어 결과</h6>
    @endif

    @foreach ($companies as $company)

      <div class="media text-muted pt-3">
        <img alt="" class="mr-2 rounded" style="width: 128px; height: 128px;" src="companyImg/{{$company->companyImage}}" data-holder-rendered="true">

        <div class="media-body border-bottom border-gray pb-0 mb-0 lh-125">

          <div class="row">
            <div class="col-md-4">
              <p >
                <strong class="d-block h4 text-gray-dark"><a href="company/{{$company->companyid}}"> {{ $company->companyTitle}} </a></strong>
              </p>

            </div>

            <div class="col-md-4 text-left">
              <stars stars="{{$company->stars}}"> </p>
            </div>

            <div class="col-md-4">
              <p class="float-lg-right"><a class="h4 btn btn-primary text-white" href="/company/{{$company->companyid}}/createreview" role="button">기업 리뷰 작성  </a> </p>
            </div>

          </div>


          <div class="row " >
            <div class="col-sm-6 d-none d-sm-block">
              <p class="h4">장점 </p>
              <p class="white-space">{{ $company->pros }} </p>
            </div>
            <div class="col-sm-6 d-none d-sm-block">
              <p class="h4">단점 </p>
              <p class="white-space">{{ $company->cons }} </p>
            </div>
          </div>


          <p class="lead d-block text-right">
            <a href="/company/{{$company->companyid}}">리뷰 더 보기</a>
          </p>

      </div>
    </div>

    @endforeach
  </div>

  </div>
  </div>
</div>



@endsection
