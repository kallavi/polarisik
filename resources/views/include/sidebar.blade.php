@php
    $pages = [
        'festivaller-konserler' => 'Festivaller ve Konserler',
        'kongre-toplantilar' => 'Kongre ve Toplantılar',
        'resmi-torenler' => 'Resmi Törenler ve Anma Programları',
        'tanitimlar-lansmanlar' => 'Tanıtım ve Lansmanlar',
        'fuar-stand' => 'Fuar ve Standlar',
        'vip' => 'Vip Karşılama ve Transfer',
        'lcv' => 'LCV, Sms ve Mailing Hizmetleri',
    ];

    $currentPageSlug = request()->segment(2); // Şu anki sayfanın slug'ını al
    $currentPageIndex = array_search($currentPageSlug, array_keys($pages));

    // Önceki ve sonraki sayfa slug'larını belirle
    $previousPageSlug = $currentPageIndex > 0 ? array_keys($pages)[$currentPageIndex - 1] : null;
    $nextPageSlug = $currentPageIndex < count($pages) - 1 ? array_keys($pages)[$currentPageIndex + 1] : null;
@endphp


<div class="leftMenu col-lg-4 col-xxl-3 col-12 pt-lg-2 px-0">
    <div
        class="mobileBlock d-flex d-lg-none justify-content-center justify-content-center pt-3 mt-1 px-0 position-relative">
        @if ($prev)
            <a class="prevPage" href="/{{ request()->segment(1) }}/{{ request()->segment(2) }}/{{ $prev->slug }}"><span
                    class="icon-right-arrow text-primary"></span></a>
        @endif
        <h3>@yield('subTitle')</h3>
        @if ($next)
            <a class="nextPage {{ is_null($next->slug) ? 'disabled' : '' }}"
                href="/{{ request()->segment(1) }}/{{ request()->segment(2) }}/{{ $next->slug }}">
                <span class="icon-right-arrow text-primary"></span>
            </a>
        @endif
    </div>
    <div class="leftMenuList pt-3 d-lg-flex d-none ps-4 ps-xxxl-3" style="flex-direction: column">
        @if (request()->segment(2) == 'hizmetlerimiz' || request()->segment(2) == 'services')
            @foreach ($services as $service_item)
                @if ($service_item->name)
                    <a class=""
                        href="/{{ request()->segment(1) }}/{{ request()->segment(2) }}/{{ $service_item->slug }}">
                        <span>{{ $service_item->name }}</span>
                    </a>
                @endif
            @endforeach
        @endif
    </div>
</div>
