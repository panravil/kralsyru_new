@extends('master')
@section('title', 'Král sýrů')

@section('content')


    <section class="matching-header bcg-blue">

        <div class="container-960">

            <div class="crown"></div>
            <h1 class="h2-white">KONTAKT</h1>

        </div>
    </section>

    <section class="content matching-content">
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
            <div class="content-wrapper group">

                <div class="content-wrapper-items group">
                    <div class="content-wrapper-item left">
                        <h2>INFOLINKA</h2>
                        <p>
                            info@savencia-fd.info<br>
                            800 800 028
                        </p>

                        <h2>SÍDLO</h2>
                        <p>
                            <span class="gold">Savencia Fromage & Dairy</span>
                            <span class="gold">Czech Republic, a. s.</span>
                            Vyskočilova 1481/4, <br />
				            Michle, Praha 4<br><br>
                            IČO: 44965117<br>
                            DIČ: CZ44965117
                
                            
                        </p>

                        <h2>SLEDUJTE NÁS</h2>

                        <a href="https://www.facebook.com/Kralsyru" target="_blank" class="icon icon--fb"></a>
                        <a href="https://www.instagram.com/kral_hermelinu/" target="_blank" class="icon icon--instagram"></a>
                    </div>
                    <div class="content-wrapper-item right">
                        <h2>NAPIŠTE NÁM</h2>

                        <div class="contact-form-wrapper">
                            <form id="form" method="post" accept-charset="utf-8" action="/kontakt">
                                {!! csrf_field() !!}
                                <div class="form-group">

                                    <input name="name" class="form-control" data-validation="length" placeholder="Jméno a příjmení"
                                           data-validation-length="min1" type="text" id="name"
                                           data-validation-error-msg="Tato položka je povinná" data-validation-allowing=" ">
                                </div>
                                <div class="form-group">

                                    <input name="email" class="form-control" data-validation="email" type="email" id="email" data-validation-error-msg="E-mail je nesprávný" placeholder="E-mail">
                                </div>
                                <div class="form-group">

                                    <textarea name="message" class="form-control" cols="30" rows="8" id="text" data-validation="length" data-validation-length="min1" type="text" id="name" data-validation-error-msg="Tato položka je povinná" placeholder="Zpráva. V případě reklamace, uveďte prosím název výrobku, šarži a datum spotřeby."></textarea>
                                </div>

                                <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
                                    <label class="col-md-4 control-label">Captcha</label>
                                    <div class="col-md-12">
                                        {!! app('captcha')->display() !!}
                                        @if ($errors->has('g-recaptcha-response'))
                                            <span class="help-block form-error">
                                                <span>{{ $errors->first('g-recaptcha-response') }}</span>
                                                {{-- <span>g-recaptcha-response error msg</span> --}}
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <input class="btn-write-us" type="submit" value="Odeslat">
                                </div>
                            </form>

                            <div class="form-success">
                                <h3>Zpráva byla odeslána. Děkujeme.</h3>
                            </div>

                            <div id="pageloader">
                                <img src="http://cdnjs.cloudflare.com/ajax/libs/semantic-ui/0.16.1/images/loader-large.gif" alt="processing..." />
                             </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>

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

    <section class="contact-footer bcg-blue">
        <div class="container-960">
            <div class="copyright">© 2017 Savencia Fromage&nbsp;&&nbsp;Dairy<br /> Czech&nbsp;Republic, a.s.</div>
        </div>
    </section>
 @endsection
