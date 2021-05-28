@extends('master')
@section('title', 'Král sýrů')

@section('content')
    <section class="header">

        <div class="header__image-wrapper">

            <div class="crown"></div>

            <h1>
                DOZRÁL ČAS<br />
                NA LÁSKU
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
                <h2 class="slider__headline">ROMANCE V&nbsp;ČERVENÉM</h2>
            </div>

            <div class="slider__slide">
                <h2 class="slider__headline">ROMANCE V&nbsp;BÍLÉM</h2>
            </div>

            <div class="slider__slide">
                <h2 class="slider__headline">ROMANCE V&nbsp;RŮŽOVÉM</h2>
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
                    Král Sýrů Nebeský se středně plným červeným vínem Merlot, sušenými
                    švestkami a&nbsp;blanšírovanými mandlemi je ztělesněním gurmánské
                    noblesy a&nbsp;elegance. Ideální kombinace pro výročí s&nbsp;vaší polovičkou.
                </p>
            </div>

            <div class="slider__slide">
                <p class="text slider__text">
                    Lahodný Král sýrů Nebeský servírovaný na sušence s&nbsp;lískovým oříškem.
                    V&nbsp;kombinaci s plnou chutí bílého Chardonnay představuje nezapomenutelný zážitek pro vás pro oba.
                </p>
            </div>

            <div class="slider__slide">
                <p class="text slider__text">
                    Král Sýrů Nebeský s&nbsp;jahodami, kešu oříšky a&nbsp;růžovým šumivým vínem
                    je svěží kombinací, se kterou vyjádříte vaší polovičce tu pravou lásku.
                </p>
            </div>

        </div>




        <div class="crown"></div>


        <h2 class="margin kolonial-package-headline">
            SPECIÁLNÍ VALENTÝNSKÝ<br />
            BALÍČEK
        </h2>

        <div class="kolonial-wrapper">

            <div class="kolonial-image-wrapper">
                <div class="image"></div>
            </div>

            <p class="text">
                Zjednodušte si přípravu slavnostního večera. Objednejte si delikátní kombinaci, sestavenou naším sommelierem:
                <span class="text--golden">Král Sýrů Nebeský se směsí Oříškového pokušení a&nbsp;šumivým vínem Bohemia Sekt Rosé Demi Sec.</span>
                Neváhejte a&nbsp;připravte pro svou drahou polovičku výjimečný večer.
            </p>

            <!--<a class="btn-buy" target="_blank" href="https://www.kolonial.cz/vina-sekty/bohemia-sekt-rose-demi-sec-zdarma-kral-syru-nebesky-a-oriskovy-mix">KOUPIT</a>-->

            <div class="clearfix"></div>
        </div>


        <div class="crown"></div>

    </section>

    @include('partials.footer')

@endsection
