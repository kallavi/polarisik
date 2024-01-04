@extends('layout.layout')

@section('title')
    @if(request()->segment('1') == 'tr')
        Medya
    @else
        Media
    @endif
@endsection
@section('title2')
    {{ $photo->name }}
@endsection
@section('content')
<div class="row g-4 cards type2 big mt-1 pt-lg-3 pt-1 px-3 px-xxxl-0">
    @include('include.photo-album')
@endsection
