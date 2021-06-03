@extends('voyager::master')
@section('page_header')
    <h1 class="page-title">
        Naše sýry - řazení výpisu sýrů
    </h1>
@stop

@section('content')
<style>
    .clear{ clear: both; }
    .page-content{ margin: 0 0 0 60px; }
    .page-content input[type=submit]{ background: #27A243; color: #FFF; border: 0; border-radius: 3px; padding: 5px; margin: 20px 0 0 135px; }
    h2{ font-size: 1.5em; margin: 60px 0 20px 0; }
    .field{ margin: 0 0 10px 0; }
    .field .name{ width: 220px; font-size: 1.4em; float: left; }
    .field .value{ float: left; }
    .field .value select{ height: 32px; }
</style>


<div class="page-content container-fluid">

    @if(session('success'))
        <div class="alert alert-success mb-2">
            {!!session('success')!!}
        </div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger mb-2">
            {!!session('error')!!}
        </div>
    @endif


    <p>Sýry jsou vypisovány dle váhy. Např. 1 -> 2 -> 3 -> 12 -> 17... . V číselné řadě mohou být "díry". Stejné číslo se ovšem nesmí vyskytovat u více sýrů. Výsledek: <a href="https://kralsyru.cz/nase-syry" target="_blank">https://kralsyru.cz/nase-syry</a></p>

    <h2>Zadejte žádané pořadí výpisu sýrů</h2>


    <form method="POST" action="{{action('CustomVoyagerController@saveOurCheese')}}">
        {{ csrf_field() }}

        @forelse ($cheeses as $cheese)
            <div class="field">
                <div class="name">{{$cheese->title}}</div>
                <div class="value">
                    <select name="select_{{$loop->iteration}}">
                        @for ($i = 0; $i < 51; $i++)
                            <option value="{{$i}}" {{$i == $cheese->ordering ? 'selected' : ''}}>{{$i}}</option>
                        @endfor
                    </select>
                    <input type="hidden" name="id_{{$loop->iteration}}" value="{{$cheese->id}}">
                </div>
                <div class="clear"></div>
            </div>
        @empty
        @endforelse

        <input type="submit" value="uložit nové pořadí">

    </form>

</div>
@stop
