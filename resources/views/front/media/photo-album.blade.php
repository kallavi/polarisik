@extends('layout.layout')

@section('title2')
    {{ $albumTitle }}
@endsection
@section('content')
<div class="row g-4 cards type2 big mt-1 pt-lg-3 pt-1 px-3 px-xxxl-0">
    @include('include.photo-album')
</div>
@endsection
