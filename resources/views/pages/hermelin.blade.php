@extends('master')
@section('title', 'Král sýrů - HERMELÍN®')

@section('content')
    <div id="overlayPopup"></div>
    <section class="header">

        <div class="header__image-wrapper">
            <div class="crown"></div>
            <div class="container-960">
                <h1>
                    <span class="gold">Hermelín®</span><br />
                    je Král Sýrů
                </h1>
            </div>
        </div>
    </section>

    <section class="content hermelin">
    
    
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

            <p class="text gold mb-50" style="font-family: proxima;">
            	Mnoho lidí nazývá hermelínem vše, co je kulaté, pokryté bílou plísní, a zabalené 
            	do stříbrného obalu. Jenže skutečnost je jiná. A my vám teď prozradíme pravdu.
            </p>
            
            <div class="content-wrapper group">

				<img src="{{ asset('/images/hermelin/img-1.png') }}" alt="" />
				
				<div class="crown"></div>
				
				<h2>Co je tedy pravý<br /> hermelín?</h2>
				
				<p>
					Hermelín je jedinečný krémový sýr, který u nás vzniká díky dlouhodobým znalostem 
					a zkušenostem. Má unikátní recepturu, o kterou pečujeme již od roku 1923. 
					Zraje přesně danou dobu a jeho plíseň se vyvíjí ve velmi specifických podmínkách. 
					Hermelín, to je zkrátka učiněná věda, ale výsledek stojí zato.
				</p>

				<div class="crown"></div>
				
				<h2>Jak tedy poznáte<br /> pravý hermelín?</h2>
				
				<p>
					Jednoduše, má to napsáno na krabičce. Název hermelín je totiž pod ochrannou známkou, 
					abyste snadno rozeznali, zda kupujete opravdu kvalitní sýr. Aktuálně může toto označení 
					používat jenom Král Sýrů a <a class="gold" href="http://www.sedlcansky.cz/" target="_blank">Sedlčanský</a> 
				</p>
				
				<img src="{{ asset('/images/hermelin/img-2.png') }}" alt="" />
				
				<div class="crown"></div>
				
				<h2>
					Ideální pro<br />
					kombinace chutí
				</h2>
				
				<p>
					Na povrchu je hermelín pevný, po rozkrojení ovšem zjistíte, že uvnitř je pružný, 
					ale neroztéká se. Teď už stačí jen přivonět a ochutnat. Ucítíte lahodné aroma s jemným 
					nádechem čerstvých žampionů. Navíc charakteristická chuť hermelínu napomáhá ostatním 
					chutím vyniknout a podtrhává jejich výjimečnost. Právě proto je Král Sýrů ideální 
					k objevování nových kombinací a gurmánských zážitků.
				</p>
				
                <img src="{{ asset('/images/hermelin/img-3.jpg') }}" alt="" />
                
            </div>
        </div>
    </section>

    @include('partials.occasion')

    @include('partials.footer')

@endsection
