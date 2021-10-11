@extends('master')
@section('title', 'Král sýrů')

@section('content')

    <section  @if( $cheese->cover != '' ) class="header header-cheese-view" style="background: url('{{ Voyager::image($cheese->cover) }}') no-repeat center center; background-size: cover;"
             @else class="header bcg-blue bcg-none" style="height: 380px !important; background: #0b386b url(../images/pattern-bottom.svg); background-size: 100px auto;" @endif>


        <div class="header__image-wrapper">
            @if ($cheese->new_design)
                <div class="container-960">
                    <h1 class="headline" @if (!$cheese->subheadline) style="margin-top:60px;"                       
                    @endif>
                        {{ $cheese->headline }}
                    </h1>
                    
                    <h2 class="subheadline">
                        {{ $cheese->subheadline }}
                    </h2>
                </div>
            @else
                <div class="crown" @if( $cheese->cover == '' ) style="margin-top: 0" @endif ></div>
                <div class="container-960">
                    <h1 class="title">
                        {{ ($cheese->id <= 6 ? 'Hermelín' : 'Král Sýrů') }}<br>{{ $cheese->title }}
                    </h1>
                </div>
            @endif
              
        </div>

    </section>
    @if ($cheese->show_shops)
        <section class="shops">
            <h2>Kde koupit?</h2>
            <div class="shop-items container-960">
                <div class="item">
                    <a href="{{ $cheese->shop_1_link }}" target="_blank">
                        <img src="{{ Voyager::image($cheese->shop_1_logo) }}">
                        <p>{{ $cheese->shop_1_text }}</p>
                    </a>
                </div>
                <div class="item">
                    <a href="{{ $cheese->shop_2_link }}" target="_blank">
                        <img src="{{ Voyager::image($cheese->shop_2_logo) }}">
                        <p>{{ $cheese->shop_2_text }}</p>
                    </a>
                </div>
                <div class="item">
                    <a href="{{ $cheese->shop_3_link }}" target="_blank">
                        <img src="{{ Voyager::image($cheese->shop_3_logo) }}">
                        <p>{{ $cheese->shop_3_text }}</p>
                    </a>
                </div>
            </div>
        </section>
    @endif
    

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

            <p class="text gold" style="font-family: proxima;">{{ $cheese->text }}</p>

            <div class="content-wrapper group">

                <div class="content-wrapper-items group">
                    
                    @if( $cheese->id == 14 )
                    <div class="content-wrapper-item left">
                        <img src="{{ asset('/images/safir_ilu_s.png') }}" alt="">
                    </div>
                    @else
                    <div class="content-wrapper-item left">
                        <h2>Vyzrálost</h2>
                        <p>
                            <span class="gold">{{ $cheese->exp_high }}:</span>
                            {{ $cheese->high }}
                        </p>
                        @if( ! $cheese->exp_medium == '' )
                        <p>
                            <span class="gold">{{ $cheese->exp_medium }}:</span>
                            {{ $cheese->medium }}
                        </p>
                        @endif
                        <p>
                            <span class="gold">{{ $cheese->exp_low }}:</span>
                            {{ $cheese->low }}
                        </p>
                    </div>
                    @endif
                    <div class="content-wrapper-item right">
                        <h2>SLOŽENÍ</h2>

                        <p>{{ $cheese->structure }}</p>
                        <p class="gold">Průměrné výživové hodnoty ve 100 g výrobku:</p>
                        <ul class="structure">
                            <li class="group">
                                <span class="float-left">energie</span>
                                <span class="float-right">{{ $cheese->energy }}</span>
                            </li>
                            <li class="group">
                                <span class="float-left">bílkoviny</span>
                                <span class="float-right">{{ $cheese->proteins }}</span>
                            </li>
                            <li class="group">
                                <span class="float-left">sacharidy</span>
                                <span class="float-right">{{ $cheese->carbos }}</span>
                            </li>
                            <li class="group">
                                <span class="float-left">tuk</span>
                                <span class="float-right">{{ $cheese->fats }}</span>
                            </li>
                            @if($cheese->id == 14)
                            <li class="group">
                                <span class="float-left">sůl</span>
                                <span class="float-right">2,5 g</span>
                            </li>
                            @endif
                        </ul>

                    </div>
                    
                </div>

                <div class="crown"></div>
            </div>

            <h2>PÁROVÁNÍ</h2>

            <div class="combination-wrapper">

                @foreach( $items as $key => $item )

                <div class="combination-box">
                    <h3 class="combination-heading">kombinace č.{{ $key + 1  }}</h3>
                    <div class="combination-items group">

                        <div class="combination-item">
                            <h4 class="combination-item-wine">s vínem</h4>
                            <ul>
                                <li>{{ $item->wine_general }}</li>
                                <li>{{ $item->wine_special }}</li>
                            </ul>
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

    <section class="packing">
        <div class="container-960">

            @if($cheese->package->count() == 1)

                @forelse ($cheese->package as $package)
                    <div class="packing-wrapper-one">
                        <img src="{{ Voyager::image($package->img) }}" alt="">
                        <p>{{ $package->title }}</p>
                    </div>
                @empty
                @endforelse
                
            @else

                <div class="packing-wrapper group">
                    @forelse ($cheese->package as $package)
                        <div class="packing-wrapper-img">
                            <div class="packing-content">
                                <img src="{{ Voyager::image($package->img) }}" alt="">
                            </div>
                            <p>{{ $package->title }}</p>
                        </div>
                    @empty
                    @endforelse
                </div>

            @endif

        </div>
    </section>



    @include('partials.footer')
    @section('scripts')
    <script>
        $(document).on('click', '.shop-items .item a' , function() {
            console.log($(this).attr('href'));
            ga('send', 'event', {
                eventCategory: 'Outbound Link',
                eventAction: 'click',
                eventLabel: $(this).attr('href')
            });
        });

    </script>
    @endsection
 @endsection
