@extends('layouts.app')


@section('preload')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

@endsection

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">

			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner" role="listbox">

					<div class="carousel-item active">
						<div class="jumbotron p-3 p-md-5 text-white rounded bgimg darken-pseudo darken-with-text" style="background-image: url('/img/gradient_background.jpg')">
							<div class="col-lg-6 px-0">
								<h1 class="display-4 font-weight-bold font-italic text-white"><a href="#about" class="text-white">회사후기 검색</a></h1>
								<p class="lead my-2">처음이라서 누구나 힘들지만 노하우 생기면 쉬워집니다 적응하도록 알면 좋은 팁이 가득한 사이트가 준비됐습니다</p>
								<p class="lead mb-0"><autocomplete></autocomplete></p>
							</div>
						</div>
					</div>



					<div class="carousel-item">
						<div class="jumbotron p-3  p-md-5 text-white rounded bgimg darken-pseudo darken-with-text" style="background-image: url('/img/firstfleet.jpg')">
							<div class="col-lg-6 px-0">
								<h1 class="display-4 font-weight-bold font-italic text-white"><a href="#about" class="text-white">호주 처음이죠?</a></h1>
								<p class="lead my-2">처음이라서 누구나 힘들지만 노하우 생기면 쉬워집니다 적응하도록 알면 좋은 팁이 가득한 사이트가 준비됐습니다</p>
								<p class="lead mb-2"><a href="#about" class="text-white">조금 더 알아보기...</a></p>
							</div>
						</div>
					</div>


					<div class="carousel-item">
						<div class="jumbotron p-3 p-md-5 text-white rounded bgimg darken-pseudo darken-with-text" style="background-image: url('/img/money.jpg')">
							<div class="col-lg-6 px-0">
								<h1 class="display-4 font-weight-bold font-italic text-white"><a href="/news/1" class="text-white">최저시급 현실</a></h1>
								<p class="lead my-2">UNSW 조사를 따르면 한국 워홀러들 70%이상 최저시급조차 못 받았는데 과연 어떻게 해야 임금착취를 피할 수 있을까?</p>
								<p class="lead mb-2"><a href="/news/1" class="text-white">조금 더 알아보기...</a></p>
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
		</div>
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


			<div class="row mb-2 justify-content-center">
				<div class="col-md-9 card bg-white p-4">
					<h2 class="pb-3 mb-4 border-bottom" id="about">
						다른 사람 같은 고민
					</h2>

					<blockquote class="blockquote text-right">
						<p class="mb-0">탐험 끝날 때는 시작점에 도착하며 그곳을 처음으로 알게 된다. </p>

						<footer class="blockquote-footer">T.S. Eliot</footer>
					</blockquote>

					<p>시드니에서 오가는 워홀러마다 유니크합니다 각자 지문 다르듯이 워홀 하는 이유가 유니크하고 성격 똑같은 사람도 없습니다 그러나 동점 굳이 선택하자면 질문 많다는 것은 바로 그동점입니다. 언어, 문화, 취업, 숙소 그리고 비자 5가지 주제로 크게 구분할 수 있습니다. 여기선 아주 짧은 FAQ 준비 됐습니다 짧아서 아쉬운 사람 있을 것 같아서 아프로 인터뷰나 기사 통해 더 길고 충분한 대답 쓸 예정 있으니 너무 걱정 안 하셔도 되겠습니다.</p>

					<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="pills-language-tab" data-toggle="pill" href="#pills-language" role="tab" aria-controls="pills-language" aria-selected="true">언어</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="pills-culture-tab" data-toggle="pill" href="#pills-culture" role="tab" aria-controls="pills-culture" aria-selected="false">문화</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="pills-employment-tab" data-toggle="pill" href="#pills-employment" role="tab" aria-controls="pills-employment" aria-selected="false">취업</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="pills-accomodation-tab" data-toggle="pill" href="#pills-accomodation" role="tab" aria-controls="pills-accomodation" aria-selected="false">숙소</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="pills-visa-tab" data-toggle="pill" href="#pills-visa" role="tab" aria-controls="pills-visa" aria-selected="false">비자</a>
						</li>

					</ul>
					<div class="tab-content" id="pills-tabContent">
						<div class="tab-pane fade show active" id="pills-language" role="tabpanel" aria-labelledby="pills-language-tab">

							<qanda question="호주 영어 어렵나?" answer="여태까지 미국 영어만 들었던 사람한테 호주 영어의 발음이랑 단어 선택이 광장히 낯설 수도 있습니다. 또는 호주 사람들이 일반적으로 말을 빨리 하는 편이라서 가끔 영어 게시판에 호주 영상 뜬다면 미국인들이 자막 부탁해달라는 경우 종종 있습니다. 그나마 큰 시티에서 사투리 심하지 않습니다 덧붙이자면 미국이랑 다르게 호주안에서 말하는 방식 표준화 되어있어서 어디 가든 똑같은 사투리 들을 수 있	습니다"> </qanda>
							<qanda question="호주 영어 어떻게 배워야할까??" answer="호주 영어 맞춰서 배울 필요 딱히 없는데 읽기랑 쓰기가 미국식이랑 똑같고 호주식으로 말할 필요 없지만 호주식 알아들어야해서 일반적으로 영어 잘하는 사람들이 듣기를 집중하는 게 좋을 것 같습니다"> </qanda>
							<qanda question="호주에 속어 많은가?" answer="<a href='https://i.imgur.com/Gw3xBBE.gifv'> 호주는 속어 많다는 걸 다른 영어권 나라도 인정 합니다. </a> 호주에서 거의 모든 속어는 줄임말이라서 처음에 알아듣지 못 해도 한번 알게 되면 기억 하기 쉽습니다."> </qanda>
							<qanda question="호주 사람들이랑 어떻게 놀 수 있나?" answer="호주 와서 호주사람이랑 놀기 은근히 어려워할 수도 있습니다. 그래도 meetup.com이라는 사이트에서 같은 관심 가진 사람들을 만날 수 있습니다. 패턴 크게 봤을 때 언어교환, 스포츠, 전문지식은 meetup 3가지 있습니다 그중에 관심 가는 분야 있으면 meetup을 갈만합니다 모일 때에는 사람 많아서 보통 새로운 사람도 많고 나름대로 어울리기 편합니다.  "> </qanda>
							<qanda question="한국 사람들이 많나?" answer="호주 와서 조심하지 않으면 영어 말고 한국어 늘 수도 있습니다. 특별히 North-Western 호선에 (예를 들어서 Epping, Eastwood, West Ryde, Rhodes, Strathfield) 한국인들이 많습니다."> </qanda>




						</div>


						<div class="tab-pane fade" id="pills-culture" role="tabpanel" aria-labelledby="pills-culture-tab">

							<qanda question="인종차별 심해?" answer="언제나 그렇듯이 나아지고 있지만 인종차별이 여전히 존재하고 있습니다. 지난해에 호주인 20프로 정도 인종차별 당했습니다. <a href='https://www.westernsydney.edu.au/__data/assets/pdf_file/0009/1201203/OMAC1694_Challenging_Racism_Report_4_-_FINAL.pdf'> 북동아시아에서 오는 사람들이 특별히 인종차별을 많이 당하기도 합니다 </a>. 	"> </qanda>
							<qanda question="문화 특점 있나?" answer="호주 영어 맞춰서 배울 필요 딱히 없는데 읽기랑 쓰기가 미국식이랑 똑같고 호주식으로 말할 필요 없지만 호주식 알아들어야해서 일반적으로 영어 잘하는 사람들이 듣기를 집중하는 게 좋을 것 같습니다."> </qanda>
							<qanda question="한국 사람에 대해 어떻게 생각하나?" answer="호주 사람 대부분 한국 사람을 대해 아예 생각하지 않습니다 만약 한국에 대한 의식 있으시면 김치, 김정은, Psy 정도 알 수 있습니다. 또 다르게 표현하자면 한국에서 호주 뉴스 나올만큼 호주에서 한국 뉴스 나옵니다."> </qanda>
							<qanda question="호주 사람들이 어떻게 놀아?" answer=""> </qanda>
							<qanda question="지금 정치 상황 어떻게 되고 있나?" answer=" "> </qanda>


						</div>


						<div class="tab-pane fade" id="pills-employment" role="tabpanel" aria-labelledby="pills-employment-tab">

							<qanda question="최저시급 얼마나 되나?" answer="<a href='https://www.fairwork.gov.au/how-we-will-help/templates-and-guides/fact-sheets/minimum-workplace-entitlements/minimum-wages'>지금 (2018년) 절대적인 최저시급은 $18.29</a> 정도지만 한국이랑 다르게 호주에서는 나이, 산업 혹은 casual이느냐 full-time이느냐 따라서 최저시급 달라집니다. 워홀이나 학생비자 있는 사람도 최저시급 받을 권리 있지만 일 찾기 힘든 경우엔 그권리를 포기하고 일하는 사람도 많습니다."> </qanda>
							<qanda question="호주에서 일하게 되면 시간당에 실제로 얼마나 벌 수 있을까?" answer="대답하기 굉장히 어려운 질문입니다 영어 실력이랑 일 어떻게 구하는지 떠나서 호주 워홀러 대부분  "> </qanda>
							<qanda question="위주로 어떤 일 할 수 있을까?" answer="호주에서 일반적으로 한국의 자격층 인정 안 하고 그대신에 경력을 인정 하는데 경력 쌓였고 일하게 되면 가끔 전공 살리곤 합니다 대부분 단순노무직이나 식당 일 하게 됩니다. "> </qanda>
							<qanda question="어떻게 일을 찾을 수 있나?" answer="인맥 있으면 인맥 쓰는 게 편하겠습니다 호주의 일자리 30%이상 광고 하지 않은채 인맥으로 채웠습니다. 물론 단순노무직 일엔 그비율이 조금 더 낮겠지만 인맥 과소평가하면 안 되죠 온라인에 찾으면 여러가지 사이트에 찾을 수 있습니다. </p>

							<p>요즘 조사 결과 따르면 한국 워홀러들 60%정도 hojunara.com 통해서 일자리 찾았습니다 hojunara는 한인 커뮤니티라서 한인잡밖에 없습니다 한인 커뮤니티 안에서 유명한 gumtree.com도 있지만 별로 추천하고 싶지 않다 gumtree에 장점 같은 단점은 무료로 쉽게 잡 공지 올릴 수 있습니다 결과적으로는 수상한 포스팅을 유독하게 gumtree에서만 봤습니다. seek.com, indeed.com, dora.com 조금 더 엄격한 분위기 있는데 seek.com에서 취업 광고 올릴 때 돈 들고 dora.com에서 모든 광고 인간한테 검사도 받아서 비교적으로 질 높은 광고 있습니다.</p>


							   "> </qanda>
							<qanda question="농장에서 일하기 싫은데 ㅠㅠ?" answer="BBBBB."> </qanda>
							<qanda question="일할 때 손해 보면 어떻게 해야할까?" answer="고용인을 신고하면 비자 취소가 될까봐 걱정 하시는 사람 종종 있지만 워홀러들이 그런 걱정을 절대 안 하셔도 됩니다 오히려는 워킹 비자로 오는 사람들이 고용인을 신고 해도 비자가 취소 되지 않을 거란 보장 받을 수 있습니다 호주의 법 체제는 잘 되어 있어서 손해 봤으면 Fairworks Ombudsman한테 신고 할 수 있습니다 더 자세한 법적인 내용 알고싶다면 변호사랑 얘기 하는 게 제일 좋습니다"> </qanda>

							<qanda question="호주에서 일하는 문화 어떤가?" answer="어떤 일하는냐 따라서 다르겠지만 큰 그림에 한국이랑 비교적으로 훨씬 더 여유롭다는 걸 생각하면 됩니다. 일단 호주에서 직장인들이 아침 9시부터 오후 5시까지만 일합니다 풀타임이랑 파트타임이랑 casual을 일 종류 3가지로 크게 구분할 수 있습니다 어떤 일 하는냐 따라서 베네핏도 받을 수 있습니다"> </qanda>
						</div>


						<div class="tab-pane fade" id="pills-accomodation" role="tabpanel" aria-labelledby="pills-accomodation-tab">

							<qanda question="숙소 얼마나 비싸?" answer="시드니에 숙소는 서울보다 더 비쌉니다. 숙소 어딘지 잡느냐 따라서 다르겠지만 일주일에 따지면 2인용은 기본적으로 150불이고 1인용 기본적으로 250불이라고 생각하시면 됩니다."> </qanda>
							<qanda question="제일 안전한 지역 어딘가?" answer=""> </qanda>
							<qanda question="집을 찾을 때 뭘 알아봐야된가?" answer="AAAAAAAA."> </qanda>
							<qanda question="대중교통 잘 되어있나?" answer="대중교통은 시드니보다 서울에서 훨씬 잘 되는 편 입니/다. 기차는 평소에 15분마다 오는데 언제 타느냐 얼마나 멀리 가느냐 따라서 요금 달라져 싸면 $2.42 들고 비싸면 $4.94 들겠습니다"> </qanda>
							<qanda question="집 어떻게 찾을 수 있나?" answer="AAAAAAAA."> </qand>
							<qanda question="호주 사람 다 집에서 살나?" answer="BBBBB."> </qanda>
							<qanda question="집주인 관리 안 하면 어떻게 하나?" answer="BBBBB."> </qanda>

						</div>


						<div class="tab-pane fade" id="pills-visa" role="tabpanel" aria-labelledby="pills-visa-tab">

							<qanda question="워홀비자엔 무슨 특징 있나?" answer="신청 할 때 맞춰야 하는 조건 몇가지 있습니다 신청하는 과정 말고 막상 호주 온다면 최소 6개월마다 직업 갈아타야 하고 4개월이상 학교나 학원 다닐 수 없습니다.

							그러나 워홀비자는 제일 중요한 특징이 세금을 내는 방식입니다. 호주 시민들이 $18900까지 벌어도 세금 안 냅니다 $18900부터 $37000까지 벌었던 돈은 세금 비율이 19%입니다 $37000이상

							첫번째 $37000에 세금은 15프로입니다 그이상 번 돈엔 호주 시민이랑 똑같은 세금 비율 당합니다. 결국엔 $37000 이상 벌면 호주 사람보다 $200정도 세금 더 내겠습니다"> </qanda>
							<qanda question="1년 너무 짧아 더 있고 싶은데" answer="3개원동안 정해진 시골 지역에서 일하면 세콘드 비자 받고 2년동안 호주에 계실 수도 있습니다. 그렇지만 대부분 농장에서 일하는 걸 선호하지 않습니다 비자 생명이랑 관련 되어있어서 안 좋은 취급 받아도 쉽게 떠나지도 못 합니다. 농장 피하려면 브로커한테 2000불 정도 주면 세콘드 비자 해결 할 경우도 있습니다."> </qanda>
							<qanda question="2년 너무 짧아 더 있고 싶은데" answer="20대 청춘이고 호주에서 길게 살고 싶다면 어쩔 수 없이 학생 비자 따야 합니다. 학생 비자 하기엔 법적으로 일주일에 20시간 넘게 일 하지 못 합니다. 또는 호주 시민보다 학비가 3배정도 더 높아서 경제적인 부담 많이 느낄 수 있습니다. 단순히 비자 해결만 하고 싶다면 일주일에 하루만 다니는 코스 있긴 있습니다. "> </qanda>

						</div>


					</div>
				</div>

				<aside class="col-md-3 blog-sidebar d-none d-md-block">
          <div class="p-3 mb-3 bg-white rounded">
            <h4 class="font-italic">About</h4>
            <p class="mb-0">코알고파는 모든 한국인 워홀러들을 위한 커뮤니티입니다 </p>
          </div>


        </aside><!-- /.blog-sidebar -->



			</div>



</div>


@endsection
