<!DOCTYPE html>
<html lang="en">
    @include('include.shared.head')
    <body>
        <div id="app" class="app">
            @include('include.preloader')
            @include('include.mobile-navbar')
            <main class="bg-white">
                <!---Header da position-absolute sadece anasayfa ıcın gecerli bir class-->
                @include('include.shared.header')
                <section id="homeSection" class="vh-100 bg-primary" data-aos="fade-in"  data-aos-duration="1000" data-aos-easing="ease">
                    <div class="swiper carouselSwiper container-xxl px-0">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="container-xxxl ps-2">
                                    <div class="slide-caption col-xxl-5 col-lg-6 col line-clamp-3">
                                        Lorem ipsum dolor sit amet elit!
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="container-xxxl ps-2">
                                    <div class="slide-caption col-xxl-5 col-lg-6 col line-clamp-3">
                                        Lorem ipsum dolor sit amet elit! 2
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="container-xxxl ps-2">
                                    <div class="slide-caption col-xxl-5 col-lg-6 col line-clamp-3">
                                        Lorem ipsum dolor sit amet elit! 3
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="container-xxxl ps-2">
                                    <div class="slide-caption col-xxl-5 col-lg-6 col line-clamp-3">
                                        Lorem ipsum dolor sit amet elit! 4
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="fixedBg">
                        <img class="d-none d-lg-block" src="../../../public/assets/statics/bg-logo-2.png" alt="">
                        <img class="d-lg-none" src="../../../public/assets/statics/bg-logo-2-mobile.png" alt="">
                    </div>
                    <div class="sectionBottom container-xxxl px-xxxl-0">
                        <div id="scroll-animate" class="scrollDown"></div>
                    </div>
                </section>
                <section>
                    <div class="container-fluid pe-lg-0">
                        <div class="row mx-0 hstack">
                            <div class="col-xxl-4 col-lg-5 offset-xxl-2 offset-lg-1 text-center text-lg-start pb-3"  data-aos="fade-right" data-aos-duration="1000" data-aos-easing="ease">
                                <div class="imageWrapper pt-1 d-lg-block d-none">
                                        <img src="../../../public/assets/statics/logo-dark.svg" alt="">
                                </div>
                                <div class="paragraph">
                                        <p>Sahip olduğumuz genç ve dinamik kadromuz ile firmaların, kurumların ve organizasyonların dönemsel insan kaynakları ihtiyaçlarına, özellikle günlük/part-time insan kaynağı pozisyonlarında yaşadıkları sorunlarına tanıklık etmiş bir ekip olarak bizler, sizlerin işinizi, kültürünüzü, yönetim stratejinizi anlamaya çalışan ve size özel İK hizmetleri üreten bir firmayız.</p>
                                        <p>Kadrolarımızda genç arkadaşlara yer vererek onlara istihdam sağlamak, iş hayatına adım atmalarına ve kendilerini geliştirmelerine katkıda bulunmak, ayrıca sektörde yapılan bir organizasyonun her birimini görmüş deneyimli personeller yetiştirmeyi hedeflemekteyiz.</p>
                                </div>
                                <a href="bizkimiz.html" class="btn btn-primary rounded-pill btn-lg px-4">Devamı</a>
                            </div>
                            <div class="col-lg-6 px-0 pe-lg-0 ps-lg-2 pt-4 pt-lg-0" data-aos="fade-left"  data-aos-duration="1000" data-aos-easing="ease">
                                <div class="videoCover ps-lg-1 pt-1 pt-lg-0">
                                    <div class="imageWrapper">
                                        <img class="img-fluid w-100" src="../../../public/assets/statics/video-cover.jpg" alt="">
                                        <a href="https://www.youtube.com/watch?v=z2X2HaTvkl8" data-fancybox class="playButton">
                                            <span class="icon-play"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section>
                    <div class="container-xxl">
                        <div class="cards row row-cols-4 justify-content-center mx-0 px-4">
                            <div class="card border-0" data-aos="fade" data-aos-duration="1000" data-aos-delay="100" data-aos-easing="ease">
                                <a href="festivaller-konserler.html">
                                    <img class="d-lg-none" width="29" src="../../../public/assets/statics/big-logo.png" alt="">
                                    <span>Festival ve Konserler</span>
                                </a>
                            </div>
                            <div class="card border-0" data-aos="fade" data-aos-duration="1000" data-aos-delay="200" data-aos-easing="ease">
                                <a href="kongre-toplantilari.html">
                                    <img class="d-lg-none" width="29" src="../../../public/assets/statics/big-logo.png" alt="">
                                    <span>Kongre ve Toplantılar</span>
                                </a>
                            </div>
                            <div class="card border-0" data-aos="fade" data-aos-duration="1000" data-aos-delay="300" data-aos-easing="ease">
                                <a href="resmi-torenler.html">
                                    <img class="d-lg-none" width="29" src="../../../public/assets/statics/big-logo.png" alt="">
                                    <span>Resmi Törenler ve Anma Programları</span>
                                </a>
                            </div>
                            <div class="card border-0" data-aos="fade" data-aos-duration="1000" data-aos-delay="400" data-aos-easing="ease">
                                <a href="tanitim-lansmanlar.html">
                                    <img class="d-lg-none" width="29" src="../../../public/assets/statics/big-logo.png" alt="">
                                    <span>Tanıtım ve Lansmanlar</span>
                                </a>
                            </div>
                            <div class="card border-0" data-aos="fade" data-aos-duration="1000" data-aos-delay="500" data-aos-easing="ease">
                                <a href="fuar-standlar.html">
                                    <img class="d-lg-none" width="29" src="../../../public/assets/statics/big-logo.png" alt="">
                                    <span>Fuar ve Standlar</span>
                                </a>
                            </div>
                            <div class="card border-0" data-aos="fade" data-aos-duration="1000" data-aos-delay="600" data-aos-easing="ease">
                                <a href="vip-karsilama.html">
                                    <img class="d-lg-none" width="29" src="../../../public/assets/statics/big-logo.png" alt="">
                                    <span>Vip Karşılama ve Transferler</span>
                                </a>
                            </div>
                            <div class="card border-0" data-aos="fade" data-aos-duration="1000" data-aos-delay="700" data-aos-easing="ease">
                                <a href="lcv-sms-mailing-hizmetleri.html">
                                    <img class="d-lg-none" width="29" src="../../../public/assets/statics/big-logo.png" alt="">
                                    <span>LCV, SMS ve Mailing Hizmetleri</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="referencesSection" class="px-lg-5">
                    <div class="container-xxl">
                        <div class="swiper logoSwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide" data-aos="fade" data-aos-duration="1000" data-aos-delay="100" data-aos-easing="ease">
                                    <a href="javascript:;">
                                        <div class="imageWrapper">
                                            <img src="../../../public/assets/statics/logos/maruf.svg" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide" data-aos="fade" data-aos-duration="1000" data-aos-delay="200" data-aos-easing="ease">
                                    <a href="javascript:;">
                                        <div class="imageWrapper">
                                            <img src="../../../public/assets/statics/logos/arma.svg" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide" data-aos="fade" data-aos-duration="1000" data-aos-delay="300" data-aos-easing="ease">
                                    <a href="javascript:;">
                                        <div class="imageWrapper">
                                            <img src="../../../public/assets/statics/logos/qualita.svg" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide" data-aos="fade" data-aos-duration="1000" data-aos-delay="400" data-aos-easing="ease">
                                    <a href="javascript:;">
                                        <div class="imageWrapper">
                                            <img src="../../../public/assets/statics/logos/careas.svg" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide" data-aos="fade" data-aos-duration="1000" data-aos-delay="500" data-aos-easing="ease">
                                    <a href="javascript:;">
                                        <div class="imageWrapper">
                                            <img src="../../../public/assets/statics/logos/btik.svg" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide" data-aos="fade" data-aos-duration="1000" data-aos-delay="600" data-aos-easing="ease">
                                    <a href="javascript:;">
                                        <div class="imageWrapper">
                                            <img src="../../../public/assets/statics/logos/maruf.svg" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide" data-aos="fade" data-aos-duration="1000" data-aos-delay="700" data-aos-easing="ease">
                                    <a href="javascript:;">
                                        <div class="imageWrapper">
                                            <img src="../../../public/assets/statics/logos/arma.svg" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide" data-aos="fade" data-aos-duration="1000" data-aos-delay="800" data-aos-easing="ease">
                                    <a href="javascript:;">
                                        <div class="imageWrapper">
                                            <img src="../../../public/assets/statics/logos/qualita.svg" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="swiper-slide" data-aos="fade" data-aos-duration="1000" data-aos-delay="900" data-aos-easing="ease">
                                    <div class="imageWrapper">
                                        <img src="../../../public/assets/statics/logos/careas.svg" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide" data-aos="fade" data-aos-duration="1000" data-aos-delay="1000" data-aos-easing="ease">
                                    <a href="javascript:;">
                                        <div class="imageWrapper">
                                            <img src="../../../public/assets/statics/logos/btik.svg" alt="">
                                        </div>
                                    </a>
                                </div>
                                
                            </div>
                            <div class="swiper-pagination position-relative"></div>
                        </div>
                    </div>
                </section>
                @include('include.shared.footer')
            </main>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.10/lottie.min.js"></script>
        @vite(['resources/assets/front/js/app.js'])

        <!---Asagıdaki script sadece bbu sayfa ıcındır-->
        <script type="text/javascript">
            // Scroll olayını dinlemek scroll
            // window.addEventListener('scroll', function () {
            // var header = document.querySelector('header');
            // var app = document.getElementById('app');
            // // Yüksekliği kontrol ederek 'fixed' sınıfı eklenir
            // if (window.pageYOffset > 135) {
            //     header.classList.add('fixed');
            //     app.classList.add('fixed');
            // } else {
            //     header.classList.remove('fixed');
            //     app.classList.remove('fixed');
            // }
            // });
            AOS.init({
                offset: 50,
                once: true,
            });

            document.getElementById('scroll-animate').addEventListener('click', function() {
                // Sayfanın aşağı kaymasını sağlayan kod
                window.scrollBy({
                    top: window.innerHeight, // Sayfanın yüksekliği kadar kaydırma
                    left: 0,
                    behavior: 'smooth' // Animasyonlu kaydırma
                });
            });

            var swiper2 = new Swiper(".carouselSwiper", {
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                breakpoints: {
                    992: {
                        direction: "vertical",
                        effect: "fade",
                    },
                },
            });

            var swiper = new Swiper(".logoSwiper", {
                slidesPerView: 3,
                spaceBetween: 38.2,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
                breakpoints: {
                    992: {
                        spaceBetween: 30,
                        slidesPerView: 4,
                    },
                    1300: {
                        spaceBetween: 30,
                        slidesPerView: 5,
                    },
                },
            });

            
            var animationData ={"nm":"Comp 3","ddd":0,"h":800,"w":500,"meta":{"g":"LottieFiles AE 0.1.20"},"layers":[{"ty":4,"nm":"Shape Layer 2","sr":1,"st":0,"op":110.000004480392,"ip":0,"hd":false,"ddd":0,"bm":0,"hasMask":false,"td":1,"ao":0,"ks":{"a":{"a":0,"k":[-18.609,-103,0],"ix":1},"s":{"a":0,"k":[73.493,70.792,100],"ix":6},"sk":{"a":0,"k":0},"p":{"a":0,"k":[250,400,0],"ix":2},"r":{"a":0,"k":0,"ix":10},"sa":{"a":0,"k":0},"o":{"a":0,"k":100,"ix":11}},"ef":[],"shapes":[{"ty":"gr","bm":0,"hd":false,"mn":"ADBE Vector Group","nm":"Rectangle 1","ix":1,"cix":2,"np":3,"it":[{"ty":"sh","bm":0,"hd":false,"mn":"ADBE Vector Shape - Group","nm":"Path 1","ix":1,"d":1,"ks":{"a":0,"k":{"c":true,"i":[[0,-75.771],[0,0],[75.771,0],[0,75.771],[0,0],[-75.771,0]],"o":[[0,0],[0,75.771],[-75.771,0],[0,0],[0,-75.771],[75.771,0]],"v":[[137.195,-120.867],[137.195,120.867],[0,258.062],[-137.195,120.867],[-137.195,-120.867],[0,-258.062]]},"ix":2}},{"ty":"st","bm":0,"hd":false,"mn":"ADBE Vector Graphic - Stroke","nm":"Stroke 1","lc":2,"lj":1,"ml":4,"o":{"a":0,"k":100,"ix":4},"w":{"a":0,"k":10,"ix":5},"c":{"a":0,"k":[1,1,1],"ix":3}},{"ty":"fl","bm":0,"hd":false,"mn":"ADBE Vector Graphic - Fill","nm":"Fill 1","c":{"a":0,"k":[0.9843,0.9843,0.9922],"ix":4},"r":1,"o":{"a":0,"k":100,"ix":5}},{"ty":"tr","a":{"a":0,"k":[0,0],"ix":1},"s":{"a":0,"k":[100,100],"ix":3},"sk":{"a":0,"k":0,"ix":4},"p":{"a":0,"k":[-18.609,-103],"ix":2},"r":{"a":0,"k":0,"ix":6},"sa":{"a":0,"k":0,"ix":5},"o":{"a":0,"k":100,"ix":7}}]},{"ty":"tm","bm":0,"hd":false,"mn":"ADBE Vector Filter - Trim","nm":"Trim Paths 1","ix":2,"e":{"a":0,"k":100,"ix":2},"o":{"a":0,"k":-40,"ix":3},"s":{"a":0,"k":0,"ix":1},"m":1}],"ind":1},{"ty":0,"nm":"arrows2","sr":1,"st":0,"op":90.0000036657751,"ip":0,"hd":false,"ddd":0,"bm":0,"tt":1,"hasMask":false,"ao":0,"ks":{"a":{"a":0,"k":[250,400,0],"ix":1},"s":{"a":0,"k":[40,40,100],"ix":6},"sk":{"a":0,"k":0},"p":{"a":1,"k":[{"o":{"x":0.333,"y":0},"i":{"x":0.667,"y":0.228},"s":[250,384,0],"t":56,"ti":[0,-57.838,0],"to":[0,5.029,0]},{"o":{"x":0.333,"y":0.326},"i":{"x":0.667,"y":1},"s":[250,494.228,0],"t":70,"ti":[0,-25.878,0],"to":[0,87.074,0]},{"s":[250,718,0],"t":82.0000033399285}],"ix":2},"r":{"a":0,"k":0,"ix":10},"sa":{"a":0,"k":0},"o":{"a":0,"k":100,"ix":11}},"ef":[],"w":500,"h":800,"refId":"comp_0","ind":2}],"v":"5.5.7","fr":29.9700012207031,"op":110.000004480392,"ip":0,"assets":[{"nm":"","id":"comp_0","layers":[{"ty":4,"nm":"Layer 2 Outlines","sr":1,"st":0,"op":90.0000036657751,"ip":0,"hd":false,"ddd":0,"bm":0,"hasMask":false,"ao":0,"ks":{"a":{"a":0,"k":[9,20.5,0],"ix":1},"s":{"a":0,"k":[100,100,100],"ix":6},"sk":{"a":0,"k":0},"p":{"a":0,"k":[249,140.5,0],"ix":2},"r":{"a":0,"k":0,"ix":10},"sa":{"a":0,"k":0},"o":{"a":0,"k":100,"ix":11}},"ef":[],"shapes":[{"ty":"gr","bm":0,"hd":false,"mn":"ADBE Vector Group","nm":"Group 1","ix":1,"cix":2,"np":2,"it":[{"ty":"sh","bm":0,"hd":false,"mn":"ADBE Vector Shape - Group","nm":"Path 1","ix":1,"d":1,"ks":{"a":0,"k":{"c":false,"i":[[0,0],[0,0]],"o":[[0,0],[0,0]],"v":[[9,9],[9,32]]},"ix":2}},{"ty":"st","bm":0,"hd":false,"mn":"ADBE Vector Graphic - Stroke","nm":"Stroke 1","lc":2,"lj":1,"ml":10,"o":{"a":0,"k":100,"ix":4},"w":{"a":0,"k":18,"ix":5},"c":{"a":0,"k":[1,1,1],"ix":3}},{"ty":"tr","a":{"a":0,"k":[0,0],"ix":1},"s":{"a":0,"k":[100,100],"ix":3},"sk":{"a":0,"k":0,"ix":4},"p":{"a":0,"k":[0,0],"ix":2},"r":{"a":0,"k":0,"ix":6},"sa":{"a":0,"k":0,"ix":5},"o":{"a":0,"k":100,"ix":7}}]},{"ty":"tm","bm":0,"hd":false,"mn":"ADBE Vector Filter - Trim","nm":"Trim Paths 1","ix":2,"e":{"a":0,"k":100,"ix":2},"o":{"a":0,"k":0,"ix":3},"s":{"a":1,"k":[{"o":{"x":0.333,"y":0},"i":{"x":0.667,"y":1},"s":[100],"t":30},{"s":[0],"t":37.0000015070409}],"ix":1},"m":1}],"ind":1},{"ty":4,"nm":"Layer 3 Outlines","sr":1,"st":0,"op":90.0000036657751,"ip":0,"hd":false,"ddd":0,"bm":0,"hasMask":false,"ao":0,"ks":{"a":{"a":0,"k":[9,39,0],"ix":1},"s":{"a":0,"k":[100,100,100],"ix":6},"sk":{"a":0,"k":0},"p":{"a":0,"k":[249,216,0],"ix":2},"r":{"a":0,"k":0,"ix":10},"sa":{"a":0,"k":0},"o":{"a":0,"k":100,"ix":11}},"ef":[],"shapes":[{"ty":"gr","bm":0,"hd":false,"mn":"ADBE Vector Group","nm":"Group 1","ix":1,"cix":2,"np":2,"it":[{"ty":"sh","bm":0,"hd":false,"mn":"ADBE Vector Shape - Group","nm":"Path 1","ix":1,"d":1,"ks":{"a":0,"k":{"c":false,"i":[[0,0],[0,0]],"o":[[0,0],[0,0]],"v":[[9,9],[9,69]]},"ix":2}},{"ty":"st","bm":0,"hd":false,"mn":"ADBE Vector Graphic - Stroke","nm":"Stroke 1","lc":2,"lj":1,"ml":10,"o":{"a":0,"k":100,"ix":4},"w":{"a":0,"k":18,"ix":5},"c":{"a":0,"k":[1,1,1],"ix":3}},{"ty":"tr","a":{"a":0,"k":[0,0],"ix":1},"s":{"a":0,"k":[100,100],"ix":3},"sk":{"a":0,"k":0,"ix":4},"p":{"a":0,"k":[0,0],"ix":2},"r":{"a":0,"k":0,"ix":6},"sa":{"a":0,"k":0,"ix":5},"o":{"a":0,"k":100,"ix":7}}]},{"ty":"tm","bm":0,"hd":false,"mn":"ADBE Vector Filter - Trim","nm":"Trim Paths 1","ix":2,"e":{"a":0,"k":100,"ix":2},"o":{"a":0,"k":0,"ix":3},"s":{"a":1,"k":[{"o":{"x":0.333,"y":0},"i":{"x":0.667,"y":1},"s":[100],"t":23},{"s":[0],"t":30.0000012219251}],"ix":1},"m":1}],"ind":2},{"ty":4,"nm":"Layer 4 Outlines","sr":1,"st":0,"op":90.0000036657751,"ip":0,"hd":false,"ddd":0,"bm":0,"hasMask":false,"ao":0,"ks":{"a":{"a":0,"k":[9,148.5,0],"ix":1},"s":{"a":0,"k":[100,100,100],"ix":6},"sk":{"a":0,"k":0},"p":{"a":0,"k":[249,422.5,0],"ix":2},"r":{"a":0,"k":0,"ix":10},"sa":{"a":0,"k":0},"o":{"a":0,"k":100,"ix":11}},"ef":[],"shapes":[{"ty":"gr","bm":0,"hd":false,"mn":"ADBE Vector Group","nm":"Group 1","ix":1,"cix":2,"np":2,"it":[{"ty":"sh","bm":0,"hd":false,"mn":"ADBE Vector Shape - Group","nm":"Path 1","ix":1,"d":1,"ks":{"a":0,"k":{"c":false,"i":[[0,0],[0,0]],"o":[[0,0],[0,0]],"v":[[9,9],[9,288]]},"ix":2}},{"ty":"st","bm":0,"hd":false,"mn":"ADBE Vector Graphic - Stroke","nm":"Stroke 1","lc":2,"lj":1,"ml":10,"o":{"a":0,"k":100,"ix":4},"w":{"a":0,"k":18,"ix":5},"c":{"a":0,"k":[1,1,1],"ix":3}},{"ty":"tr","a":{"a":0,"k":[0,0],"ix":1},"s":{"a":0,"k":[100,100],"ix":3},"sk":{"a":0,"k":0,"ix":4},"p":{"a":0,"k":[0,0],"ix":2},"r":{"a":0,"k":0,"ix":6},"sa":{"a":0,"k":0,"ix":5},"o":{"a":0,"k":100,"ix":7}}]},{"ty":"tm","bm":0,"hd":false,"mn":"ADBE Vector Filter - Trim","nm":"Trim Paths 1","ix":2,"e":{"a":0,"k":100,"ix":2},"o":{"a":0,"k":0,"ix":3},"s":{"a":1,"k":[{"o":{"x":0.333,"y":0},"i":{"x":0.667,"y":1},"s":[100],"t":10},{"s":[0],"t":22.0000008960784}],"ix":1},"m":1}],"ind":3},{"ty":4,"nm":"Layer 7 Outlines","sr":1,"st":0,"op":90.0000036657751,"ip":0,"hd":false,"ddd":0,"bm":0,"hasMask":false,"ao":0,"ks":{"a":{"a":0,"k":[180,85,0],"ix":1},"s":{"a":0,"k":[100,100,100],"ix":6},"sk":{"a":0,"k":0},"p":{"a":0,"k":[249.5,521.5,0],"ix":2},"r":{"a":0,"k":0,"ix":10},"sa":{"a":0,"k":0},"o":{"a":0,"k":100,"ix":11}},"ef":[],"shapes":[{"ty":"gr","bm":0,"hd":false,"mn":"ADBE Vector Group","nm":"Group 1","ix":1,"cix":2,"np":2,"it":[{"ty":"sh","bm":0,"hd":false,"mn":"ADBE Vector Shape - Group","nm":"Path 1","ix":1,"d":1,"ks":{"a":0,"k":{"c":false,"i":[[0,0],[0,0],[0,0],[4,118],[-6,88],[0,0]],"o":[[0,0],[0,0],[0,0],[-4,-118],[6,-88],[0,0]],"v":[[-135,-40],[0,40],[135,-40],[214.5,-201.5],[100.5,-365.5],[104.5,-557.5]]},"ix":2}},{"ty":"st","bm":0,"hd":false,"mn":"ADBE Vector Graphic - Stroke","nm":"Stroke 1","lc":2,"lj":1,"ml":10,"o":{"a":0,"k":100,"ix":4},"w":{"a":0,"k":18,"ix":5},"c":{"a":0,"k":[1,1,1],"ix":3}},{"ty":"tr","a":{"a":0,"k":[0,0],"ix":1},"s":{"a":0,"k":[100,100],"ix":3},"sk":{"a":0,"k":0,"ix":4},"p":{"a":0,"k":[180,85],"ix":2},"r":{"a":0,"k":0,"ix":6},"sa":{"a":0,"k":0,"ix":5},"o":{"a":0,"k":100,"ix":7}}]},{"ty":"tm","bm":0,"hd":false,"mn":"ADBE Vector Filter - Trim","nm":"Trim Paths 1","ix":2,"e":{"a":1,"k":[{"o":{"x":0.333,"y":0},"i":{"x":0.667,"y":1},"s":[84],"t":8},{"s":[34],"t":18.000000733155}],"ix":2},"o":{"a":0,"k":0,"ix":3},"s":{"a":1,"k":[{"o":{"x":0.333,"y":0},"i":{"x":0.667,"y":1},"s":[84],"t":1},{"s":[0],"t":14.0000005702317}],"ix":1},"m":1}],"ind":4},{"ty":4,"nm":"Layer 6 Outlines","sr":1,"st":0,"op":90.0000036657751,"ip":0,"hd":false,"ddd":0,"bm":0,"hasMask":false,"ao":0,"ks":{"a":{"a":0,"k":[180,85,0],"ix":1},"s":{"a":0,"k":[100,100,100],"ix":6},"sk":{"a":0,"k":0},"p":{"a":1,"k":[{"o":{"x":0.333,"y":0},"i":{"x":0.667,"y":1},"s":[249.5,519.5,0],"t":12,"ti":[0,-16.667,0],"to":[0,16.667,0]},{"s":[249.5,619.5,0],"t":27.0000010997325}],"ix":2},"r":{"a":0,"k":0,"ix":10},"sa":{"a":0,"k":0},"o":{"a":1,"k":[{"o":{"x":0.167,"y":0.167},"i":{"x":0.833,"y":0.833},"s":[0],"t":16},{"s":[100],"t":27.0000010997325}],"ix":11}},"ef":[],"shapes":[{"ty":"gr","bm":0,"hd":false,"mn":"ADBE Vector Group","nm":"Group 1","ix":1,"cix":2,"np":2,"it":[{"ty":"sh","bm":0,"hd":false,"mn":"ADBE Vector Shape - Group","nm":"Path 1","ix":1,"d":1,"ks":{"a":0,"k":{"c":false,"i":[[0,0],[0,0],[0,0]],"o":[[0,0],[0,0],[0,0]],"v":[[-135,-40],[0,40],[135,-40]]},"ix":2}},{"ty":"st","bm":0,"hd":false,"mn":"ADBE Vector Graphic - Stroke","nm":"Stroke 1","lc":2,"lj":1,"ml":10,"o":{"a":0,"k":100,"ix":4},"w":{"a":0,"k":18,"ix":5},"c":{"a":0,"k":[1,1,1],"ix":3}},{"ty":"tr","a":{"a":0,"k":[0,0],"ix":1},"s":{"a":0,"k":[100,100],"ix":3},"sk":{"a":0,"k":0,"ix":4},"p":{"a":0,"k":[180,85],"ix":2},"r":{"a":0,"k":0,"ix":6},"sa":{"a":0,"k":0,"ix":5},"o":{"a":0,"k":100,"ix":7}}]}],"ind":5},{"ty":4,"nm":"Layer 5 Outlines","sr":1,"st":0,"op":90.0000036657751,"ip":0,"hd":false,"ddd":0,"bm":0,"hasMask":false,"ao":0,"ks":{"a":{"a":0,"k":[180,85,0],"ix":1},"s":{"a":0,"k":[100,100,100],"ix":6},"sk":{"a":0,"k":0},"p":{"a":1,"k":[{"o":{"x":0.333,"y":0},"i":{"x":0.667,"y":1},"s":[249.5,580.5,0],"t":21,"ti":[0,-22.333,0],"to":[0,22.333,0]},{"s":[249.5,714.5,0],"t":35.0000014255792}],"ix":2},"r":{"a":0,"k":0,"ix":10},"sa":{"a":0,"k":0},"o":{"a":1,"k":[{"o":{"x":0.167,"y":0.167},"i":{"x":0.833,"y":0.833},"s":[0],"t":23},{"s":[100],"t":34.0000013848484}],"ix":11}},"ef":[],"shapes":[{"ty":"gr","bm":0,"hd":false,"mn":"ADBE Vector Group","nm":"Group 1","ix":1,"cix":2,"np":2,"it":[{"ty":"sh","bm":0,"hd":false,"mn":"ADBE Vector Shape - Group","nm":"Path 1","ix":1,"d":1,"ks":{"a":0,"k":{"c":false,"i":[[0,0],[0,0],[0,0]],"o":[[0,0],[0,0],[0,0]],"v":[[-135,-40],[0,40],[135,-40]]},"ix":2}},{"ty":"st","bm":0,"hd":false,"mn":"ADBE Vector Graphic - Stroke","nm":"Stroke 1","lc":2,"lj":1,"ml":10,"o":{"a":0,"k":100,"ix":4},"w":{"a":0,"k":18,"ix":5},"c":{"a":0,"k":[1,1,1],"ix":3}},{"ty":"tr","a":{"a":0,"k":[0,0],"ix":1},"s":{"a":0,"k":[100,100],"ix":3},"sk":{"a":0,"k":0,"ix":4},"p":{"a":0,"k":[180,85],"ix":2},"r":{"a":0,"k":0,"ix":6},"sa":{"a":0,"k":0,"ix":5},"o":{"a":0,"k":100,"ix":7}}]}],"ind":6}]}]}
            // Lottie animasyonunu 
            var animationContainer = document.getElementById('scroll-animate');
            var animation = bodymovin.loadAnimation({
                container: animationContainer,
                renderer: 'svg', // veya 'canvas'
                loop: true,
                autoplay: true,
                animationData: animationData
            });
            Fancybox.bind('[data-fancybox]', {
                compact: false,
                Carousel: {
                },
                Toolbar: false,
                Thumbs:false
            });
        </script>
    </body>
</html>
