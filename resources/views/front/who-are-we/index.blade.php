@extends('layout.layout')

@section('title')
    {{ $menu->name }}
@endsection

@section('content')
    <div class="row m-0 p-0">
        <div class="col-xxl-8 col-lg-10 col-12 mx-auto mx-auto px-0">
            <div class="paragraph text-lg-center text-justify px-lg-5 px-xxxl-0 pt-lg-4 pt-3 px-3">
                @if ($page->status == 'published')
                    {!! $page->description !!}
                @else
                    İçerik bulunamadı.
                @endif
            </div>
        </div>
    </div>
@endsection
