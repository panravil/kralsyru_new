@extends('master')
@section('title', 'Král sýrů')

@section('content')
    <div id="overlayPopup"></div>
    <section class="header" style="background-image: url('{{$cover->cover}}');">

        <div class="header__image-wrapper">
            <div class="crown"></div>
            <div class="container-960">
                <h1>
                    PÉČE O SÝRY
                </h1>
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

            <p class="text gold mb-50" style="font-family: proxima;">Abyste si mohli co nejlépe vychutnat sýry samostatně nebo v kombinaci s víny a dalšími delikatesami, je třeba předtím o sýry správně pečovat. Čím lepší péče, tím větší chuťový zážitek, který dodá každé příležitosti punc výjimečnosti.</p>
            <div class="content-wrapper group">

                <div class="content-wrapper-items group">
                    <div class="content-wrapper-item right">
                        <img src="{{ asset('/images/pece-o-syry/img-1.png') }}" alt="">
                    </div>
                    <div class="content-wrapper-item left">
                        <h2>Uchovávání sýrů</h2>
                        <p>Sýry uchovávejte v teplotě 10–12 °C. Pokud jste odkázáni na chladničku, uložte je, dobře zabalené, do nejméně chladné části chladničky.</p>
                    </div>
                </div>

                <div class="content-wrapper-items group">
                    <div class="content-wrapper-item left">
                        <img src="{{ asset('/images/pece-o-syry/img-2.png') }}" alt="">
                    </div>
                    <div class="content-wrapper-item right">
                        <h2>Krájení sýrů</h2>
                        <p>Každý sýr krájíme tak, aby každý dílek měl stejný podíl středové části i kůrky, a chuťový zážitek byl úplný.</p>
                    </div>
                </div>

                <div class="content-wrapper-items group">
                    <div class="content-wrapper-item right">
                        <img src="{{ asset('/images/pece-o-syry/img-3.png') }}" alt="">
                    </div>
                    <div class="content-wrapper-item left">
                        <h2>Servírování sýrů</h2>
                        <p>Sýry vyndejte z chladničky alespoň 30, nejlépe však 60 minut před podáváním. Aroma i chuť sýrů se plně rozvine při pokojové teplotě.</p>
                    </div>
                </div>

                <div class="content-wrapper-items group">
                    <div class="content-wrapper-item left">
                        <img src="{{ asset('/images/pece-o-syry/img-4.png') }}" alt="">
                    </div>
                    <div class="content-wrapper-item right">
                        <h2>Hledání chutí</h2>
                        <p>Buďte odvážní a nebojte se experimentovat. Jen pokud se vydáte neprošlapanou cestou, můžete na jejím konci najít chuť, která vás
                            v kulinářském světě proslaví. Podívejte se
                            pro inspiraci na několik originálních
                            chuťových kombinací.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.occasion')

    @include('partials.footer')

@endsection
