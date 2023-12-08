<nav class="navbar navbar-expand-lg">
    <div class="container-fluid px-0">
        <a class="navbar-brand col-lg-2 pe-lg-4" href="index.html">
            <img height="60px" class="w-100" src="{{asset('assets/statics/logo-light.svg') }}" alt="">
            <img height="60px" class="w-100 d-none" src="{{asset('assets/statics/logo-dark.svg') }}" alt="">
        </a>
        <ul class="ps-3 navbar-nav me-auto mb-2 mb-lg-0 d-none d-lg-flex">
            <li class="nav-item">
                <a class="{{ request()->is('bizkimiz') ? 'active' : '' }} nav-link" href="{{ url('bizkimiz') }}">Biz Kimiz?</a>
            </li>
            <li class="nav-item">
                <a class="{{ str_starts_with(request()->path(), 'hizmetlerimiz') ? 'active' : '' }} nav-link" href="{{ url('hizmetlerimiz/festivaller-konserler') }}">Hizmetlerimiz</a>
            </li>
            <li class="nav-item">
                <a class="{{ request()->is('medya') ? 'active' : '' }} nav-link" href="{{ url('medya') }}">Medya</a>
            </li>
            <li class="nav-item">
                <a class="{{ request()->is('referanslar') ? 'active' : '' }} nav-link" href="{{ url('referanslar') }}">Referanslar</a>
            </li>
            <li class="nav-item">
                <a class="{{ request()->is('iletisim') ? 'active' : '' }} nav-link" href="{{ url('iletisim') }}">İletişim</a>
            </li>
        </ul>
        
        <div class="hstack d-none d-lg-flex">
            <div class="socialMedia pe-xxl-5 pe-3 me-2 hstack">
                <a href="javascript:;"><span class="fs-5 icon-instagram"></span></a>
                <a href="javascript:;"><span class="fs-5 icon-twitter"></span></a>
                <a href="https://www.linkedin.com/company/ikpolaris/?originalSubdomain=tr" target="_blank"><span class="fs-5 icon-linkedin"></span></a>
                <a href="javascript:;"><span class="fs-5 icon-facebook"></span></a>
                <a href="https://www.youtube.com/@PolarisInsanKaynaklar?si=crJb8efFssJ-hPcm" target="_blank"><span class="fs-5 icon-youtube"></span></a>
            </div>
            @hasSection('mainContent')
                <a href="bize-katilin.html" class="btn btn-light text-primary rounded-pill d-flex align-items-center justify-content-center">Bize Katılın</a>
            @else
                <a href="bize-katilin.html" class="btn btn-primary rounded-pill d-flex align-items-center justify-content-center">Bize Katılın</a>
            @endif
        </div>
    </div>
</nav>