@foreach($photos as $card)
    <div class="col-md-4 col-sm-6 col-11">
        <a class="card border-0 p-0" href="/{{ request()->segment(1) }}/{{ request()->segment(2) }}/{!! $card->slug !!}">
            <div class="card-top text-bg-light position-relative">
                <img src="{{ asset($card->image) }}" class="card-img" alt="{!! $card->name !!}">
                <div class="card-img-overlay h-100 d-flex align-items-center justify-content-center">
                    <span class="icon-plus"></span>
                </div>
            </div>
            <div class="card-body">
                <h5 class="card-title">{!! $card->name !!}</h5>
            </div>
        </a>
    </div>
@endforeach
