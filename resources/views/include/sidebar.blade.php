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
        @if (!is_null($previousPageSlug))
            <a class="prevPage" href="{{ url('hizmetlerimiz/' . $previousPageSlug) }}"><span
                    class="icon-right-arrow text-primary"></span></a>
        @endif
        <h3>@yield('subTitle')</h3>
        @if (!is_null($nextPageSlug))
            <a class="nextPage {{ is_null($nextPageSlug) ? 'disabled' : '' }}"
                href="{{ url('hizmetlerimiz/' . $nextPageSlug) }}">
                <span class="icon-right-arrow text-primary"></span>
            </a>
        @endif
    </div>
    <div class="leftMenuList pt-3 d-lg-inline-block d-none ps-4 ps-xxxl-3">
        
        @if (request()->segment(1) == 'hizmetlerimiz')
            @foreach ($services as $service_item)
                <a class="{!! request()->routeIs('hizmetlerimiz.' . $service_item->{'slug:tr'}) ? 'active' : '' !!}"
                    href="/hizmetlerimiz/{!! $service_item->{'slug:tr'} !!}">
                    <span>{!! $service_item->{'name:tr'} !!}</span>
                </a>
            @endforeach
        @endif
    </div>
</div>
