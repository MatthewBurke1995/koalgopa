@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

          <h1> Create new review </h1>


          <form method="POST" action="{{ route('company.store') }}">
            @csrf
            <input name="companyid" type="hidden" value="{{$id}}">
            <div class="form-row">
              <div class="form-group col-sm-6">
                <label for="companyTitle">회사</label>
                <input type="text" readonly class="form-control" id="companyTitle" name="companyTitle" value="{{$companyTitle->companyTitle}}">
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
                <textarea name = "companyreviewPros"  class="form-control" id="companyreviewPros" rows="6" required placeholder="회사 문화, 베너핏, 매니저, 위치, 취급, 시급 등등"></textarea>
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
