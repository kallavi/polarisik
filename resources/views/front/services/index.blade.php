@extends('layout.layout')

@section('title')
    @if(request()->segment('1') == 'tr')
        Hizmetlerimiz
    @else
        Services
    @endif
@endsection
@section('subTitle')
    {!! $service->name !!}
@endsection

@section('content')
    <div class="row px-4 px-xxxl-0">
        @include('include.sidebar')
        <div class="contentBody col-lg-8 col-xxl-7 col-12 pt-lg-2 ps-lg-5 px-0">
            <div class="paragraph text-lg-start text-justify pt-lg-4 pt-3 ps-lg-5">
                @if ($service->image)
                    <img src="/{{ $service->image }}" alt="" style="width: 100%; height: auto;">
                @endif
                {!! $service->description !!}
            </div>
        </div>
    </div>
@endsection
