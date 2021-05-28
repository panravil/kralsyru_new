@extends('voyager::master')
@section('page_header')
    <h1 class="page-title">
        Změnit fotografie balení
    </h1>
@stop

@section('content')
    
    <style>
        .clear{ clear: both; }
        .page-content{ margin: 0 0 0 60px; }
        .page-content input[type=submit]{ background: #27A243; color: #FFF; border: 0; border-radius: 3px; padding: 5px; }
        h2{ font-size: 1.5em; margin: 60px 0 20px 0; }
        .upload_field h3{ width: 200px; font-size: 1.0em; margin-top: 0; float: left; }
        .upload_field h4{ width: 200px; float: left; }
        .upload_field h5{ width: 200px; float: left; }
        .upload_field select{ height: 30px; }
        .gallery .img{ width: 220px; position: relative; float: left; margin: 0 10px 10px 0; border: 1px solid #DADADA; }
        .gallery .img img{ width: 220px; }
        .gallery .img .name{ position: absolute; top: 5px; left: 5px; color: #FFF; font-size: 0.9em; background: #000; padding: 3px 2px; border-radius: 2px; }
        .gallery .img .delete{ position: absolute; bottom: 5px; right: 5px; color: #FFF; font-size: 0.9em; background: #CC0000; padding: 3px 2px; border-radius: 2px; }
        .gallery .img .delete a{ color: #FFF; }
        .upload_field{}
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


        @php
            $last = '';
        @endphp
        @forelse ($packages as $item)
            <form action="{{action('CustomVoyagerController@changeBaleniPhotos')}}" method="POST" class="upload_field">
                {{ csrf_field() }}
                <h3>
                    @php
                        if($last != $item->cheese_id){
                            echo $item->cheeseId->title;
                            $last = $item->cheese_id;
                        }
                    @endphp
                </h3>
                <h5>{{$item->title}}</h5>
                    <select name="photo">
                            <option value="" {{$item->img == '' || $item->img == null ? 'selected' : ''}}></option>
                        @forelse ($availablePhotos as $photo)
                            <option value="{{$photo}}" {{substr($item->img, 18) == $photo ? 'selected' : ''}}>{{$photo}}</option>
                        @empty
                        @endforelse
                    </select>
                    <input type="hidden" name="id" value="{{$item->id}}">
                    <input type="submit" value="uložit změnu">
                    <div class="clear"></div>
            </form>
        @empty
        @endforelse


        <h2>Nahrát novou fotografii</h2>
        <form action="{{action('CustomVoyagerController@saveBaleniPhotos')}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="file" name="new_file">
            <input type="submit" value="nahrát novou fotografii">
        </form>

        <h2>Dostupné fotografie</h2>
        <div class="gallery">
                @include('voyager::alerts')
                @forelse ($availablePhotos as $item)
                    <div class="img">
                        <a href="/storage/packages/{{$item}}" target="_blank"><img src="/storage/packages/{{$item}}"></a>
                        <div class="name">{{$item}}</div>
                        <div class="delete"><a href="{{action('CustomVoyagerController@deleteBaleniPhotos')}}?file={{$item}}">smazat</a></div>
                    </div>
                    {!! $loop->iteration  % 5 != 0 ? '':'<div class="clear"></div>'!!}
                @empty
                @endforelse
                <div class="clear"></div>
        </div>

    </div>
@stop