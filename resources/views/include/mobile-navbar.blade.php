<div id="burgerBtn"  class="{{ request()->routeIs('home') ? '' : 'primaryBtn' }}"></div>
<div id="mobileMenu" class="d-lg-none">
    <div class="menuColumn">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('bizkimiz') }}">Biz Kimiz?</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Hizmetlerimiz
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ url('hizmetlerimiz/festivaller-konserler') }}">Festivaller ve Konserler</a></li>
                    <li><a class="dropdown-item" href="{{ url('hizmetlerimiz/kongre-toplantilar') }}">Kongre ve Toplantılar</a></li>
                    <li><a class="dropdown-item" href="{{ url('hizmetlerimiz/resmi-torenler') }}">Resmi Törenler ve Anma Programları</a></li>
                    <li><a class="dropdown-item" href="{{ url('hizmetlerimiz/tanitimlar-lansmanlar') }}">Tanıtım ve Lansmanlar</a></li>
                    <li><a class="dropdown-item" href="{{ url('hizmetlerimiz/fuar-stand') }}">Fuar ve Standlar</a></li>
                    <li><a class="dropdown-item" href="{{ url('hizmetlerimiz/vip') }}">Vip Karşılama ve Transfer</a></li>
                    <li><a class="dropdown-item" href="{{ url('hizmetlerimiz/lcv') }}">LCV, Sms ve Mailing Hizmetleri</a></li>
                    <li><a class="dropdown-item" href="{{ url('hizmetlerimiz') }}">Lorem ipsum dolor sit amet consectetur adipisicing elit...</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('medya') }}">Medya</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('referanslar') }}">Referanslar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('iletisim') }}">İletişim</a>
            </li>
            <li class="nav-item pt-4">
                <a class="btn bg-white text-primary rounded-pill px-5 ps-2 fw-semibold rounded-start-0" href="{{ url('bize-katil') }}">Bize Katıl</a>
            </li>
        </ul>
    </div>
    <div class="menuBottom">
        <a href="javascript:;" class="language nav-link">ENGLISH</a>
        <div class="socialMedia hstack">
            <a href="javascript:;"><span class="fs-6 icon-instagram"></span></a>
            <a href="javascript:;"><span class="fs-6 icon-twitter"></span></a>
            <a href="https://www.linkedin.com/company/ikpolaris/?originalSubdomain=tr" target="_blank"><span class="fs-6 icon-linkedin"></span></a>
            <a href="javascript:;"><span class="fs-6 icon-facebook"></span></a>
            <a href="https://www.youtube.com/@PolarisInsanKaynaklar?si=crJb8efFssJ-hPcm" target="_blank"><span class="fs-6 icon-youtube"></span></a>
        </div>
    </div>
</div>