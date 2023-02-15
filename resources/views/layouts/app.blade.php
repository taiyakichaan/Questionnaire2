<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>くえすちょねあ</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2f29e89ea1.js" crossorigin="anonymous"></script>
</head>
<body>
   
     
    <div id="app">
        <div style="background-color:#00ff00;">
         
      　　　　　　　　　　　 @guest
    　　　　　　　　　　　　　　 <h5>ようこそゲストさん！</h5>
                    @else
                    <h5>ようこそ{{Auth::user()->name}}さん！</h5>
                    @endguest
</div>


     <nav class="navbar navbar-expand-sm navbar-dark bg-primary mt-3 mb-3">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav4" aria-controls="navbarNav4" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
              
                 <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                           <h5 class="navbar-brand">メニュー</h5>
                           
                          
                 
                </li>
                           
                        @guest
                            <li class="nav-item">
                               
                                <a class="nav-link" style="color:#ffffff" href="{{ route('login') }}"><i class="fa-solid fa-arrow-right-to-bracket" style="color:#ffffff;"></i>{{ __('ログイン') }}</a>
                            </li>
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}"  style="color:#ffffff;"><i class="fa-solid fa-user" style="color:#ffffff;"></i>{{ __('新規登録') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" style="color:#ffffff" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fa-solid fa-user" style="color:#ffffff;"></i>{{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('ログアウト') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                    
                   
                <li class="nav-item">
                    <a class="nav-link" style="color:#ffffff" href="/posts/howtouse"><i class="fa-solid fa-house"style="color:#ffffff;"></i>ホーム/使い方</a>
                </li>
               
                <li class="nav-item">
                    <a class="nav-link" style="color:#ffffff" href="/posts/index"><i class="fa-regular fa-clock"style="color:#ffffff;"></i>タイムライン</a>
                </li>
                <p>
                <li class="nav-item">
                <a class="nav-link" style="color:#ffffff" href="/posts/create">  <i class="fa-solid fa-plus" style="color:#ffffff;"></i>投稿</a>
            

                </li></p>
                
            </ul>
        </div>
    </nav>   
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    
    
    
     
                    
    
</body>
</html>
