@extends('master')
@section('title', 'Král sýrů')

@section('content')
    <section class="header" style="background-image: url('{{$cover->cover}}');">
        <div class="header-bg2-wrapper">

        </div>

        <div class="header__image-wrapper">
            <div class="crown"></div>
            <h1>
                NAŠE SÝRY
            </h1>

        </div>
        <div class="arrow-down"></div>
    </section>

    <section class="content">

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

        <article id="slider-content">
            <div class="container-960">
                <p class="text gold mb-50" style="font-family: proxima;">{{$text->lead}}</p>
                <div class="crown"></div>
                <h2>{{$text->h1}}</h2>
                <p>
                    {{$text->p1}}
                </p>
            </div>

            <div id="slider-cheese">

                @foreach( $original as $cheese )

                    <div class="slide">
                        <div class="slide-content">
                            <img src="{{ $cheese->img }}" alt="">
                            <p>Hermelín<br>{{ $cheese->title }}</p>
                        <span class="slide-img-hover">
                            <a href="/nase-syry/{{ $cheese->link }}" class="btn btn-more">VÍCE</a>
                        </span>
                            <a href="/nase-syry/{{ $cheese->link }}" class="mobile-link"></a>
                        </div>
                    </div>

                @endforeach

            </div>

            <div class="crown"></div>

            <div class="container-960">
                <h2>{{$text->h2}}</h2>
                <p>
                    {{$text->p2}}
                </p>
            </div>

            <div id="slider-cheese-2">

                @foreach( $special as $cheese )

                    <div class="slide">
                        <div class="slide-content">
                            <img src="{{ $cheese->img }}" alt="">
                            <p>Král Sýrů<br>{{ $cheese->title }}</p>
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


    </section>

    @include('partials.occasion')

    @include('partials.footer')

@endsection
