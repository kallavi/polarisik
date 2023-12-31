<footer class="bg-primary"@hasSection('mainContent') data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease"@endif>
    <div class="container-xxxl px-xxxl-0 position-relative pb-2 pt-3 ps-5 pe-5 h-100">
        <div class="d-flex align-items-lg-start align-items-center flex-column flex-lg-row  w-100 justify-content-between pt-3 mt-3">
            <a href="/{{ request()->segment(1) }}" class="logo">
                {{--  <img src="{{asset($data['setting']['logo'])}}" alt="{{ $data['setting']['name'] }}">  --}}
                <img src="{{asset('assets/statics/logo-light-2.svg')}}" alt="{{ $data['setting']['name'] }}">
            </a> 
            <div class="">
                <div class="nav hstack pt-3 ps-3 d-none d-lg-flex">
                    @foreach ($data['menu']->where('parent', 1)->where('child', null) as $menu)
                        <a href="/{{ request()->segment(1) }}/{{ $menu->slug }}">{{ $menu->name }}</a>
                    @endforeach 
                </div>
                <div class="copyRight pt-4 ps-3 text-center text-lg-start bottom pb-4 mt-3 d-none d-lg-block">
                    <span>© {{ date('Y') }} {{ $data['setting']['slug'] }} </span>
                </div>
            </div>
            <div class="adress d-lg-none d-flex flex-column align-items-center text-center px-4 pt-4 pb-1">
                <a class="pt-2" href="https://maps.app.goo.gl/94eCxMBhvph5RZo99" target="_blank">
                    {{ $data['setting']['address'] }}
                </a>
                <a class="pt-3" href="tel:{{ $data['setting']['phone'] }}">{{ $data['setting']['phone'] }}</a>
                <a href="mailto:{{ $data['setting']['e_mail'] }}">{{ $data['setting']['e_mail'] }}</a>
            </div>
            
            <div class="socialMedia pt-3 d-flex align-items-center  justify-content-center">
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
            <div>
                @if (request()->segment(1) == 'tr')
                    <a href="/en" class="language nav-link mx-auto text-center mt-3 text-white d-none d-lg-block"><img src="{{ asset('assets/images/world.svg') }}" alt=""><span>ENGLISH</span></a>
                @else
                    <a href="/tr" class="language nav-link mx-auto text-center mt-3 text-white d-none d-lg-block"><img src="{{ asset('assets/images/world.svg') }}" alt=""><span>TÜRKÇE</span></a>
                @endif
            </div>
        </div>
        <div class="text-center bottom pb-4 pt-2 mt-n1 d-lg-none">
            <span>© {{ date('Y') }} {{ $data['setting']['slug'] }} </span>
        </div>
    </div>
</footer>