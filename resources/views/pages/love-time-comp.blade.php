@extends('master')
@section('title', 'Král sýrů')

@section('content')
    <section class="content">
        <div class="soutez-wrapper">
            <header class="header-soutez">
                <a href="{{ url()->previous() }}" class="button-back">ZPĚT</a>
            </header>
            <h2>
                SOUTĚŽ
            </h2>
            <p><a target="_blank" href="{{ asset('vyherci-4.pdf') }}">Výherci</a></p>
            <p>
                s Králem Sýrů o <span class="gold">60 poukazů</span> v hodnotě <span class="gold">5 000 Kč do Klenoty Aurum.</span>
            </p>
            <img class="print" src="{{ asset('images/print.jpg') }}" alt="">

            <div class="crown"></div>

            <h2>PRAVIDLA</h2>
            <p>
                Kompletní pravidla soutěže <a target="_blank" href="{{ asset('pravidla.pdf') }}">ke stažení</a>.
            </p>
        </div>

    </section>

    @include('partials.footer')

@endsection