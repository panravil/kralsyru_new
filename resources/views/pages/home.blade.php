@extends('master')
@section('title', 'Král sýrů')

@section('content')
    <div id="overlayPopup"></div>
    <section class="header hp-mak" style="background-image: url('{{$cover->cover}}');">

{{--        <div class="covervid-wrapper">--}}
{{--            <video class="covervid-video" data-type="hp" autoplay loop muted poster="{{ asset('images/pribehchuti95/cover.jpg') }}">--}}
{{--                <source src="{{ asset('images/pribehchuti95/hp-loop.webm') }}" type="video/webm">--}}
{{--                <source src="{{ asset('images/pribehchuti95/hp-loop.mp4') }}" type="video/mp4">--}}
{{--            </video>--}}
{{--        </div>--}}

        <div class="header__image-wrapper">
            <div class="crown"></div>
            <h1>
                <!--JAK CHUTNÁ<br> LÁSKA?-->
                <!-- LÉTO KRÁLOVSKÝCH <br />ZÁŽITKŮ -->


                <!---PRO TY, KDO<br />
				        <span class="gold">SI UMÍ VYBRAT</span> -->

                PRO TY, KDO<br/>
                SI UMÍ VYBRAT


            </h1>
            <div class="arrow-down"></div>

            <!--<a href="/jak-chutna-laska" class="btn btn-more">ZJISTIT VÍCE</a>-->
            <!--<a href="/leto-kralovskych-zazitku" class="btn btn-more">ZJISTIT VÍCE</a> -->
            <!--<a href="/pece-o-syry" class="btn btn-more">ZJISTIT VÍCE</a>-->

            <a href="/nase-syry/safir" class="btn btn-more">ZJISTIT VÍCE</a>

        </div>

        <div class="arrow-down"></div>

    </section>

    <section class="content">
        <section id="search-bar">
            <div class="top-strip-wrapper">
                <svg class="bottom-strip-bg" version="1.1" id="Vrstva_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 1440 18" style="enable-background:new 0 0 1440 18;" xml:space="preserve">
                    <defs>
                        <pattern id="top-strip-pattern" patternUnits="objectBoundingBox" x="0" y="0" width="100%" height="100%">
                            <image xlink:href="{{ asset('images/top_strip_pattern.png') }}" x="0" y="0" width="100%" height="100" />
                        </pattern>
                    </defs>
                    <path class="bottom-layer" fill="#7b6c39" d="M1440,4.9c0,0-540,13.1-720,13.1S0,4.9,0,4.9V0h1440V4.9z" />
                    <path class="ts0" fill="url(#top-strip-pattern)" d="M1440,4.9c0,0-540,13.1-720,13.1S0,4.9,0,4.9V0h1440V4.9z"/>
                </svg>
            </div>

            <div class="search-bar-content">
                <h2 class="h2-white">PÁROVÁNÍ SÝRŮ A VÍN</h2>

                <p class="text header__text">
                    <span>
                        Sýry a vína k sobě odedávna patří a jejich vhodné párování přináší nezapomenutelný chuťový zážitek. Najděte svému sýru nebo vínu ideálního partnera.
                    </span>
                </p>

                @include('partials.select')

            <div class="bottom-strip-wrapper">
                <svg version="1.1" id="Vrstva_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 1440 18" style="enable-background:new 0 0 1440 18;" xml:space="preserve">

                    <defs>
                        <pattern id="top-strip-pattern" patternUnits="objectBoundingBox" x="0" y="0" width="100%" height="100%">
                            <image xlink:href="{{ asset('images/top_strip_pattern.png') }}" x="0" y="0" width="100%" height="100" />
                        </pattern>
                    </defs>

                    <path class="bottom-layer" fill="rgb(123, 108, 57)" d="M0,13.1C0,13.1,540,0,720,0s720,13.1,720,13.1V18H0V13.1z" />
                    <path class="ts0" fill="url(#top-strip-pattern)" d="M0,13.1C0,13.1,540,0,720,0s720,13.1,720,13.1V18H0V13.1z"/>
                </svg>
            </div>
        </section>

        <article id="slider-content">
            <div class="container-960">
                <h2>NAŠE SÝRY</h2>
                <p>
                    Značka Král Sýrů dozrála po téměř sto let svého trvání k dokonalosti. Ochutnejte celou řadu výtečných plísňových sýrů.
                </p>
            </div>

            <div id="slider-cheese">

                @foreach( $cheeses as $cheese )

                    <div class="slide">
                        <div class="slide-content">
                            <img src="{{ $cheese->img }}" alt="">
                            <p>{{ ($cheese->id <= 6 ? 'Hermelín' : 'Král Sýrů') }}<br>{{ $cheese->title }}</p>
                            <span class="slide-img-hover">
                                <a href="/nase-syry/{{ $cheese->link }}" class="btn btn-more">VÍCE</a>
                            </span>
                            <a href="/nase-syry/{{ $cheese->link }}" class="mobile-link"></a>
                        </div>
                    </div>

                @endforeach

            </div>
        </article>

    </section>

    @include('partials.occasion')

    @include('partials.footer')

@endsection
