<nav class="navbar navbar-expand-lg">
    <div class="container-fluid px-0">
        <a class="navbar-brand col-lg-2 pe-lg-4" href="/{{ request()->segment(1) }}">
            <img height="60px" class="w-100" src="{{asset($data['setting']['logo']) }}" alt="{{ $data['setting']['name'] }}">
            <img height="60px" class="w-100 d-none" src="{{asset($data['setting']['dark_logo']) }}" alt="{{ $data['setting']['name'] }}">
        </a>
        <ul class="ps-3 navbar-nav me-auto mb-2 mb-lg-0 d-none d-lg-flex">
            @foreach ($data['menu']->where('parent', 1)->where('child', null) as $menu_item)
                <li class="nav-item">
                    <a class="{{ request()->segment(2) == $menu_item->slug ? 'active' : '' }} nav-link" href="/{{ request()->segment(1) }}/{{ $menu_item->slug }}">
                        {{ $menu_item->name }}
                    </a>
                </li>
            @endforeach
        </ul>
        
        <div class="hstack d-none d-lg-flex">
            <div class="socialMedia pe-xxl-5 pe-3 me-2 hstack">
                @if ($data['setting']['instagram'])
                    <a href="$data['setting']['instagram']" target="_blank"><span class="fs-5 icon-instagram"></span></a>
                @endif
                @if ($data['setting']['twitter'])
                    <a href="$data['setting']['twitter']" target="_blank"><span class="fs-5 icon-twitter"></span></a>
                @endif
                @if ($data['setting']['linkedin'])
                    <a href="$data['setting']['linkedin']" target="_blank"><span class="fs-5 icon-linkedin"></span></a>
                @endif
                @if ($data['setting']['facebook'])
                    <a href="$data['setting']['facebook']" target="_blank"><span class="fs-5 icon-facebook"></span></a>
                @endif
                @if ($data['setting']['youtube'])
                    <a href="$data['setting']['youtube']" target="_blank"><span class="fs-5 icon-youtube"></span></a>
                @endif
            </div>
            @hasSection('mainContent')
                <a href="/{{ request()->segment(1) }}/bize-katil" class="btn btn-light text-primary rounded-pill d-flex align-items-center justify-content-center">
                    @if (request()->segment(1) == 'tr')
                        Bize Katılın
                    @else
                        Join Us
                    @endif
                </a>
            @else
                <a href="/{{ request()->segment(1) }}/bize-katil" class="btn btn-primary rounded-pill d-flex align-items-center justify-content-center">
                    @if (request()->segment(1) == 'tr')
                        Bize Katılın
                    @else
                        Join Us
                    @endif
                </a>
            @endif
        </div>
    </div>
</nav>