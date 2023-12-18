@foreach($photo->gallery as $album)
    <div class="col-md-4 col-sm-6 col-12">
        <a class="card border-0 p-0 pb-3" href="/{{ $album->slug }}" data-fancybox="photoGallery">
            <div class="card-top text-bg-light position-relative">
                <img src="/{{ $album->slug }}" class="card-img" alt="...">
                <div class="card-img-overlay h-100 d-flex align-items-center justify-content-center">
                    <span class="icon-plus"></span>
                </div>
            </div>
        </a>
    </div>
@endforeach