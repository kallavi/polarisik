@extends('layout.layout')

@section('title')
    @if (request()->segment(1) == 'tr')
        İletişim
    @else
        Contact
    @endif
@endsection
@section('fullContain')
    <div class="row hstack">
        <div class="col-lg-5 contact-adress pe-xl-5 pb-lg-5 pt-lg-5 pe-lg-3 pt-2 ms-n4 ms-lg-0">
            <div class="contactInfoWrapper row pe-lg-2 text-lg-start text-center pb-2 px-lg-4 ps-5 pe-4">
                <div class="contactInfo col-xxl-6 col-xl-8 col-lg-11 col-12 ms-lg-auto px-4 px-lg-0">
                    <div class="imageWrapper justify-content-start pb-3 ms-xl-n2 d-none d-lg-block">
                        <img src="{{ asset('assets/statics/logo-dark-2.svg') }}" alt="">
                    </div>
                    
                    <a class="pt-3 d-flex preLine mt-1 ms-xl-n2 px-2 px-lg-0" href="https://maps.app.goo.gl/94eCxMBhvph5RZo99" target="_blank">
                        {{ $data['setting']['address'] }}
                    </a>
                    <a class="pt-4 d-flex ms-xl-n2 mt-lg-1" href="tel:{{ $data['setting']['phone'] }}">{{ $data['setting']['phone'] }}</a>
                    <a class="d-flex ms-xl-n2 pt-lg-2 pb-2 text-decoration-underline"
                        href="mailto:{{ $data['setting']['e_mail'] }}">{{ $data['setting']['e_mail'] }}</a>
                    <div class="socialMedia pt-4 hstack ms-xl-n2 pb-3">
                        @if ($data['setting']['instagram'])
                            <a href="$data['setting']['instagram']" target="_blank"><span class="fs-6 icon-instagram"></span></a>
                        @endif
                        @if ($data['setting']['twitter'])
                            <a href="$data['setting']['twitter']" target="_blank"><span class="fs-6 icon-twitter"></span></a>
                        @endif
                        @if ($data['setting']['linkedin'])
                            <a href="$data['setting']['linkedin']" target="_blank"><span class="fs-6 icon-linkedin"></span></a>
                        @endif
                        @if ($data['setting']['facebook'])
                            <a href="$data['setting']['facebook']" target="_blank"><span class="fs-6 icon-facebook"></span></a>
                        @endif
                        @if ($data['setting']['youtube'])
                            <a href="$data['setting']['youtube']" target="_blank"><span class="fs-6 icon-youtube"></span></a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-5 col-xl-6 col-lg-7 col-11 pb-lg-5 pb-4 pt-3 px-3 px-lg-0 me-lg-auto mobileCenter">
            <form method="POST" action="{{ route('contact.store') }}" id="contactForm" class="row g-lg-3 needs-validation px-lg-4" novalidate>
                @csrf
                <div class="form-floating mb-lg-2 mb-1 col-12">
                    <input type="text" class="form-control textMask" id="name" placeholder="" name="name_surname" required>
                    <label for="name">
                        @if (request()->segment(1) == 'tr')
                            Adınız Soyadınız
                        @else
                            Name Surname
                        @endif
                    </label>
                    <div class="invalid-tooltip">
                        @if (request()->segment(1) == 'tr')
                            Lütfen Adınızı Soyadınızı Giriniz
                        @else
                            Please enter your name surname
                        @endif
                    </div>
                </div>
                <div class="form-floating mb-lg-2 mb-1 col-lg-6 col-12">
                    <input type="text" class="form-control phoneMask" name="phone_number" id="phone" placeholder=""
                        required>
                    <label for="surname">
                        @if (request()->segment(1) == 'tr')
                            Telefon Numaranız
                        @else
                            Phone Number
                        @endif
                    </label>
                    <div class="invalid-tooltip">
                        @if (request()->segment(1) == 'tr')
                            Lütfen Telefon Numaranızı Giriniz
                        @else
                            Please enter your phone number
                        @endif
                    </div>
                </div>
                <div class="form-floating mb-lg-2 mb-1 col-lg-6 col-12">
                    <input type="email" class="form-control emailMask" name="e_mail" id="eposta" placeholder="" required>
                    <label for="eposta">
                        @if (request()->segment(1) == 'tr')
                            E-Postanız
                        @else
                            E-Mail
                        @endif
                    </label>
                    <div class="invalid-tooltip">
                        @if (request()->segment(1) == 'tr')
                            Lütfen E-Postanızı Giriniz
                        @else
                            Please enter your e-mail
                        @endif
                    </div>
                </div>
                <div class="form-floating mb-lg-2 mb-1 col-12">
                    <input type="text" class="form-control textMask" name="message_subject" id="messageSubject" placeholder=""
                        required>
                    <label for="messageSubject">
                        @if (request()->segment(1) == 'tr')
                            Mesaj Konusu
                        @else
                            Message Subject
                        @endif
                    </label>
                    <div class="invalid-tooltip">
                        @if (request()->segment(1) == 'tr')
                            Lütfen Mesaj Konusu Giriniz
                        @else
                            Please enter your message subject
                        @endif
                    </div>
                </div>
                <div class="form-floating col-12 mb-lg-2 mb-1">
                    <textarea class="form-control" placeholder="" name="message" id="message" rows="5" cols="30" required></textarea>
                    <label for="message">
                        @if (request()->segment(1) == 'tr')
                            Mesajınız
                        @else
                            Message
                        @endif
                    </label>
                    <div class="invalid-tooltip">
                        @if (request()->segment(1) == 'tr')
                            Lütfen Mesajınızı Giriniz
                        @else
                            Please enter your message
                        @endif
                    </div>
                </div>
                <div class="position-relative col-lg-7 col-12 hstack pt-lg-2 pt-3 mb-3 mb-lg-0">
                    <div class="form-check w-100">
                        <input class="form-check-input" type="checkbox" value="" id="kvkkCheck" required>
                        <label class="form-check-label d-flex mt-0" for="kvkkCheck">
                            
                        @if (request()->segment(1) == 'tr')
                            <a data-bs-toggle="modal" data-bs-target="#textModal">
                            KVKK Aydınlatma Metni</a>'ni Okudum
                        @else
                            I have read the &nbsp;
                            <a data-bs-toggle="modal" data-bs-target="#textModal">
                            PDPL Information Text</a>
                        @endif
                        </label>
                    </div>
                </div>
                <div class="col-lg-4 col-12 ms-auto pt-1">
                    <button class="btn btn-primary rounded-pill text-white ms-auto" type="submit">
                        @if (request()->segment(1) == 'tr')
                            Gönder
                        @else
                            Submit
                        @endif
                    </button>
                </div>
            </form>
        </div>
        <div class="col-lg-12 position-relative pt-xl-5">
            <div class="bg-primary mapBg w-100 h-100 top-50 end-0 position-absolute d-none d-lg-block"></div>
            <div class="map position-relative col-lg-10 col offset-lg-2 ps-lg-5 me-n4">
                <div class="w-100 h-100 rounded-pill overflow-hidden pe-0">
                    <div id="map" style="height: 100%; width: 100%;"></div>
                    {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3014.9020423198303!2d29.177216812453675!3d40.91789367124389!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cac460d66610a7%3A0x1a04ceb1a8f48f62!2sBumerang%20Kartal%20Rezidans!5e0!3m2!1str!2str!4v1701443909058!5m2!1str!2str" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRICctFHMI3ILrEWy-_Ziq0vKSl33FNDA&libraries=places&callback=initMap" async defer></script>
    <script>
        var webMap;
        function initMap() {
            const webMapCenter = { lat: 40.9178937, lng: 29.1797971 };
            webMap = new google.maps.Map(document.getElementById('map'), {
                center: webMapCenter,
                zoom: 16,
                mapTypeControl: false, // Uydu görünümü yerine ROADMAP (sokak haritası) kullanılır.
                fullscreenControl: false, // Tam ekran butonunu kaldır
                streetViewControl: false,
                zoomControl: false
            });

            var webMarker = new google.maps.Marker({
                position: webMapCenter,
                map: webMap,
            });
        }
        initMap();
    </script>
@endsection
