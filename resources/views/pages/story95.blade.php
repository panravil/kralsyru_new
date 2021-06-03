@extends('master')
@section('title', 'Král sýrů - Náš příběh')

@section('content')
    <div id="overlayPopup"></div>
    <section class="header pribeh-chuti-95">

        <div class="covervid-wrapper">
            <video class="covervid-video" autoplay loop muted poster="{{ asset('images/pribehchuti95/cover.jpg') }}">
                <source src="{{ asset('images/pribehchuti95/small-loop.webm') }}" type="video/webm">
                <source src="{{ asset('images/pribehchuti95/small-loop.mp4') }}" type="video/mp4">
            </video>
        </div>

        <div class="header__image-wrapper">
            <div class="crown"></div>
            <div class="container-960">
                <h1>
                    Příběh lahodné <br/>chuti trvá téměř<br/> <span class="gold">100 let</span>
                </h1>

                <p class="header__text"></p>

            </div>
        </div>
        <div class="arrow-down"></div>
    </section>

    <section class="content cheesecare pribeh-chuti-95">
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

            <p class="text mb-50"><span class="gold">Hermelín</span> – originální český sýr s ušlechtilou bílou plísní spatřil tmu sklepů před více než 90 lety v Přibyslavi, v srdci Vysočiny. <br/><span class="gold">Seznamte se s Králem sýrů!</span></p>

            <div class="content-wrapper group content-columns-wrapper">

                <div class="content-columns-divider">
                    <div class="content-divider-rail step-1">
                        <div class="divider-dot step-1" data-step="1"></div>
                        <div class="divider-dot step-2" data-step="2"></div>
                        <div class="divider-dot step-3" data-step="3"></div>
                        <div class="divider-dot step-4" data-step="4"></div>

                        <div class="active-divider-dot"></div>
                    </div>
                </div>

                <div class="content-wrapper-items group year-1923">
                    <div class="content-wrapper-item right">
                        <img src="{{ asset('/images/story/img-5.png') }}" alt="">
                    </div>
                    <div class="content-wrapper-item left">
                        <h2>1923</h2>
                        <p>Historie českého hermelínu se začala psát během 1. světové války, kdy se do Československa dostala francouzská pochoutka camembert. Kdo k&nbsp;nám tehdy přivezl její recepturu zůstává záhadou. Jisté je však to, že se čeští mlékaři a&nbsp;sýraři na Přibyslavsku rozhodli tuto delikatesu s&nbsp;bílou plísní na povrchu, vyrobit také. Založili proto roku 1923 v&nbsp;Hesově mlékařské družstvo Pribina, které začalo vyrábět Přibyslavský camembert.</p>
                    </div>
                </div>

                <div class="content-wrapper-items group year-1946">
                    <div class="content-wrapper-item left">
                        <img src="{{ asset('/images/pribehchuti95/newsyr.png') }}" alt="">
                    </div>
                    <div class="content-wrapper-item right">
                        <h2>1946</h2>
                        <p>Silně aromatický camembert však bylo třeba přizpůsobit chuti českých labužníků. Hesovští sýraři přišli s&nbsp;vlastní úpravou původní receptury. Začali používat pasterované mléko a&nbsp;jiný druh plísně, díky které sýr při zrání získává příjemné žampionové aroma a&nbsp;krémově lahodnou chuť. Pro svůj produkt také v&nbsp;roce 1946 nechali patentovat vlastní název –&nbsp;Hermelín. Novému sýru se skvěle dařilo a&nbsp;postupně se začal prodávat v&nbsp;celém Československu.</p>
                    </div>
                </div>

                <div class="content-wrapper-items group year-1993">
                    <div class="content-wrapper-item right">
                        <img src="{{ asset('/images/story/img-10.png') }}" alt="">
                    </div>
                    <div class="content-wrapper-item left">
                        <h2>1993</h2>
                        <p>V&nbsp;devadesátých letech dvacátého století procházela česká společnost významnými změnami, které se promítly i&nbsp;do sýrařského prostředí. Majitelem závodu Pribina se v&nbsp;roce 1993 stal uznávaný francouzský sýrařský odborník Jean-Noël Bongrain. A&nbsp;právě v&nbsp;tomto roce se také hesovský hermelín začal prodávat pod značkou Král Sýrů, která vyjadřuje jeho prémiovou kvalitu.</p>
                    </div>
                </div>

            </div>

            <div class="last-item-wrapper">
                <div class="mobile-last-item-image">
                    <img src="{{ asset('images/pribehchuti95/newpackage.png') }}" alt="">
                </div>

                <div class="last-item-text">
                    <h2>2018</h2>
                    <p>Příběh úspěchu značky Král sýrů se píše již více než 90 let a&nbsp;stále nekončí. Dnes je Král Sýrů vnímaný jako delikatesa, jejíž krémová chuť a&nbsp;konzistence se skvěle hodí k&nbsp;vybraným druhům ušlechtilých vín.<br/><br/>Tématu párování sýru a&nbsp;vína se Král sýrů intenzivně věnuje, a&nbsp;otevírá tak českým gurmetům stále nové a&nbsp;nové možnosti.</p>
                </div>

                <div class="desktop-last-item-image">
                    <img src="{{ asset('images/pribehchuti95/newpackage.png') }}" alt="">
                </div>
            </div>

            <div class="crown"></div>

            <h2>VÝVOJ BALENÍ</h2>

        </div>

        <div id="slider-box" class="cheese-slider">

            <div class="slide">
                <div class="slide-content">
                    <img src="{{ asset('images/story/slider/img-1923.png') }}" alt="Hermelín Originál">
                    <p>1923</p>
                </div>
            </div>

            <div class="slide">
                <div class="slide-content">
                    <img src="{{ asset('images/story/slider/img-1975.png') }}" alt="Hermelín Originál">
                    <p>1975</p>
                </div>
            </div>

            <div class="slide">
                <div class="slide-content">
                    <img src="{{ asset('images/story/slider/img-1978.png') }}" alt="Hermelín Originál">
                    <p>1978</p>
                </div>
            </div>

            <div class="slide">
                <div class="slide-content">
                    <img src="{{ asset('images/story/slider/img-1985.png') }}" alt="Hermelín Originál">
                    <p>1985</p>
                </div>
            </div>

            <div class="slide">
                <div class="slide-content">
                    <img src="{{ asset('images/story/slider/img-1986.png') }}" alt="Hermelín Originál">
                    <p>1986</p>
                </div>
            </div>

            <div class="slide">
                <div class="slide-content">
                    <img src="{{ asset('images/story/slider/img-1990.png') }}" alt="Hermelín Originál">
                    <p>1990</p>
                </div>
            </div>

            <div class="slide">
                <div class="slide-content">
                    <img src="{{ asset('images/story/slider/img-1993.png') }}" alt="Hermelín Originál">
                    <p>1993</p>
                </div>
            </div>

            <div class="slide">
                <div class="slide-content">
                    <img src="{{ asset('images/story/slider/img-1994.png') }}" alt="Hermelín Originál">
                    <p>1994</p>
                </div>
            </div>

            <div class="slide">
                <div class="slide-content">
                    <img src="{{ asset('images/story/slider/img-1996.png') }}" alt="Hermelín Originál">
                    <p>1996</p>
                </div>
            </div>
            <div class="slide">
                <div class="slide-content">
                    <img src="{{ asset('images/story/slider/img-2007.png') }}" alt="Hermelín Originál">
                    <p>2007</p>
                </div>
            </div>
            <div class="slide">
                <div class="slide-content">
                    <img src="{{ asset('images/story/slider/img-2016.png') }}" alt="Hermelín Originál">
                    <p>2011</p>
                </div>
            </div>
            <div class="slide">
                <div class="slide-content">
                    <img src="{{ asset('images/story/slider/img-2017.png') }}" alt="Hermelín Originál">
                    <p>2017</p>
                </div>
            </div>
            <div class="slide">
                <div class="slide-content">
                    <img src="{{ asset('images/story/slider/img-2018.png') }}" alt="Hermelín Originál">
                    <p>2018</p>
                </div>
            </div>
            <div class="slide">
                <div class="slide-content">
                    <img src="{{ asset('images/story/slider/img-2020.png') }}" alt="Hermelín Originál">
                    <p>2020</p>
                </div>
            </div>
        </div>
    </section>

    @include('partials.footer')

@endsection
