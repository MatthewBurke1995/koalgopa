@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">

			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner" role="listbox">
					<div class="carousel-item active">
						<div class="jumbotron p-3 p-md-5 text-white rounded bgimg darken-pseudo darken-with-text" style="background-image: url('/img/firstfleet.jpg')">
							<div class="col-lg-6 px-0">
								<h1 class="display-4 font-weight-bold font-italic text-white">호주 처음이죠?</h1>
								<p class="lead my-2">처음이라서 누구나 힘들지만 노하우 생기면 쉬워집니다 적응하도록 알면 좋은 팁이 가득한 사이트가 준비됐습니다</p>
								<p class="lead mb-2"><a href="#about" class="text-white font-weight-bold">조금 더 알아보기...</a></p>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="jumbotron p-3 p-md-5 text-white rounded bgimg darken-pseudo darken-with-text" style="background-image: url('/img/money.jpg')">
							<div class="col-lg-6 px-0">
								<h1 class="display-4 font-weight-bold font-italic text-white">최저시급 현실</h1>
								<p class="lead my-2">연구 결과 따르면 한국인 워홀러들이 대부분 최저시습조차 못 받기엔 대체 어떤 조건이 영향을 끼치는가?</p>
								<p class="lead mb-2"><a href="/news/1" class="text-white font-weight-bold">조금 더 알아보기...</a></p>
							</div>
						</div>

					</div>



				</div>
				<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>





			<div class="row mb-2">
				<div class="col-md-6">
					<div class="card flex-lg-row mb-4 box-shadow h-md-250">
						<div class="card-body d-flex flex-column align-items-start">
							<strong class="d-inline-block mb-2 text-primary">인터뷰</strong>
							<h3 class="mb-0">
										<a class="text-dark" href="interviews/{{ $interview->interviewid }}">{{ $interview->interviewTitle }}</a>
									</h3>
							<div class="mb-1 text-muted">{{ prettydate($interview->interviewCreatedTime) }}</div>
							<p class="card-text mb-auto">{!! first100CJK($interview->interviewText) !!}</p>
							<a href="interviews/{{$interview->interviewid}}">Continue reading</a>

						</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="card flex-lg-row mb-4 box-shadow h-md-250">
						<div class="card-body d-flex flex-column align-items-start">
							<strong class="d-inline-block mb-2 text-success">기사</strong>
							<h3 class="mb-0">
										<a class="text-dark" href="news/{{$article->articleid}}">{{ $article->articleTitle }}</a>
									</h3>
							<div class="mb-1 text-muted">{{ prettydate($article->articleCreatedTime) }}</div>
							<p class="card-text mb-auto">{!! first100CJK($article->articleText) !!}</p>
							<a href="news/{{$article->articleid}}">Continue reading</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


			<div class="row mb-2 justify-content-center">
				<div class="col-md-9">
					<h2 class="pb-3 mb-4 border-bottom" id="about">
						다른 사람 같은 고민
					</h2>

					<blockquote class="blockquote text-right">
						<p class="mb-0">탐험 끝날 때는 시작점에 도착하며 그곳을 처음으로 알게 된다. </p>

						<footer class="blockquote-footer">T.S. Eliot</footer>
					</blockquote>

					<p>시드니에서 오가는 워홀러마다 유니크합니다 각자 지문 다르듯이 워홀 하는 이유가 유니크하고 성격 똑같은 사람도 없습니다 그러나 동점 굳이 선택하자면 질문 많다는 것은 바로 그동점입니다. 언어, 문화, 취업, 숙소 그리고 여행을 5가지 주제로 크게 구분할 수 있습니다. 여기선 아주 짧은 FAQ 준비 됐습니다 짧아서 아쉬운 사람 있을 것 같아서 아프로 인터뷰나 기사 통해 더 길고 충분한 대답 쓸 예정 있으니 너무 걱정 안 하셔도 되겠습니다.</p>

					<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
						<li class="nav-item lead">
							<a class="nav-link active" id="pills-language-tab" data-toggle="pill" href="#pills-language" role="tab" aria-controls="pills-language" aria-selected="true">언어</a>
						</li>
						<li class="nav-item lead">
							<a class="nav-link" id="pills-culture-tab" data-toggle="pill" href="#pills-culture" role="tab" aria-controls="pills-culture" aria-selected="false">문화</a>
						</li>
						<li class="nav-item lead">
							<a class="nav-link" id="pills-employment-tab" data-toggle="pill" href="#pills-employment" role="tab" aria-controls="pills-employment" aria-selected="false">취업</a>
						</li>
						<li class="nav-item lead">
							<a class="nav-link" id="pills-accomodation-tab" data-toggle="pill" href="#pills-accomodation" role="tab" aria-controls="pills-accomodation" aria-selected="false">숙소</a>
						</li>
						<li class="nav-item lead">
							<a class="nav-link" id="pills-visa-tab" data-toggle="pill" href="#pills-visa" role="tab" aria-controls="pills-visa" aria-selected="false">비자</a>
						</li>

					</ul>
					<div class="tab-content" id="pills-tabContent">
						<div class="tab-pane fade show active" id="pills-language" role="tabpanel" aria-labelledby="pills-language-tab">

							<qanda question="호주 영어 어렵나?" answer="여태까지 미국 영어만 들었던 사람한테 호주 영어의 발음이랑 단어 선택이 광장히 낯설 수도 있습니다. 또는 호주 사람들이 일반적으로 말을 빨리 하는 편이라서 가끔 영어 게시판에 호주 영상 뜬다면 미국인들이 자막 부탁해달라는 경우 종종 있습니다. 그나마 큰 시티에서 사투리 심하지 않습니다 덧붙이자면 미국이랑 다르게 호주안에서 말하는 방식 표준화 되어있어서 어디 가든 똑같은 사투리 들을 수 있	습니다"> </qanda>
							<qanda question="호주 영어 어떻게 배워야할까??" answer="호주 영어 맞춰서 배울 필요 딱히 없는데 읽기랑 쓰기가 미국식이랑 똑같고 호주식으로 말할 필요 없지만 호주식 알아들어야해서 일반적으로 영어 잘하는 사람들이 듣기를 집중하는 게 좋을 것 같습니다"> </qanda>
							<qanda question="호주에 속어 많은가?" answer="<a href='https://i.imgur.com/Gw3xBBE.gifv'> 호주는 속어 많다는 걸 다른 영어권 나라도 인정 합니다. </a> 호주에서 거의 모든 속어는 줄임말이라서 처음에 알아듣지 못 해도 한번 알게 되면 기억 하기 쉽습니다."> </qanda>
							<qanda question="영어 못 하면 호주 갈 가치 있나?" answer="AAAAAAAA"> </qanda>
							<qanda question="솔직하게 말해줘 영어 잘 하면 확실히 뭐가 좋나?" answer="AAAAAAAA"> </qanda>
							<qanda question="호주에 있을 때 어떻게 해야 영어가 늘 수 있을까?" answer="AAAAAAAA"> </qanda>
							<qanda question="호주 사람들이랑 어떻게 놀 수 있나?" answer="AAAAAAAA"> </qanda>

							<qanda question="한국 사람들이 많나?" answer="AAAAAAAA"> </qanda>
							<qanda question="공기관 쓰고싶은데 영어 못 해서 어떡하나?" answer="호주 공기관에서 translation hotline 있어서"> </qanda>




						</div>


						<div class="tab-pane fade" id="pills-culture" role="tabpanel" aria-labelledby="pills-culture-tab">

							<qanda question="인종차별 심해?" answer="여태까지 미국 영어만 들었던 사람한테 호주 영어의 발음이랑 단어 선택이 광장히 낯설 수도 있습니다. 또는 호주 사람들이 일반적으로 말을 빨리 하는 편이라서 가끔 . 그나마 큰 시티에서 사투리 심하지 않고 호주안에서 말하는 방식 표준화 되어있어서 어디 가든 똑같은 사투리 들을 수 있습니다."> </qanda>
							<qanda question="원주민 혹은 흑인이 왜 안 보이나?" answer="."> </qanda>
							<qanda question="문화 특점 있나?" answer="호주 영어 맞춰서 배울 필요 딱히 없는데 읽기랑 쓰기가 미국식이랑 똑같고 호주식으로 말할 필요 없지만 호주식 알아들어야해서 일반적으로 영어 잘하는 사람들이 듣기를 집중하는 게 좋을 것 같습니다."> </qanda>
							<qanda question="아시아 사람에 대해 어떻게 생각하나?" answer="호주 영어 맞춰서 배울 필요 딱히 없는데 읽기랑 쓰기가 미국식이랑 똑같고 호주식으로 말할 필요 없지만 호주식 알아들어야해서 일반적으로 영어 잘하는 사람들이 듣기를 집중하는 게 좋을 것 같습니다."> </qanda>
							<qanda question="한국 사람에 대해 어떻게 생각하나?" answer="호주 영어 맞춰서 배울 필요 딱히 없는데 읽기랑 쓰기가 미국식이랑 똑같고 호주식으로 말할 필요 없지만 호주식 알아들어야해서 일반적으로 영어 잘하는 사람들이 듣기를 집중하는 게 좋을 것 같습니다."> </qanda>
							<qanda question="호주 사람들이 어떻게 놀아?" answer="호주 영어 맞춰서 배울 필요 딱히 없는데 읽기랑 쓰기가 미국식이랑 똑같고 호주식으로 말할 필요 없지만 호주식 알아들어야해서 일반적으로 영어 잘하는 사람들이 듣기를 집중하는 게 좋을 것 같습니다."> </qanda>
							<qanda question="평범한 호주 사람 어떻게 생겼나?" answer="호주 영어 맞춰서 배울 필요 딱히 없는데 읽기랑 쓰기가 미국식이랑 똑같고 호주식으로 말할 필요 없지만 호주식 알아들어야해서 일반적으로 영어 잘하는 사람들이 듣기를 집중하는 게 좋을 것 같습니다."> </qanda>
							<qanda question="지금 정치 상황 어떻게 되고 있나?" answer="호주 영어 맞춰서 배울 필요 딱히 없는데 읽기랑 쓰기가 미국식이랑 똑같고 호주식으로 말할 필요 없지만 호주식 알아들어야해서 일반적으로 영어 잘하는 사람들이 듣기를 집중하는 게 좋을 것 같습니다."> </qanda>
							<qanda question="제일 인기 많은 스포츠 뭣인가?" answer="호주 영어 맞춰서 배울 필요 딱히 없는데 읽기랑 쓰기가 미국식이랑 똑같고 호주식으로 말할 필요 없지만 호주식 알아들어야해서 일반적으로 영어 잘하는 사람들이 듣기를 집중하는 게 좋을 것 같습니다."> </qanda>
							<qanda question="다들 마약한가?" answer="호주 영어 맞춰서 배울 필요 딱히 없는데 읽기랑 쓰기가 미국식이랑 똑같고 호주식으로 말할 필요 없지만 호주식 알아들어야해서 일반적으로 영어 잘하는 사람들이 듣기를 집중하는 게 좋을 것 같습니다."> </qanda>


						</div>


						<div class="tab-pane fade" id="pills-employment" role="tabpanel" aria-labelledby="pills-employment-tab">

							<qanda question="최저시급 얼마나 되나?" answer="<a href='https://www.fairwork.gov.au/how-we-will-help/templates-and-guides/fact-sheets/minimum-workplace-entitlements/minimum-wages'>지금 (2018년) 절대적인 최저시급은 $18.29</a> 정도지만 한국이랑 다르게 호주에서는 나이, 산업 혹은 casual이느냐 full-time이느냐 따라서 최저시급 달라집니다. 워홀이나 학생비자 있는 사람도 최저시급 받을 권리 있지만 일 찾기 힘든 경우엔 그권리를 포기하고 일하는 사람도 많습니다."> </qanda>
							<qanda question="호주에서 일하게 되면 시간당에 실제로 얼마나 벌 수 있을까?" answer="대답하기 굉장히 어려운 질문입니다 영어 실력이랑 일 어떻게 구하는지 떠나서 호주 워홀러 대부분  "> </qanda>
							<qanda question="위주로 어떤 일 할 수 있을까?" answer="호주에서 일반적으로 한국의 자격층 인정 안 하고 그대신에 경력을 인정 하는데 경력 쌓였고 일하게 되면 가끔 전공 살리곤 합니다 대부분 단순노무직이나 식당 일 하게 됩니다. "> </qanda>
							<qanda question="어떻게 취업 찾을 수 있나?" answer="AAAAAAAA."> </qanda>
							<qanda question="농장에서 일하기 싫은데 ㅠㅠ?" answer="BBBBB."> </qanda>
							<qanda question="일할 때 손해 보면 어떻게 해야할까?" answer="더 자세한 법적인 내용 알고싶다면 변호사랑 얘기 하는 게 제일 좋습니다."> </qanda>
							<qanda question="호주에서 일하는 문화 어떤가?" answer="어떤 일하는냐 따라서 다르겠지만 큰 그림에 한국이랑 비교적으로 훨씬 더 여유롭다는 걸 생각하면 됩니다. 일단 호주에서 직장인들이 아침 9시부터 오후 5시까지만 일합니다 풀타임이랑 파트타임이랑 casual을 일 종류 3가지로 크게 구분할 수 있습니다 어떤 일 하는냐 따라서 베네핏도 받을 수 있습니다"> </qanda>

						</div>


						<div class="tab-pane fade" id="pills-accomodation" role="tabpanel" aria-labelledby="pills-accomodation-tab">

							<qanda question="숙소 얼마나 비싸?" answer="."> </qanda>
							<qanda question="제일 안전한 지역 어딘가?" answer="호주 영어 맞춰서 배울 필요 딱히 없는데 읽기랑 쓰기가 미국식이랑 똑같고 호주식으로 말할 필요 없지만 호주식 알아들어야해서 일반적으로 영어 잘하는 사람들이 듣기를 집중하는 게 좋을 것 같습니다."> </qanda>
							<qanda question="집을 찾을 때 뭘 알아봐야된가?" answer="AAAAAAAA."> </qanda>
							<qanda question="대중교통 잘 되어있나?" answer="BBBBB."> </qanda>
							<qanda question="집 어떻게 찾을 수 있나?" answer="AAAAAAAA."> </qanda>
							<qanda question="호주 사람 다 집에서 살나?" answer="BBBBB."> </qanda>
							<qanda question="집주인 관리 안 하면 어떻게 하나?" answer="BBBBB."> </qanda>

						</div>


						<div class="tab-pane fade" id="pills-visa" role="tabpanel" aria-labelledby="pills-visa-tab">

							<qanda question="워홀비자엔 무슨 특징 있나?" answer="여태까지 미국 영어만 들었던 사람한테 호주 영어의 발음이랑 단어 선택이 광장히 낯설 수도 있습니다. 또는 호주 사람들이 일반적으로 말을 빨리 하는 편이라서 가끔 . 그나마 큰 시티에서 사투리 심하지 않고 호주안에서 말하는 방식 표준화 되어있어서 어디 가든 똑같은 사투리 들을 수 있습니다."> </qanda>
							<qanda question="어떻게 워홀 비자 받을 수 있어?" answer="여태까지 미국 영어만 들었던 사람한테 호주 영어의 발음이랑 단어 선택이 광장히 낯설 수도 있습니다. 또는 호주 사람들이 일반적으로 말을 빨리 하는 편이라서 가끔 . 그나마 큰 시티에서 사투리 심하지 않고 호주안에서 말하는 방식 표준화 되어있어서 어디 가든 똑같은 사투리 들을 수 있습니다."> </qanda>
							<qanda question="1년 너무 짧아 더 있고 싶은데" answer="호주 영어 맞춰서 배울 필요 딱히 없는데 읽기랑 쓰기가 미국식이랑 똑같고 호주식으로 말할 필요 없지만 호주식 알아들어야해서 일반적으로 영어 잘하는 사람들이 듣기를 집중하는 게 좋을 것 같습니다."> </qanda>
							<qanda question="2년 너무 짧아 더 있고 싶은데" answer="BBBBBB"> </qanda>
							<qanda question="영어 못 하면 호주 갈 가치 있나?" answer="AAAAAAAA"> </qanda>

						</div>


					</div>
				</div>


				<aside class="col-md-3 blog-sidebar d-none d-md-block">
          <div class="p-3 mb-3 bg-white rounded">
            <h4 class="font-italic">About</h4>
            <p class="mb-0">코알고파는 모든 한국인 워홀러들을 위한 커뮤니티입니다 </p>
          </div>

          <div class="p-3">
            <h4 class="font-italic">Archives</h4>
            <ol class="list-unstyled mb-0">
              <li><a href="https://getbootstrap.com/docs/4.0/examples/blog/#">March 2014</a></li>
              <li><a href="https://getbootstrap.com/docs/4.0/examples/blog/#">February 2014</a></li>
              <li><a href="https://getbootstrap.com/docs/4.0/examples/blog/#">January 2014</a></li>
              <li><a href="https://getbootstrap.com/docs/4.0/examples/blog/#">December 2013</a></li>
              <li><a href="https://getbootstrap.com/docs/4.0/examples/blog/#">November 2013</a></li>
              <li><a href="https://getbootstrap.com/docs/4.0/examples/blog/#">October 2013</a></li>
              <li><a href="https://getbootstrap.com/docs/4.0/examples/blog/#">September 2013</a></li>
              <li><a href="https://getbootstrap.com/docs/4.0/examples/blog/#">August 2013</a></li>
              <li><a href="https://getbootstrap.com/docs/4.0/examples/blog/#">July 2013</a></li>
              <li><a href="https://getbootstrap.com/docs/4.0/examples/blog/#">June 2013</a></li>
              <li><a href="https://getbootstrap.com/docs/4.0/examples/blog/#">May 2013</a></li>
              <li><a href="https://getbootstrap.com/docs/4.0/examples/blog/#">April 2013</a></li>
            </ol>
          </div>

          <div class="p-3">
            <h4 class="font-italic">Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="https://getbootstrap.com/docs/4.0/examples/blog/#">GitHub</a></li>
              <li><a href="https://getbootstrap.com/docs/4.0/examples/blog/#">Twitter</a></li>
              <li><a href="https://getbootstrap.com/docs/4.0/examples/blog/#">Facebook</a></li>
            </ol>
          </div>
        </aside><!-- /.blog-sidebar -->



			</div>



</div>


@endsection
