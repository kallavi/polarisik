@foreach($cardsData as $card)
    <div class="col-md-4 col-sm-6 col-11">
        <a class="card border-0 p-0" href="{{ $card['url'] }}">
            <div class="card-top text-bg-light position-relative">
                <img src="{{ asset($card['image']) }}" class="card-img" alt="...">
                <div class="card-img-overlay h-100 d-flex align-items-center justify-content-center">
                    <span class="icon-plus"></span>
                </div>
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $card['title'] }}</h5>
            </div>
        </a>
    </div>
@endforeach
