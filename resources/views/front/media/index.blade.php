@extends('layout.layout')

@section('title')
    @if(request()->segment('1') == 'tr')
        Medya
    @else
        Media
    @endif
@endsection
@section('content')
    <ul class="nav nav-pills mb-3 justify-content-center pt-3 pt-lg-0" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-photos-tab" data-bs-toggle="pill" data-bs-target="#pills-photos" type="button" role="tab" aria-controls="pills-photos" aria-selected="true">
                @if(request()->segment('1') == 'tr')
                    Fotoğraflar
                @else
                    Photos
                @endif
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-videos-tab" data-bs-toggle="pill" data-bs-target="#pills-videos" type="button" role="tab" aria-controls="pills-videos" aria-selected="false">
                @if(request()->segment('1') == 'tr')
                    Videolar
                @else
                    Videos
                @endif
            </button>
        </li>
    </ul>
    <div class="tab-content px-xxxl-3 px-lg-5 px-3" id="pills-tabContent">
        <div class="tab-pane fade show active pt-lg-4" id="pills-photos" role="tabpanel" aria-labelledby="pills-photos-tab" tabindex="0">
            <div class="row gx-4 cards type2 mt-0 pt-lg-4 pt-1 justify-content-center justify-content-sm-start">
                @include('include.medya-card')
            </div>
        </div>
        <div class="tab-pane fade pt-lg-4" id="pills-videos" role="tabpanel" aria-labelledby="pills-videos-tab" tabindex="0">
            <div class="row gx-4 cards type2 effect2 mt-0 pt-lg-4 pt-1 justify-content-center justify-content-sm-start">
                @include('include.video-card')
            </div>
        </div>
    </div>
@endsection
