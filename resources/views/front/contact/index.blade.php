@extends('layout.layout')

@section('title')
   İletişim
@endsection
@section('fullContain')
<div class="row hstack">
    <div class="col-lg-5 contact-adress pe-xl-5 pb-lg-5 pt-lg-5 pe-lg-3 pt-2 ms-n4 ms-lg-0">
        <div class="row pe-lg-2 text-lg-start text-center pb-2 px-lg-4 ps-5 pe-4">
            <div class="contactInfo col-xxl-6 col-xl-8 col-lg-11 col-12 ms-lg-auto px-4 px-lg-0">
                <div class="imageWrapper justify-content-start pb-3 ms-xl-n2 d-none d-lg-block">
                    <img src="{{asset('assets/statics/logo-dark-2.svg')}}" alt="">
                </div>
                <a class="pt-3 d-flex preLine mt-1 ms-xl-n2 px-2 px-lg-0" href="javascript:;">Soğanlık Yeni Mah. Aliağa Sok. No.:8
                    Bumerang Kartal  Kat: 27 D: 140  İstanbul, Türkiye
                </a>
                <a class="pt-4 d-flex ms-xl-n2 mt-lg-1" href="callto:02167663187">+90 216 766 3187</a>
                <a class="d-flex ms-xl-n2 pt-lg-2 pb-2 text-decoration-underline" href="mailto:info@ikpolaris.com">info@ikpolaris.com</a>
                <div class="socialMedia pt-4 hstack ms-xl-n2 pb-3">
                    <a href="javascript:;"><span class="fs-5 icon-instagram"></span></a>
                    <a href="javascript:;"><span class="fs-5 icon-twitter"></span></a>
                    <a href="https://www.linkedin.com/company/ikpolaris/?originalSubdomain=tr" target="_blank"><span class="fs-5 icon-linkedin"></span></a>
                    <a href="javascript:;"><span class="fs-5 icon-facebook"></span></a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-5 col-xl-6 col-lg-7 col-11 pb-lg-5 pb-4 pt-3 px-3 px-lg-0 me-lg-auto mobileCenter">
        <form method="POST" action="#" id="contactForm" class="row g-lg-3 needs-validation px-lg-4" novalidate>
            <div class="form-floating mb-lg-2 mb-1 col-12">
                <input type="text" class="form-control textMask" id="name" placeholder="Adınız" required>
                <label for="name">Adınız Soyadınız</label>
                <div class="invalid-tooltip">
                    Lütfen Adınızı Soyadınızı Giriniz
                </div>
            </div>
            <div class="form-floating mb-lg-2 mb-1 col-lg-6 col-12">
                <input type="text" class="form-control phoneMask" id="phone" placeholder="Telefon Numaranız" required>
                <label for="surname">Telefon Numaranız</label>
                <div class="invalid-tooltip">
                    Lütfen Telefon Numaranızı Giriniz
                </div>
            </div>
            <div class="form-floating mb-lg-2 mb-1 col-lg-6 col-12">
                <input type="email" class="form-control emailMask" id="eposta" placeholder="E-Postanız" required>
                <label for="eposta">E-Postanız</label>
                <div class="invalid-tooltip">
                    Lütfen E-Postanızı Giriniz
                </div>
            </div>
            <div class="form-floating mb-lg-2 mb-1 col-12">
                <input type="text" class="form-control textMask" id="messageSubject" placeholder="Mesaj Konusu" required>
                <label for="messageSubject">Mesaj Konusu</label>
                <div class="invalid-tooltip">
                    Lütfen Mesaj Konusu Giriniz
                </div>
            </div>
            <div class="form-floating col-12 mb-lg-2 mb-1">
                <textarea class="form-control" placeholder="Mesajınız" id="message" rows="5" cols="30" required></textarea>
                <label for="message">Mesajınız</label>
                <div class="invalid-tooltip">
                    Lütfen Mesajınızı Giriniz
                </div>
            </div>
            <div class="position-relative col-lg-7 col-12 hstack pt-lg-2 pt-3 mb-3 mb-lg-0">
                <div class="form-check w-100">
                    <input class="form-check-input" type="checkbox" value="" id="kvkkCheck" required>
                    <label class="form-check-label d-flex mt-0" for="kvkkCheck">
                        <a data-bs-toggle="modal" data-bs-target="#textModal" >KVKK Aydınlatma Metni</a>'ni Okudum
                    </label>
                </div>
            </div>
            <div class="col-lg-4 col-12 ms-auto pt-1">
                <button class="btn btn-primary rounded-pill text-white ms-auto" type="submit"> Gönder</button>
            </div>
          </form>
    </div>
    <div class="col-lg-12 position-relative pt-xl-5">
        <div class="bg-primary mapBg w-100 h-100 top-50 end-0 position-absolute d-none d-lg-block"></div>
        <div class="map position-relative col-lg-10 col offset-lg-2 ps-lg-5 me-n4">
            <div class="w-100 h-100 rounded-pill overflow-hidden pe-0">
                <!-- <div id="map"></div> -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3014.9020423198303!2d29.177216812453675!3d40.91789367124389!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cac460d66610a7%3A0x1a04ceb1a8f48f62!2sBumerang%20Kartal%20Rezidans!5e0!3m2!1str!2str!4v1701443909058!5m2!1str!2str" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div>
@endsection
