@extends('master')
@section('title', 'Král Sýrů')

@section('content')
    <div id="overlayPopup"></div>
    <section class="header">

        <div class="header__image-wrapper">
            <div class="crown"></div>
            <h1>
                JAK CHUTNÁ<br> LÁSKA?
            </h1>
        </div>

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

            <p class="text gold" style="font-family: 'proxima', Arial, sans-serif; max-width: 500px;">Seznamte se s chutí nejjemnějšího citu, který se časem mění a zraje.</p>

            <p class="text">Podívejte se na speciální kombinace s Králem Sýrů Nebeským od našich foodbloggerek. Kterou vyzkoušíte jako první?</p>
            <div class="crown"></div>

            <h2>SLADKÁ CHUŤ LÁSKY</h2>

            <img src="{{ asset('images/love-taste/img-01.jpg') }}" alt="">

            <p>
                Čeká vás oslava výročí nebo chcete jen tak, z lásky, překvapit
                svou polovičku? Pak dejte na sladkou kombinaci polosladkého Ryzlinku,
                Krále sýrů Nebeského a karamelizovaných pomerančů.
            </p>

            <div id="sladka" class="combination-wrapper">
                <div class="combination-box">
                    <h3 class="combination-heading">Karamelizované pomeranče</h3>
                    <div class="combination-items group">
                        <div class="combination-item">
                            <h4 class="combination-item-wine">INGREDIENCE</h4>
                            <ul>
                                <li>100 ml vody</li>
                                <li>2 chemicky neošetřené pomeranče</li>
                                <li>1 – 2 cm zázvoru</li>
                                <li>1/2 sáčku želatiny</li>
                                <li>vlašské ořechy</li>
                            </ul>
                        </div>

                        <div class="combination-item">
                            <h4 class="combination-item-deli">PŘÍPRAVA</h4>
                            <p>
                                Pomeranče omyjte a pomocí škrabky z nich oloupejte kůru. Nakrájejte ji na tenké proužky.
                                Kůru na konci použijete při zdobení.
                            </p>
                            <p>
                                Pomeranče nakrájejte na tenké plátky, položte na pánev a nechte je zkaramelizovat na mírném ohni.
                            </p>
                            <p>
                                Poté je pokapejte medem a dozdobte kousky vlašských ořechů a pomerančovou kůrou. Nejlépe si je užijete s Králem sýrů Nebeským.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="crown"></div>

            <h2>SVĚŽÍ CHUŤ LÁSKY</h2>
            <img src="{{ asset('images/love-taste/img-02.jpg') }}" alt="">
            <p>
                Co může být hezčí, než když jste čerstvě zamilovaní? Vyjádřete svou lásku pomocí svěží kombinace mangového salátku, Krále&nbsp;sýrů Nebeského a bíleho šumivého Prosecca!
            </p>

            <div id="svezi" class="combination-wrapper">
                <div class="combination-box">
                    <h3 class="combination-heading">MANGOVÝ SALÁTEK</h3>
                    <div class="combination-items group">
                        <div class="combination-item">
                            <h4 class="combination-item-wine">INGREDIENCE</h4>
                            <ul>
                                <li>1 zralé mango</li>
                                <li>1 šalotka nebo malá červená cibule</li>
                                <li>1 lžička javorového sirupu (můžete nahradit třtinovým cukrem)</li>
                                <li>šťáva z 1/2 limetky</li>
                                <li>sůl</li>
                                <li>pepř</li>
                                <li>zrnka granátového jablka na ozdobení</li>
                            </ul>
                        </div>

                        <div class="combination-item">
                            <h4 class="combination-item-deli">PŘÍPRAVA</h4>
                            <p>
                                Mango nakrájejte na drobné kostičky, zakápněte je šťávou z limetky a javorovým sirupem. Vše dobře promíchejte.
                            </p>
                            <p>
                                Šalotku nakrájejte co nejvíc nadrobno a přidejte k mangu. Nakonec směs osolte a opepřete dle chuti a důkladně promíchejte.
                            </p>
                            <p>
                                Na závěr ozdobte lístky čerstvé máty a zrnky granátového jablka. Salátek chutná skvěle s Králem sýrů Nebeský.
                            </p>
                        </div>

                    </div>
                </div>
            </div>

            <div class="crown"></div>

            <h2>OSTRÁ CHUŤ LÁSKY</h2>
            <img src="{{ asset('images/love-taste/img-03.jpg') }}" alt="">
            <p>
                Oslavte svou temperamentní lásku odvážnou kombinací chutí: chilli čatní zjemněné kouskami jahod. Chutná skvěle s Rulandským modrým a Králem sýrů Nebeským.
            </p>

            <div id="ostra" class="combination-wrapper">
                <div class="combination-box">
                    <h3 class="combination-heading">Pikantní jahodové čatní</h3>
                    <div class="combination-items group">
                        <div class="combination-item">
                            <h4 class="combination-item-wine">INGREDIENCE</h4>
                            <ul>
                                <li>1/2 malé šalotky</li>
                                <li>1 lžíce slunečnicového oleje</li>
                                <li>2 cm najemno nakrájeného čerstvého zázvoru</li>
                                <li>1 chilli paprička</li>
                                <li>2 – 3 lžíce červeného vinného octa</li>
                                <li>2 lžíce hnědého cukru</li>
                                <li>snítka čerstvého rozmarýnu</li>
                                <li>cca 5 větších jahod</li>
                            </ul>
                        </div>

                        <div class="combination-item">
                            <h4 class="combination-item-deli">PŘÍPRAVA</h4>
                            <p>
                                V tlustostěnném menším hrnci krátce orestujte na oleji najemno nakrájenou šalotku. Až šalotka zesklovatí, přidejte nakrájenou chilli papričku, zázvor a vinný ocet.
                            </p>
                            <p>
                                Nezakryté vařte pár minut. Po chvíli přidejte cukr, nasekaný rozmarýn a jahody. Jahody pustí šťávu, ve které se cukr zcela rozpustí.
                            </p>
                            <p>
                                Čatní nechte vychladnout a podávejte ke Králi sýrů Nebeský.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="crown"></div>

            <p>Ve všech sestavách jsme použili speciální edici <br> Král Sýrů Nebeský - Májová edice.</p>

            <a style="color: #9a8847;" href="/nase-syry/nebesky">
                <img class="cheese-nebesky" src="{{ asset('images/slider-hp/img-12.png') }}" alt="">

                <p class="small">Král Sýrů<br>Nebeský</p>
            </a>

        </div>
    </section>

    @include('partials.footer')
    @section('scripts')
    <script>
        if(window.location.hash) {
            navBarLogo.addClass('logo-up');
            navBar.removeClass('nav-down').addClass('nav-up');
        } else {
            setTimeout(function(){
                $('html,body').animate({scrollTop: 800},500);
            },1500);
        }

    </script>
    @endsection
@endsection
