@extends('master')
@section('title', 'Král sýrů')

@section('content')
    <div id="overlayPopup"></div>
    <section class="header" style="background-image: url('{{$cover->cover}}');">

        <div class="header__image-wrapper">
            <div class="crown"></div>
            <div class="container-960">
                <h1>
                    PÁROVÁNÍ SÝRŮ A VÍN
                </h1>

                <p class="header__text">Sýry a vína k sobě odedávna patří a jejich vhodné párování přináší nezapomenutelný zážitek</p>

                @include('partials.select')
            </div>
        </div>

    </section>

    @include('partials.occasion')

    @include('partials.footer')

@endsection
