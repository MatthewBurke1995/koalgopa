@extends('layouts.app')

@section('preload')

<title>코알고파 | 회사 후기 작성</title>
<meta name="description" content="호주에 있는 회사 검색하고 직원 후기 통해서 최신 정보 얻어서 더 좋은 워홀 생활 합시다. 새로운 후기 남겨봅시다">
<meta name="keywords" content="워홀, 워홀러, 호주, 회사, 후기, 검색">
@endsection


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

          <h1> Create new review </h1>


          <form method="POST" action="store">
            @csrf
            <div class="form-row">
              <div class="form-group col-sm-6">
                <label for="companyTitle">회사 이름</label>
                <input type="text" class="form-control" id="companyTitle" name="companyTitle" placeholder="정확하게 영어로 쓰세요">
              </div>

              <div class="form-group col-sm-3">
                <label class="lead" for="companyreviewStars">별점수 (필수)</label>
                <input type="number" min="1" max="5" class="form-control" name = "companyreviewStars" id="companyreviewStars" placeholder="1-5">

              </div>

              <div class="form-group col-sm-3">
                <label class="lead" for="companyreviewWage">시급 ($)</label>
                <input type="number" min="5" max="99" class="form-control" name = "companyreviewWage" id="companyreviewWage" placeholder="5-99">

              </div>


            </div>


            <div class="form-row">
              <div class="form-group col-md-6">
                <label class="lead" for="companyreviewPros">회사의 장점 (필수)</label>
                <textarea name = "companyreviewPros"  class="form-control" id="companyreviewPros" rows="6" required></textarea>
              </div>
              <div class="form-group col-md-6">
                <label class="lead" for="companyreviewCons">회사의 단점 (필수)</label>
                <textarea name = "companyreviewCons"  class="form-control" id="companyreviewCons" rows="6" required></textarea>
              </div>
            </div>


            <div class="form-group">
              <label class="lead" for="companyreviewComment">다음 사람을 위한 충고</label>
              <textarea name = "companyreviewComment"  class="form-control" id="companyreviewComment" rows="4" ></textarea>
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>

          </form>





        </div>
    </div>
</div>

@endsection
