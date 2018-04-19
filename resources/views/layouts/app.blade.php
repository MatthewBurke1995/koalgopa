<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - 호주 지식 커뮤니티</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Koreansite') }}
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

                        <li><a class="nav-link" href="{{ route('welcome') }}">{{ __('Home') }}</a></li>
                        <li><a class="nav-link" href="{{ route('news') }}">{{ __('News') }}</a></li>
                        <li><a class="nav-link" href="{{ route('interviews') }}">{{ __('Interviews') }}</a></li>
                        <li><a class="nav-link" href="{{ route('forum') }}">{{ __('Forum') }}</a></li>

                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>

                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="{{ route('user') }}"> {{ __('Profile') }} </a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
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
                <p>'코알고파'는 코알라랑 알고파라는 단어 합치는 말입니다. 이사이트는 한인 워홀러들 위한 지식 커뮤니티 공간입니다.</p>
                <p>  호주 오는 워홀러들이 호주 워홀 단점 피하고 장점 향상 시킬 수 있다면 좋겠다는 마음에 만든 사이트라서 여기서 잘 못 된 정보 있으시면 바로 이메일로
                연락해주시길 바랍니다. </p>
          </div>
          <!--/.First column-->


          <!--Second column-->
          <div class="col-sm-6 mx-auto">
              <p>Contact: {{config('mail.username')}}</p>
              <p>The contents of this webpage are copyright © {{date("Y")}} {{config('app.name', 'Koreansite')}}. </p>

          </div>
          <!--/.Second column-->


      </div>
  </div>
  <!--/.Footer Links-->

  <!--/.Call to action-->


  </footer>

</html>
