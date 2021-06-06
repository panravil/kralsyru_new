
    <div id="select" class="select">
        <div class="select-wrapper">
            <div class="select-text">
                Vyberte náš
                                <span>
                                    <a class="select-href select-href-cheeses" href>SÝR</a>
                                    <span class="select-popup select-cheese-wrapper">
                                        <span class="triangel"></span>
                                        <span class="select-popup-fade"></span>
                                        <span class="close"></span>
                                        <span class="select-popup-inner scrollbar-inner">
                                            @foreach( $cheeses as $cheese )
                                                <span class="select-popup-item">
                                                    <a href="/parovani-syry/{{ $cheese->link }}">
                                                        <ul class="clearfix">
                                                            <li>
                                                                <img src="{{ Voyager::image($cheese->img) }}" alt="">
                                                            </li>
                                                            @if( $cheese->id == 7 || $cheese->id == 9 || $cheese->id == 14)
                                                            <li><span>Král Sýrů {{ $cheese->title }}</span></li>
                                                            @else
                                                            <li><span>Hermelín {{ $cheese->title }}</span></li>
                                                            @endif
                                                        </ul>
                                                    </a>
                                                </span>
                                            @endforeach
                                        </span>
                                    </span>
                                </span>

                nebo odrůdu

                                <span>
                                    <a class="select-href select-href-wines" href>VÍNA</a>
                                    <span class="select-popup select-wines-wrapper">
                                        <span class="triangel"></span>
                                        <span class="select-popup-fade"></span>
                                        <span class="close"></span>
                                        <span class="select-popup-inner scrollbar-inner">
                                            @foreach( $wines as $wine )
                                                <span class="select-popup-item">
                                                    <a href="/parovani-vina/{{ $wine->link }}">
                                                        <ul class="clearfix">
                                                            <li><img src="{{ Voyager::image($wine->img) }}" alt=""></li>
                                                            <li><span> {{ $wine->title }}</span></li>
                                                        </ul>
                                                    </a>
                                                </span>
                                            @endforeach
                                        </span>
                                    </span>
                                </span>
            </div>
        </div>
    </div>
