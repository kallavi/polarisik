@extends('layout.layout')

@section('title2')
{{ $albumTitle }}
@endsection
@section('content')
<div class="row g-4 cards type2 big mt-1 pt-lg-3 pt-1 px-3 px-xxxl-0">
    @include('include.photo-album')
    {{-- <div class="col-md-4 col-sm-6 col-12">
        <a class="card border-0 p-0 pb-3" href="{{asset('assets/front/images/media/photos/image4.jpg') }}" data-fancybox="photoGallery">
            <div class="card-top text-bg-light position-relative">
                <img src="{{asset('assets/front/images/media/photos/image4.jpg') }}" class="card-img" alt="...">
                <div class="card-img-overlay h-100 d-flex align-items-center justify-content-center">
                    <span class="icon-plus"></span>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-4 col-sm-6 col-12">
        <a class="card border-0 p-0 pb-3" href="{{asset('assets/front/images/media/photos/image5.jpg') }}" data-fancybox="photoGallery">
            <div class="card-top text-bg-light position-relative">
                <img src="{{asset('assets/front/images/media/photos/image2.jpg') }}" class="card-img" alt="...">
                <div class="card-img-overlay h-100 d-flex align-items-center justify-content-center">
                    <span class="icon-plus"></span>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-4 col-sm-6 col-12">
        <a class="card border-0 p-0 pb-3" href="{{asset('assets/front/images/media/photos/image3.jpg') }}" data-fancybox="photoGallery">
            <div class="card-top text-bg-light position-relative">
                <img src="{{asset('assets/front/images/media/photos/image5.jpg') }}" class="card-img" alt="...">
                <div class="card-img-overlay h-100 d-flex align-items-center justify-content-center">
                    <span class="icon-plus"></span>
                </div>
            </div>
        </a>
    </div>
     <div class="col-md-4 col-sm-6 col-12">
        <a class="card border-0 p-0 pb-3" href="{{asset('assets/front/images/media/photos/image6.jpg') }}" data-fancybox="photoGallery">
            <div class="card-top text-bg-light position-relative">
                <img src="{{asset('assets/front/images/media/photos/image6.jpg') }}" class="card-img" alt="...">
                <div class="card-img-overlay h-100 d-flex align-items-center justify-content-center">
                    <span class="icon-plus"></span>
                </div>
            </div>
        </a>
    </div>
     <div class="col-md-4 col-sm-6 col-12">
        <a class="card border-0 p-0 pb-3" href="{{asset('assets/front/images/media/photos/image7.jpg') }}" data-fancybox="photoGallery">
            <div class="card-top text-bg-light position-relative">
                <img src="{{asset('assets/front/images/media/photos/image7.jpg') }}" class="card-img" alt="...">
                <div class="card-img-overlay h-100 d-flex align-items-center justify-content-center">
                    <span class="icon-plus"></span>
                </div>
            </div>
        </a>
    </div>
     <div class="col-md-4 col-sm-6 col-12">
        <a class="card border-0 p-0 pb-3" href="{{asset('assets/front/images/media/photos/image7.jpg') }}" data-fancybox="photoGallery">
            <div class="card-top text-bg-light position-relative">
                <img src="{{asset('assets/front/images/media/photos/image7.jpg') }}" class="card-img" alt="...">
                <div class="card-img-overlay h-100 d-flex align-items-center justify-content-center">
                    <span class="icon-plus"></span>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-4 col-sm-6 col-12">
        <a class="card border-0 p-0 pb-3" href="{{asset('assets/front/images/media/photos/image4.jpg') }}" data-fancybox="photoGallery">
            <div class="card-top text-bg-light position-relative">
                <img src="{{asset('assets/front/images/media/photos/image4.jpg') }}" class="card-img" alt="...">
                <div class="card-img-overlay h-100 d-flex align-items-center justify-content-center">
                    <span class="icon-plus"></span>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-4 col-sm-6 col-12">
        <a class="card border-0 p-0 pb-3" href="{{asset('assets/front/images/media/photos/image5.jpg') }}" data-fancybox="photoGallery">
            <div class="card-top text-bg-light position-relative">
                <img src="{{asset('assets/front/images/media/photos/image2.jpg') }}" class="card-img" alt="...">
                <div class="card-img-overlay h-100 d-flex align-items-center justify-content-center">
                    <span class="icon-plus"></span>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-4 col-sm-6 col-12">
        <a class="card border-0 p-0 pb-3" href="{{asset('assets/front/images/media/photos/image3.jpg') }}" data-fancybox="photoGallery">
            <div class="card-top text-bg-light position-relative">
                <img src="{{asset('assets/front/images/media/photos/image5.jpg') }}" class="card-img" alt="...">
                <div class="card-img-overlay h-100 d-flex align-items-center justify-content-center">
                    <span class="icon-plus"></span>
                </div>
            </div>
        </a>
    </div>
     <div class="col-md-4 col-sm-6 col-12">
        <a class="card border-0 p-0 pb-3" href="{{asset('assets/front/images/media/photos/image6.jpg') }}" data-fancybox="photoGallery">
            <div class="card-top text-bg-light position-relative">
                <img src="{{asset('assets/front/images/media/photos/image6.jpg') }}" class="card-img" alt="...">
                <div class="card-img-overlay h-100 d-flex align-items-center justify-content-center">
                    <span class="icon-plus"></span>
                </div>
            </div>
        </a>
    </div>
     <div class="col-md-4 col-sm-6 col-12">
        <a class="card border-0 p-0 pb-3" href="{{asset('assets/front/images/media/photos/image7.jpg') }}" data-fancybox="photoGallery">
            <div class="card-top text-bg-light position-relative">
                <img src="{{asset('assets/front/images/media/photos/image7.jpg') }}" class="card-img" alt="...">
                <div class="card-img-overlay h-100 d-flex align-items-center justify-content-center">
                    <span class="icon-plus"></span>
                </div>
            </div>
        </a>
    </div>
     <div class="col-md-4 col-sm-6 col-12">
        <a class="card border-0 p-0 pb-3" href="{{asset('assets/front/images/media/photos/image7.jpg') }}" data-fancybox="photoGallery">
            <div class="card-top text-bg-light position-relative">
                <img src="{{asset('assets/front/images/media/photos/image7.jpg') }}" class="card-img" alt="...">
                <div class="card-img-overlay h-100 d-flex align-items-center justify-content-center">
                    <span class="icon-plus"></span>
                </div>
            </div>
        </a>
    </div>
</div> --}}
@endsection
