<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ url('/images/favicon.png')}}" />
    <meta property="og:image" content="{{ url('/images/og-4.png')}}">
    <meta property="og:image" content="{{ url('/images/og-2.png')}}">
    <meta property="og:image" content="{{ url('/images/og-3.png')}}">
    <meta property="og:url" content="{{ url('/')}}">
    <meta property="og:title" content="台灣交通安全協會 - 道路交通安全升級提案">
    <meta property="og:description" content="道路安全變革提案，請支持聯署，並轉寄。台灣每年交通事故死亡超過3000人，即每年失去一所高中師生數的生命。18~19歲剛拿到駕照的年輕人更是機車死亡的高發族群，道路竟成為剛進入社會、國家未來希望的年輕人的最大潛在危險地。">

    <title>台灣交通安全協會 - 道路交通安全升級提案</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link href="{{ elixir('css/app.css') }}" rel="stylesheet">

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-84981428-2', 'auto');
        ga('send', 'pageview');

    </script>
    @yield('head')
</head>
<body id="app-layout" data-spy="scroll" data-target="#navbar">
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v2.6";
fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <nav id="navbar" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    台灣交通安全協會
                </a>
            </div>

            <div class="collapse navbar-collapse pull-right" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li class="{{ ($current == 'home') ? 'active' : '' }}"><a class="menu-item" href="{{ route('home') }}"><span class="glyphicon glyphicon-pencil"></span> 提案聯署</a></li>
                    <li class="{{ ($current == 'polis') ? 'active' : '' }}"><a class="menu-item" href="{{ route('polis') }}"><i class="fa fa-comments" aria-hidden="true"></i> 意見交流</a></li>
                    <li class="{{ ($current == 'observation') ? 'active' : '' }}"><a class="menu-item" href="{{ route('observation') }}"><i class="fa fa-eye" aria-hidden="true"></i> 社會觀察</a></li>
                    <li class="{{ ($current == 'comparation') ? 'active' : '' }}"><a class="menu-item" href="{{ route('comparation') }}">他國作法</a></li>
                    <li class="{{ ($current == 'revolution') ? 'active' : '' }}"><a class="menu-item" href="{{ route('revolution') }}">變革提案</a></li>
                    <li><a data-type="ga-click" data-target="menu-proposal-link" class="menu-item" data-href="{{ url('/docs/交通安全升級提案書_20161127.pdf') }}">提案詳情 <span class="glyphicon glyphicon-new-window"></span></a></li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="footer">
        <dl class="dl-horizontal">
            <dt></dt>
            <dd>台灣交通安全協會</dd>
            <dd>新北市三重區重新路 4 段 244 巷 8 號</dd>
            <dd><a href="mailto:rightofwaytw@gmail.com" target="_blank">rightofwaytw@gmail.com</a></dd>
        </dl>
    </footer>
    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="{{ elixir('js/app.js') }}"></script>
    <nav id="navbar" class="navbar-footer navbar-fixed-bottom">
        <p data-type="ga-click" data-target="bottom-nav" data-href="https://goo.gl/forms/OZ2HIMpC8bMiqFIl2" class="text-center">已有 <span class="countersigned-count label label-danger">...</span> 人參加聯署</p>
    </nav>
    <div class="fb-quote" data-href="https://traffic.keeping.work"></div>
</body>
</html>
