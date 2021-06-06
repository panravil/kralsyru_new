@extends('master')
@section('title', 'Král Sýrů')

@section('content')


    <section class="matching-header bcg-blue">

        <div class="container-960">
            <a href="{{ url()->previous() }}" class="button-back">ZPĚT</a>
            <h1 class="h2-white">PÁROVÁNÍ SÝRŮ&nbsp;A&nbsp;VÍN</h1>


            <div class="select-wrapper">
                <p class="select-text">
                     {{ $wine->title }}
                </p>
            </div>

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
            <div class="matching-wrapper-content">
                <img class="" src="{{ Voyager::image($wine->img) }}" alt="">
                <h2>{{ $wine->title }}</h2>
                <p class="text">{{ $wine->text }}</p>
            </div>

            <div class="combination-wrapper">

                @foreach( $items as $key => $item )

                <div class="combination-box">
                    <h3 class="combination-heading">kombinace č.{{ $key + 1  }}</h3>
                    <div class="combination-items group">

                        <div class="combination-item">
                            <h4 class="combination-item-cheese">se sýrem</h4>
                            <a href="/nase-syry/{{ $item->link }}">
                                <img src="{{ $item->img }}" alt=""></a>                            
                        </div>

                        <div class="combination-item">
                            <h4 class="combination-item-deli">s delikatesami</h4>
                            <ul>
                                @if( $item->nuts != "" )
                                    <li>{{ $item->nuts }}</li>
                                @endif
                                @if( $item->fruit_fresh != "" )
                                    <li>{{ $item->fruit_fresh }}</li>
                                    @endif
                                @if( $item->fruit_dried != "" )
                                    <li>{{ $item->fruit_dried }}</li>
                                    @endif
                                @if( $item->vegetables != "" )
                                    <li>{{ $item->vegetables }}</li>
                                    @endif
                                @if( $item->marmelade != "" )
                                    <li>{{ $item->marmelade }}</li>
                                @endif


                            </ul>
                        </div>

                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </section>

    @include('partials.footer')
 @endsection