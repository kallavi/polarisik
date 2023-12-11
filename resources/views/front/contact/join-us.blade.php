@extends('layout.layout')

@section('title')
   Bize Katılın
@endsection
@section('fullContain')
<div class="bizeKatilinBg d-none d-lg-block"><img src="{{asset('assets/statics/bize-katilin-bg.png') }}" alt=""></div>
<div class="bizeKatilinBgSmall d-none d-lg-block"><img src="{{asset('assets/statics/logo-dark-thumb.png') }}" alt=""></div>
<div class="row pb-lg-2 pt-1 pt-lg-0 mx-auto">
    <div class="col-xxxl-5 col-xxl-6 col-xl-7 col-lg-8 mx-auto px-4 pb-lg-0 pb-2 pt-1 pt-lg-0">
        <form method="POST" action="#" id="bizeKatilimForm" class="row type2 g-lg-4 g-0 needs-validation px-lg-4 px-3 mt-lg-0 pb-4 pbb-lg-0 mt-3" novalidate>
            <div class="form-floating col-12 mb-2 mb-lg-0">
                <input type="text" class="form-control textMask" id="name" placeholder="Adınız Soyadınız" required>
                <label for="namesurname">Adınız Soyadınız</label>
                <div class="invalid-tooltip">
                    Lütfen Adınızı Soyadınızı Giriniz
                </div>
            </div>
            <div class="position-relative col-lg-6 mb-2 mb-lg-0">
                <select class="form-select" id="gender" required>
                    <option selected disabled value="">Cinsiyet Seçiniz</option>
                    <option>Kadın</option>
                    <option>Erkek</option>
                  </select>
                <div class="invalid-tooltip">
                    Lütfen Cinsiyet Seçimi Yapınız
                  </div>
            </div>
            <div class="form-floating col-lg-6 custom-birthday mb-2 mb-lg-0">
                <input type="text" class="form-control birthdayMask datepicker" id="birthday" placeholder="Doğum Tarihi (GG/AA/YY)" required>
                <label for="birthday">Doğum Tarihi (GG/AA/YY)</label>
                <div class="invalid-tooltip">
                    Doğum Tarihi Giriniz
                </div>
                <span class="icon-calendar"></span>
                <div id="ageWarning" style="color: red;"></div>
            </div>
            <div class="form-floating col-lg-6 mb-2 mb-lg-0">
                <input type="text" class="form-control phoneMask" id="phone" placeholder="Telefon Numaranız" required>
                <label for="surname">Telefon</label>
                <div class="invalid-tooltip">
                    Lütfen Telefon Numaranızı Giriniz
                </div>
                <div class="invalid-tooltip maskError">
                    Lütfen Başına 0 Girmeden Sadece Rakam Giriniz.
                </div>
            </div>
            <div class="form-floating col-lg-6 mb-2 mb-lg-0">
                <input type="email" class="form-control emailMask" id="eposta" placeholder="E-Postanız" required>
                <label for="eposta">E-Posta</label>
                <div class="invalid-tooltip">
                    Lütfen E-Postanızı Giriniz
                </div>
                <div class="invalid-tooltip maskError">
                    Lütfen E-Postanızı info@info.com Formatında Giriniz
                </div>
            </div>
            <div class="form-floating col-lg-6 mb-2 mb-lg-0">
                <input type="text" class="form-control allNumber" id="messageSubject" placeholder="Mesaj Konusu" required>
                <label for="messageSubject">Boy Giriniz</label>
                <div class="invalid-tooltip">
                    Lütfen Boy Giriniz
                </div>
            </div>
            <div class="form-floating col-lg-6 mb-2 mb-lg-0">
                <input type="text" class="form-control allNumber" id="messageSubject" placeholder="Mesaj Konusu" required>
                <label for="messageSubject">Kilo Giriniz</label>
                <div class="invalid-tooltip">
                    Lütfen Kilo Giriniz
                </div>
            </div>
            <div class="position-relative col-12 mb-2 mb-lg-0">
                <div class="custom-file d-flex align-items-center">
                    <input type="file" id="fileInput" accept=".jpg, .jpeg, .png" class="custom-file-input" aria-label="Fotoğraf Yükleyiniz" required style="display: none;" onchange="displayFileName()">
                    <img id="imagePreview" style="max-width: 100px; max-height: 100px; display: none;" />
                    <label class="custom-file-label" for="fileInput" id="customFileLabel">Fotoğrafınızı Yükleyiniz</label>
                    <button type="button" id="addButton" class="ms-auto btn" onclick="document.getElementById('fileInput').click()"><span class="icon-plus"></span></button>
                    <button type="button" id="deleteButton" class="ms-auto btn" onclick="deleteImage()" style="display: none;"><span class="icon-plus"></span></button>
                    <div class="invalid-tooltip">Lütfen Fotoğrafınızı .jpg veya .png Formatında Yükleyiniz.</div>
                </div>
            </div>
            <div class="form-floating col-lg-6 mb-2 mb-lg-0">
                <input type="text" class="form-control textMask" id="messageSubject" placeholder="Mesaj Konusu" required>
                <label for="messageSubject">Yabancı Dil Giriniz</label>
                <div class="invalid-tooltip">
                    Lütfen Yabancı Dil Giriniz
                </div>
            </div>
            <div class="position-relative col-lg-6 mb-2 mb-lg-0">
                <select class="form-select" id="gender" required>
                    <option selected disabled value="">Yabancı Dil Seviyeniz</option>
                    <option>Başlangıç</option>
                    <option>Orta</option>
                    <option>İleri</option>
                  </select>
                <div class="invalid-tooltip">
                    Lütfen Yabancı Dil Seviyenizi Seçiniz
                </div>
            </div>
            <div class="position-relative col-lg-6 mb-2 mb-lg-0">
                <select class="form-select" id="gender" required>
                    <option selected disabled value="">Ehliyetiniz Var mı?</option>
                    <option>Ehliyetim Yok</option>
                    <option>M</option>
                    <option>A1</option>
                    <option>A2</option>
                    <option>A</option>
                    <option>B1</option>
                    <option>B</option>
                    <option>BE</option>
                    <option>C1</option>
                    <option>C1E</option>
                    <option>C</option>
                    <option>CE</option>
                    <option>D1</option>
                    <option>D1E</option>
                    <option>D</option>
                    <option>DE</option>
                    <option>F</option>
                </select>
                <div class="invalid-tooltip">
                    Lütfen Ehliyetinizi Seçiniz
                </div>
            </div>
            <div class="position-relative col-lg-6 mb-2 mb-lg-0">
                <select class="form-select" id="gender" required>
                    <option selected disabled value="">Konaklama Durumu</option>
                    <option>Ev</option>
                    <option>Öğrenci Yurdu</option>
                  </select>
                <div class="invalid-tooltip">
                    Lütfen Konaklama Durumu Seçiniz
                  </div>
            </div>
            <div class="position-relative col-lg-6 mb-2 mb-lg-0">
                <select class="form-select" id="gender" required>
                    <option selected disabled value="">Takım Elbiseniz Var mı?</option>
                    <option>Evet</option>
                    <option>Hayır</option>
                    <option>Eksik</option>
                </select>
                <div class="invalid-tooltip">
                    Lütfen Seçim Yapınız
                </div>
            </div>
            <div class="form-floating col-lg-6 mb-2 mb-lg-0">
                <input type="text" class="form-control textMask" id="messageSubject" placeholder="Mesaj Konusu" required>
                <label for="messageSubject">Eksik Parça Belirtiniz</label>
                <div class="invalid-tooltip">
                    Lütfen Eksik Parça Giriniz
                </div>
            </div>
            <div class="position-relative col-lg-6 mb-2 mb-lg-0">
            <select class="form-select" id="gender" required>
                <option selected disabled value="">Semt Seçiniz</option>
                <option>Sarıyer</option>
                <option>Beşiktaş</option>
                <option>Kağıthane</option>
                <option>Şişli</option>
                </select>
            <div class="invalid-tooltip">
                Lütfen Semt Seçiniz
                </div>
            </div>
            <div class="form-floating col-lg-6 mb-2 mb-lg-0">
                <input type="text" class="form-control tcNo" id="messageSubject" placeholder="Mesaj Konusu" required>
                <label for="messageSubject">T.C. Kimlik No</label>
                <div class="invalid-tooltip">
                    Lütfen T.C. Kimlik No Giriniz
                </div>
                <div class="invalid-tooltip maskError">
                    Lütfen Sadece Rakam Giriniz
                </div>
            </div>
            <div class="form-floating col-12 mb-2 mb-lg-0">
                <input type="text" class="form-control textMask" id="ibanName" placeholder="Hesap Adı Giriniz" required>
                <label for="ibanName">Hesap Adı Giriniz</label>
                <div class="invalid-tooltip">
                    Lütfen Hesap Adı
                </div>
            </div>
            <div class="form-floating col-12 mb-2 mb-lg-0">
                <input type="text" class="form-control ibanMask" id="ibanNo" placeholder="IBAN Giriniz" required>
                <label for="ibanNo">IBAN Giriniz</label>
                <div class="invalid-tooltip">
                    Lütfen Iban Giriniz
                </div>
                <div class="invalid-tooltip maskError">
                    Lütfen Başına TR Girmeden Sadece Rakam Giriniz
                </div>
            </div>
            <div class="position-relative col-lg-7 pt-2 hstack mb-2 mb-lg-0 col-12 mt-lg-5">
                <div class="form-check type2 position-relative">
                    <input class="form-check-input" type="checkbox" value="" id="kvkkCheck" required>
                    <label class="form-check-label" for="kvkkCheck">
                        <a data-bs-toggle="modal" data-bs-target="#textModal">KVKK Aydınlatma Metni</a>'ni Okudum
                    </label>
                </div>
            </div>
            <div class="col-lg-4 col-12 ms-lg-auto pe-lg-4 pt-1 mb-2 mb-lg-0 mt-lg-5">
                <button class="btn btn-primary rounded-pill text-white ms-lg-auto me-lg-3 mx-auto" type="submit"> Gönder</button>
            </div>
          </form>
    </div>
</div>
@endsection

