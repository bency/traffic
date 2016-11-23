<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ url('/images/favicon.png')}}" />
    <meta property="og:image" content="{{ url('/images/og-1.png')}}">
    <meta property="og:image" content="{{ url('/images/og-2.png')}}">
    <meta property="og:url" content="{{ url('/')}}">
    <meta property="og:title" content="台灣交通安全協會 - 道路交通安全升級提案">
    <meta property="og:description" content="路安聯盟結合了台灣交通安全協會、台灣機車路權促進會、小老婆汽機車資訊網等長期關注國內道路安全的團體，亦遍尋國外相關作為，實際到國外體驗駕駛行為，希望用國際觀點，改善國內長期難解的交通安全問題">

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
</head>
<body id="app-layout" data-spy="scroll" data-target="#navbar">
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

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a class="menu-item" href="#purpose">提案目的</a></li>
                    <li><a class="menu-item" href="#observation">觀察現象</a></li>
                    <li><a class="menu-item" href="#differences">與他國差異</a></li>
                    <li><a class="menu-item" href="#propose">考照制度變革提案</a></li>
                    <li><a data-type="ga-click" data-target="menu-countersigned-link" class="menu-item" data-href="https://goo.gl/forms/OZ2HIMpC8bMiqFIl2">我同意提案 <span class="glyphicon glyphicon-new-window"></span></a></li>
                    <li><a data-type="ga-click" data-target="menu-proposal-link" class="menu-item" data-href="https://docs.google.com/document/d/19DJmVa-98jt1RywYCyYHXnPnF5Fo0iOOwWFJyB4IL98/edit?usp=sharing">提案詳情 <span class="glyphicon glyphicon-new-window"></span></a></li>
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
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
