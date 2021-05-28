@extends('master')
@section('title', 'Král sýrů')

@section('content')
    <div id="overlayPopup"></div>
    <section class="header">

        <div class="header__image-wrapper">
            <div class="crown"></div>
            <div class="container-960">
                <h1>
                    PŘÍBĚH KRÁLE
                </h1>

                <p class="header__text"></p>

            </div>
        </div>
        <div class="arrow-down"></div>
    </section>

    <section class="content cheesecare">
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

        <div class="container-960">

            <p class="text gold" style="font-family: proxima;">O historii a výrobě originálního českého Hermelínu.</p>
            <p class="text mb-50">Hermelín – originální český sýr s ušlechtilou bílou plísní spatřil tmu sklepů před více než 90 lety v Přibyslavi, v srdci Vysočiny. Seznamte se s Králem sýrů!</p>

            <div class="content-wrapper group">

                <div class="content-wrapper-items group">
                    <div class="content-wrapper-item right">
                        <img src="{{ asset('/images/story/img-5.png') }}" alt="">
                    </div>
                    <div class="content-wrapper-item left">
                        <h2>1923</h2>
                        <p>Skupina zemědělců z Vysočiny se rozhodla vytvořit družstvo na zpracování mléka. V červnu následujícího roku přijímá závod svých prvních 207 litrů mléka a vyrábí první ručně formovaný sýr s bílou plísní na povrchu.</p>
                    </div>
                </div>

                <div class="content-wrapper-items group">
                    <div class="content-wrapper-item left">
                        <img src="{{ asset('/images/story/img-6.png') }}" alt="">
                    </div>
                    <div class="content-wrapper-item right">
                        <h2>1946</h2>
                        <p>V roce 1946 byl patentován název Hermelín. Bílá plíseň na povrchu sýru připomíná stejnojmennou kožešinu z hranostajů, která tvoří tradiční slavnostní roucho králů.</p>
                    </div>
                </div>

                <div class="content-wrapper-items group">
                    <div class="content-wrapper-item right">
                        <img src="{{ asset('/images/story/img-7.png') }}" alt="">
                    </div>
                    <div class="content-wrapper-item left">
                        <h2>1976</h2>
                        <p>Od roku 1976 nahradila mechanizace a nové zrací sklepy zastaralou ruční a tzv. zimní výrobu plísňových sýrů v Přibyslavi. Díky tomu bylo možné vyrábět Hermelín celoročně a vozit ho i do odlehlejších částí Československa.</p>
                    </div>
                </div>

                <div class="content-wrapper-items group">
                    <div class="content-wrapper-item left">
                        <img src="{{ asset('/images/story/img-8.png') }}" alt="">
                    </div>
                    <div class="content-wrapper-item right">
                        <h2>1989</h2>
                        <p>Na přelomu 80. a 90. let poprvé zdobí krabičku tradičního českého Hermelínu obrázek krále na bujném oři. Královský motiv demonstruje a potvrzuje výjimečné vlastnosti tohoto sýra.</p>
                    </div>
                </div>

                <div class="content-wrapper-items group">
                    <div class="content-wrapper-item right">
                        <img src="{{ asset('/images/story/img-9.png') }}" alt="">
                    </div>
                    <div class="content-wrapper-item left">
                        <h2>1993</h2>
                        <p>Od roku 1993 čerpá Král Sýrů inspiraci i od zahraničních sýrařských mistrů a využívá nejmodernější technologie. To všechno díky novému majiteli: společnosti Bongrain, francouzskému expertovi na sýry.</p>
                    </div>
                </div>

                <div class="content-wrapper-items group">
                    <div class="content-wrapper-item left">
                        <img src="{{ asset('/images/story/img-10.png') }}" alt="">
                    </div>
                    <div class="content-wrapper-item right">
                        <h2>1996</h2>
                        <p>Přivítejte Jeho Veličenstvo! V roce 1996 se sýr z přibyslavské Pribiny, proslulý ušlechtilou bílou plísní na povrchu, oficiálně stává značkou Král sýrů.</p>
                    </div>
                </div>

            </div>

            <div class="crown"></div>

            <h2>VÝVOJ BALENÍ</h2>

        </div>

        <div id="slider-box">

            <div class="slide">
                <div class="slide-content">
                    <img src="{{ asset('images/story/slider/img-1923.png') }}" alt="">
                    <p>1923</p>
                </div>
            </div>

            <div class="slide">
                <div class="slide-content">
                    <img src="{{ asset('images/story/slider/img-1975.png') }}" alt="">
                    <p>1975</p>
                </div>
            </div>

            <div class="slide">
                <div class="slide-content">
                    <img src="{{ asset('images/story/slider/img-1978.png') }}" alt="">
                    <p>1978</p>
                </div>
            </div>

            <div class="slide">
                <div class="slide-content">
                    <img src="{{ asset('images/story/slider/img-1985.png') }}" alt="">
                    <p>1985</p>
                </div>
            </div>

            <div class="slide">
                <div class="slide-content">
                    <img src="{{ asset('images/story/slider/img-1986.png') }}" alt="">
                    <p>1986</p>
                </div>
            </div>

            <div class="slide">
                <div class="slide-content">
                    <img src="{{ asset('images/story/slider/img-1990.png') }}" alt="">
                    <p>1990</p>
                </div>
            </div>

            <div class="slide">
                <div class="slide-content">
                    <img src="{{ asset('images/story/slider/img-1993.png') }}" alt="">
                    <p>1993</p>
                </div>
            </div>

            <div class="slide">
                <div class="slide-content">
                    <img src="{{ asset('images/story/slider/img-1994.png') }}" alt="">
                    <p>1994</p>
                </div>
            </div>

            <div class="slide">
                <div class="slide-content">
                    <img src="{{ asset('images/story/slider/img-1996.png') }}" alt="">
                    <p>1996</p>
                </div>
            </div>
            <div class="slide">
                <div class="slide-content">
                    <img src="{{ asset('images/story/slider/img-2007.png') }}" alt="">
                    <p>2007</p>
                </div>
            </div>
            <div class="slide">
                <div class="slide-content">
                    <img src="{{ asset('images/story/slider/img-2016.png') }}" alt="">
                    <p>2011</p>
                </div>
            </div>
            <div class="slide">
                <div class="slide-content">
                    <img src="{{ asset('images/story/slider/img-2017.png') }}" alt="">
                    <p>2017</p>
                </div>
            </div>


        </div>
    </section>

    @include('partials.footer')

@endsection
