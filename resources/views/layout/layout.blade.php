<!DOCTYPE html>
<html lang="en">
<!--Head Include-->
@include('include.shared.head')

<body>
    <div id="app" class="app">
        <!--Preloader Include-->
        @include('include.preloader')
        <!--Mobile Navbar Include-->
        @include('include.mobile-navbar')

        <main class="bg-white">
            <!--Header Include-->
            @include('include.shared.header')
            <!---mainContent sadece anasayfa ıcın-->
            @if (View::hasSection('mainContent'))
                @yield('mainContent')
            @elseif (View::hasSection('fullContain'))
                <div class="centerBg">
                    <img src="{{ asset('assets/statics/contentBg.png') }}" alt="">
                </div>


                <div class="center pt-lg-5 pt-3">
                    @include('include.content-head')

                    @if (\Route::currentRouteName() == 'iletisim')
                        <div class="content contactContent pt-lg-4 {{ request()->is('iletisim') ? 'pb-0 h-100' : '' }}">
                            @yield('fullContain')
                        </div>
                    @else
                    <div class="content pt-lg-4 {{ request()->is('iletisim') ? 'pb-0 h-100' : '' }}">
                        @yield('fullContain')
                    </div>
                    @endif
                </div>
            @else
                <div class="centerBg">
                    <img src="{{ asset('assets/statics/contentBg.png') }}" alt="">
                </div>


                <div class="center pt-lg-5 pt-3">
                    @include('include.content-head')
                    <div class="content pt-lg-4 {{ request()->is('iletisim') ? 'pb-0 h-100' : '' }}">
                        <div class="container-xxxl px-xxxl-0 px-4 px-lg-2">
                            @yield('content')
                        </div>
                    </div>
                </div>
            @endif

            <!--Footer Include-->
            @include('include.shared.footer')
        </main>
        @include('include.modal')

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    @if (\Route::currentRouteName() == 'iletisim' || \Route::currentRouteName() == 'bize-katil')
        <script src="{{ asset('assets/front/js/jquery.mask.min.js') }}"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="{{ asset('assets/front/js/ui-datepicker-tr.js') }}"></script>
        <script src="{{ asset('assets/front/js/form.js') }}"></script>
    @endif

    @hasSection('mainContent')
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.10/lottie.min.js"></script>
    @endif

    @vite(['resources/assets/front/js/app.js'])

    @yield('script')
</body>

</html>
