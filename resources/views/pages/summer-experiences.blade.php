@extends('master')
@section('title', 'Král sýrů - Léto královských zážitků')

@section('content')
    <section class="header">

        <div class="header__image-wrapper">

            <div class="crown"></div>

            <h1>
                LÉTO KRÁLOVSKÝCH <br />ZÁŽITKŮ
            </h1>

        </div>

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

        <div class="slider slider--headlines">

            <div class="slider__slide">
                <h2 class="slider__headline">PROVENSÁLSKÉ LÉTO</h2>
            </div>

            <div class="slider__slide">
                <h2 class="slider__headline">TEMPERAMENTNÍ LÉTO</h2>
            </div>

            <div class="slider__slide">
                <h2 class="slider__headline">ORIGINÁLNÍ LÉTO</h2>
            </div>

        </div>

        <div class="slider slider--images">
            <div class="slider__slide">
                <div class="image slide-image-1"></div>
            </div>
            <div class="slider__slide">
                <div class="image slide-image-2"></div>
            </div>
            <div class="slider__slide">
                <div class="image slide-image-3"></div>
            </div>
        </div>

        <div class="slider slider--texts">

            <div class="slider__slide">
                <p class="text slider__text">
                    Dopřejte si kombinaci, inspirovanou nádherným Provensálskem: Král Sýrů Provensálske bylinky, kořenité červené a&nbsp;k&nbsp;tomu sušené švestky.
                </p>
            </div>

            <div class="slider__slide">
                <p class="text slider__text">
                    Zažijte letní večery s&nbsp;temperamentní kombinací Krále Sýrů Jalapenos, španělského vína a&nbsp;mangového čatní. Ať je vám toto léto do tance!
                </p>
            </div>

            <div class="slider__slide">
                <p class="text slider__text">
                    Prožijte večer s&nbsp;tím, koho máte nejraději. Váš zážitek skvěle doplní Král Sýrů Hermelín Originál, fíky se slanými krekrami a&nbsp;kvalitní rulandské.
                </p>
            </div>

        </div>


        <div class="crown"></div>


    </section>

    @include('partials.footer')

@endsection
