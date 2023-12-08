<div class="leftMenu col-lg-4 col-xxl-3 col-12 pt-lg-2 px-0">
    <div class="mobileBlock d-flex d-lg-none justify-content-center justify-content-center pt-3 mt-1 px-0 position-relative">
        <!-- <a class="prevPage disabled" role="button" aria-disabled="true"><span class="icon-right-arrow text-primary"></span></a> -->
        <h3>@yield('subTitle')</h3>
        <a class="nextPage" href="kongre-toplantilari.html"><span class="icon-right-arrow text-primary"></span></a>
    </div>
    <div class="leftMenuList pt-3 d-lg-inline-block d-none ps-4 ps-xxxl-3">
        <a class="{{ request()->routeIs('hizmetlerimiz/festivaller-konserler') ? 'active' : '' }}" href="{{ url('hizmetlerimiz/festivaller-konserler') }}"><span>Festivaller ve Konserler</span></a>
        <a class="{{ request()->routeIs('hizmetlerimiz/kongre-toplantilar') ? 'active' : '' }}" href="{{ url('hizmetlerimiz/kongre-toplantilar') }}"><span>Kongre ve Toplantılar</span></a>
        <a class="{{ request()->routeIs('hizmetlerimiz/resmi-torenler') ? 'active' : '' }}" href="{{ url('hizmetlerimiz/resmi-torenler') }}"><span>Resmi Törenler ve Anma Programları</span></a>
        <a class="{{ request()->routeIs('hizmetlerimiz/tanitimlar-lansmanlar') ? 'active' : '' }}" href="{{ url('hizmetlerimiz/tanitimlar-lansmanlar') }}"><span>Tanıtım ve Lansmanlar</span></a>
        <a class="{{ request()->routeIs('hizmetlerimiz/fuar-stand') ? 'active' : '' }}" href="{{ url('hizmetlerimiz/fuar-stand') }}"><span>Fuar ve Standlar</span></a>
        <a class="{{ request()->routeIs('hizmetlerimiz/vip') ? 'active' : '' }}" href="{{ url('hizmetlerimiz/vip') }}"><span>Vip Karşılama ve Transfer</span></a>
        <a class="{{ request()->routeIs('hizmetlerimiz/lcv') ? 'active' : '' }}" href="{{ url('hizmetlerimiz/lcv') }}"><span>LCV, Sms ve Mailing Hizmetleri</span></a>
        <a class="{{ request()->routeIs('hizmetlerimiz') ? 'active' : '' }}" href="{{ url('hizmetlerimiz') }}"><span>Lorem ipsum dolor sit amet consectetur adipisicing elit...</span></a>
    </div>
    
    
</div>