<div id="burgerBtn"  class="{{ request()->routeIs('home') ? '' : 'primaryBtn' }}"></div>
<div id="mobileMenu" class="d-lg-none">
    <div class="menuColumn">
        <ul class="navbar-nav">
        
                    @if (request()->segment(1) == 'tr')
                        @php
                        $hizmet = 'hizmetlerimiz';
                        @endphp
                    @else
                        @php
                        $hizmet = 'services';
                        @endphp
                    @endif
            @foreach ($data['menu']->where('parent', 1)->where('child', null) as $menu_item)
                @if ($menu_item->slug == 'hizmetlerimiz' || $menu_item->slug == 'services')
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle {{ request()->segment(2) == $menu_item->slug ? 'active' : '' }} nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ $menu_item->name }}
                        </a>
                        <ul class="dropdown-menu">
                            @foreach ($data['service'] as $service_item)
                                <li><a class="dropdown-item" href="/{{ request()->segment(1) }}/{{ $hizmet }}/{{ $service_item['slug'] }}">{{ $service_item['name'] }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="{{ request()->segment(2) == $menu_item->slug ? 'active' : '' }} nav-link" href="/{{ request()->segment(1) }}/{{ $menu_item->slug }}">
                            {{ $menu_item->name }}
                        </a>
                    </li>
                @endif
            @endforeach
            <li class="nav-item pt-4">
                    @if (request()->segment(1) == 'tr')
                        @php
                        $join = 'bize-katil';
                        @endphp
                    @else
                        @php
                        $join = 'join-us';
                        @endphp
                    @endif
                <a class="btn bg-white text-primary rounded-pill px-5 ps-2 fw-semibold rounded-start-0" href="/{{ request()->segment(1) }}/{{ $join }}">
                    @if (request()->segment(1) == 'tr')
                        Bize Katılın
                    @else
                        Join Us
                    @endif
                </a>
            </li>
        </ul>
    </div>
    <div class="menuBottom">
        @if (request()->segment(1) == 'tr')
            <a href="/en" class="language nav-link">ENGLISH</a>
        @else
            <a href="/tr" class="language nav-link">TÜRKÇE</a>
        @endif
        <div class="socialMedia hstack">
                @if ($data['setting']['instagram'])
                    <a href="https://www.instagram.com/{{ $data['setting']['instagram'] }}" target="_blank"><span class="fs-5 icon-instagram"></span></a>
                @endif
                @if ($data['setting']['twitter'])
                    <a href="https://www.twitter.com/{{ $data['setting']['twitter'] }}" target="_blank"><span class="fs-5 icon-twitter"></span></a>
                @endif
                @if ($data['setting']['linkedin'])
                    <a href="https://www.linkedin.com/company/{{ $data['setting']['linkedin'] }}" target="_blank"><span class="fs-5 icon-linkedin"></span></a>
                @endif
                @if ($data['setting']['facebook'])
                    <a href="https://www.facebook.com/{{ $data['setting']['facebook'] }}" target="_blank"><span class="fs-5 icon-facebook"></span></a>
                @endif
                @if ($data['setting']['youtube'])
                    <a href="https://www.youtube.com/{{ $data['setting']['youtube'] }}" target="_blank"><span class="fs-5 icon-youtube"></span></a>
                @endif
        </div>
    </div>
</div>