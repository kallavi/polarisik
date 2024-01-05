@foreach ($references as $referans)
    <div class="pb-2 pb-md-0">
        <a
        @if ($referans->slug)
            href="{{ $referans->slug }}"
        @endif
        class="text-center pt-lg-2">
            <img class="img-fluid" src="/{{ $referans->image }}" alt="{{ $referans->name }}">
        </a>
    </div>
@endforeach