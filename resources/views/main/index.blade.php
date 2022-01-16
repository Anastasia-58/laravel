@extends('layouts/index')
@section('title')
    Главная
@endsection

@section('nav')
    <nav class="nav d-flex justify-content-between">
        123
        {{$keys = array_keys($news)}}
        @dump($keys)
        @foreach($keys as $key)
        <a class="p-2 link-secondary" href="{{route('news.index',['category'=>$key])}}">{{$news[$key]['name']}}</a>
        @endforeach

    </nav>
@endsection
