@foreach ($references as $referans)
    <div class="pb-2 pb-md-0">
        <a
        @if ($referans['slug:tr'])
            href="{{ $referans['slug:tr'] }}"
        @endif
        class="text-center pt-2">
            <img class="img-fluid" src="{{$referans['image']}}" alt="{{$referans['name:tr']}}">
        </a>
    </div>
@endforeach