<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    @yield('preload')

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="img/koalgopa_logo_small.jpg" style="height:50px">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->

                        <li> <a class="nav-link" href="{{ route('welcome') }}">{{ __('홈') }}</a></li>
                        <li> <a class="nav-link" href="{{ route('news') }}">{{ __('기사') }}</a></li>
                        <li> <a class="nav-link" href="{{ route('interviews') }}">{{ __('인터뷰') }}</a></li>
                        <li> <a class="nav-link" href="{{ route('company') }}">{{ __('회사 후기') }} </a></li>
                        <li> <a class="nav-link" href="{{ route('forum') }}">{{ __('게시판') }}</a></li>

                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('로그인') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('회원 가입') }}</a></li>

                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="{{ route('user') }}"> {{ __('프로필') }} </a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('로그아웃') }}
                                    </a>


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4 mb-4">
            @yield('content')
        </main>




    </div>


</body>

<footer class="footer bg-dark">
    <div class="container text-center text-md-left mt-2">

      <div class="text-white row pt-4">

          <!--First column-->
            <div class="col-sm-6 d-none d-sm-block">
                <p>  호주 오는 워홀러들이 호주 워홀 단점 피하고 장점 향상 살릴 수 있다면 좋겠다는 마음에 만든 사이트라서 모두 다 호의적인 태도 갖고 이득적인 정보 나눴으면 좋겠습니다 </p>
          </div>
          <!--/.First column-->


          <!--Second column-->
          <div class="col-sm-6 mx-auto">
              <p>Contact: {{config('mail.username')}} <br>
              The contents of this webpage are copyright © {{date("Y")}} {{config('app.name', 'Koreansite')}}. </p>

          </div>
          <!--/.Second column-->


      </div>
  </div>
  <!--/.Footer Links-->

  <!--/.Call to action-->


  </footer>

</html>
