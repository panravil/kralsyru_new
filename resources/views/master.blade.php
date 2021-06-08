<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title', 'Král sýrů')</title>
    <meta name="description" content="Král Sýrů, hrdý zakladatel kategorie hermelínů, vám tento tradiční český sýr přináší již od roku 1923.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">

    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css?v=3') }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{Request::root()}}/{{ Request::path() }}">
    <meta property="og:site_name" content="Král sýrů">

    @if(Request::path() === 'jak-chutna-laska')
      <meta property="og:title" content="JAK CHUTNÁ LÁSKA?">
      <meta property="og:description" content="Vychutnejte si speciální edici Krále sýrů Májový s delikatesami od našich foodbloggerek!">
      <meta property="og:image" content="{{Request::root()}}/images/fb-share-cam.jpg">
    @else
      <meta property="og:title" content="DOZRÁL ČAS NA HERMELÍN">
      <meta property="og:description" content="Král Sýrů, hrdý zakladatel kategorie hermelínů, vám tento tradiční český sýr přináší již od roku 1923.">
      <meta property="og:image" content="{{Request::root()}}/images/fb-share.jpg">
    @endif
    <link rel="shortcut icon" href="{{ asset('favicon.ico?v=2') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('favicon.ico?v=2') }}" type="image/x-icon">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-W7QQ4LC');</script>
    <!-- End Google Tag Manager -->
    {!! NoCaptcha::renderJs() !!}
    
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.scrollbar.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery-migrate-1.2.1.min.js') }}"></script>
</head>
<body class="{{ Request::segment(1) ? : 'home' }}">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W7QQ4LC"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div id="nav-bar" class="clearfix">
        <div class="container-960">
            <a href="/" class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="" />
            </a>
            <nav class="nav-bar">
                <ul>
                    <!--<li><a style="text-transform: uppercase;" href="http://kralsyru.cz/pravidla-souteze-nezapomenutelny-zazitek.pdf">Soutěž</a></li>-->
		                  <!-- <li><a style="text-transform: uppercase;" target="_blank" href="http://kralsyru.cz/vyherci-souteze.pdf">Soutěž</a></li> -->
                    <li {{ (Request::segment(1) == 'nase-syry' ? 'class=selected' : '') }}><a href="/nase-syry">NAŠE SÝRY</a></li>
                    <li {{ (Request::segment(1) == 'syry-a-vino' ? 'class=selected' : '') }}><a href="/syry-a-vino">SÝRY A VÍNO</a></li>
                    <li {{ (Request::segment(1) == 'pece-o-syry' ? 'class=selected' : '') }}><a href="/pece-o-syry">PÉČE O SÝRY</a></li>
                    <li {{ (Request::segment(1) == '95-vyroci' ? 'class=selected' : '') }}><a href="/95-vyroci">NÁŠ PŘÍBĚH</a></li>
                    <li {{ (Request::segment(1) == 'kontakt' ? 'class=selected' : '') }}><a href="/kontakt">KONTAKT</a></li>
                </ul>
            </nav>

            <div class="hamburger">
                <span>Menu</span>
                <img src="{{ asset('images/hambac.svg') }}" alt="">
            </div>
        </div>
    </div>

    <nav class="nav-bar nav-bar-mobile">
        <a href="/" class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="" />
        </a>
        <ul>
            <!--<li><a style="text-transform: uppercase;" href="http://kralsyru.cz/pravidla-souteze-nezapomenutelny-zazitek.pdf">Soutěž</a></li>-->
	     <!-- <li><a style="text-transform: uppercase;" href="http://kralsyru.cz/vyherci-souteze.pdf">Soutěž</a></li> -->
            <li {{ (Request::segment(1) == 'nase-syry' ? 'class=selected' : '') }}><a href="/nase-syry">NAŠE SÝRY</a></li>
            <li {{ (Request::segment(1) == 'syry-a-vino' ? 'class=selected' : '') }}><a href="/syry-a-vino">SÝRY A VÍNO</a></li>
            <li {{ (Request::segment(1) == 'pece-o-syry' ? 'class=selected' : '') }}><a href="/pece-o-syry">PÉČE O SÝRY</a></li>
            <li {{ (Request::segment(1) == '95-vyroci' ? 'class=selected' : '') }}><a href="/95-vyroci">NÁŠ PŘÍBĚH</a></li>
            <li {{ (Request::segment(1) == 'kontakt' ? 'class=selected' : '') }}><a href="/kontakt">KONTAKT</a></li>
        </ul>

        <div class="hamburger hamburger-close">
            <span>Menu</span>
            <img src="{{ asset('images/hambac-x.svg') }}" alt="">
        </div>
    </nav>

        @yield('content')
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-91378406-1', 'auto');
      ga('send', 'pageview');

    </script>
    <script type="text/javascript" src="{{ asset('js/form-validator.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/slick.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/covervid.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/main.js?v=3') }}"></script>
    <script>
        $.validate();
    </script>
    @yield('scripts')

</body>
</html>
