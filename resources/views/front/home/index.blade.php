@extends('layout.layout')

@section('mainContent')
    <section id="homeSection" class="vh-100 bg-primary" data-aos="fade-in" data-aos-duration="1000" data-aos-easing="ease">
        <div class="swiper carouselSwiper container-xxl px-0 px-lg-4 px-xxxl-0">
            <div class="swiper-wrapper">
                @isset($sliders)
                    @foreach ($sliders as $slider)
                    @if($slider->name)
                        <a href="/{{ request()->segment(1) }}/{{ $slider->slug }}" alt="{{ $slider->name }}" class="swiper-slide">
                            <div class="container-xxxl ps-2">
                                <div class="slide-caption col-xxl-5 col-lg-6 col line-clamp-3">
                                    {{ $slider->name }}
                                </div>
                            </div>
                        </a>
                        @endif
                    @endforeach
                @endisset
            </div>
            <div class="swiper-pagination pe-lg-4 pe-xxxl-0"></div>
        </div>
        <div class="fixedBg">
            <img class="d-none d-lg-block" src="{{ asset('assets/statics/bg-logo-2.png') }}" alt="">
            <img class="d-lg-none" src="{{ asset('assets/statics/bg-logo-2-mobile.png') }}" alt="">
        </div>
        <div class="sectionBottom container-xxxl px-xxxl-0">
            <div id="scroll-animate" class="scrollDown"></div>
        </div>
    </section>
    <section>
        <div class="container-fluid pe-lg-0">
            <div class="row mx-0 hstack">
                <div class="col-xxl-4 col-lg-5 offset-xxl-2 offset-lg-1 text-center text-lg-start pb-3"
                    data-aos="fade-right" data-aos-duration="1000" data-aos-easing="ease">
                    <div class="imageWrapper pt-1 d-lg-block d-none">
                        <img src="{{ asset('assets/statics/logo-dark.svg') }}" alt="">
                    </div>
                    <div class="paragraph">
                        <p>Sahip olduğumuz genç ve dinamik kadromuz ile firmaların, kurumların ve organizasyonların dönemsel
                            insan kaynakları ihtiyaçlarına, özellikle günlük/part-time insan kaynağı pozisyonlarında
                            yaşadıkları sorunlarına tanıklık etmiş bir ekip olarak bizler, sizlerin işinizi, kültürünüzü,
                            yönetim stratejinizi anlamaya çalışan ve size özel İK hizmetleri üreten bir firmayız.</p>
                        <p>Kadrolarımızda genç arkadaşlara yer vererek onlara istihdam sağlamak, iş hayatına adım atmalarına
                            ve kendilerini geliştirmelerine katkıda bulunmak, ayrıca sektörde yapılan bir organizasyonun her
                            birimini görmüş deneyimli personeller yetiştirmeyi hedeflemekteyiz.</p>
                    </div>
                    @if(request()->segment(1) == 'tr')
                        @php
                            $biz = 'biz-kimiz';
                        @endphp
                    @else 
                        @php
                            $biz = 'who-are-we';
                        @endphp
                    @endif
                    <a href="/{{ request()->segment(1) }}/{{ $biz }}" class="btn btn-primary rounded-pill btn-lg px-4">Devamı</a>
                </div>
                <div class="col-lg-6 px-0 pe-lg-0 ps-lg-2 pt-4 pt-lg-0" data-aos="fade-left" data-aos-duration="1000"
                    data-aos-easing="ease">
                    <div class="videoCover ps-lg-1 pt-1 pt-lg-0">
                        <div class="imageWrapper">
                            <img class="img-fluid w-100" src="{{ asset('assets/statics/video-cover.jpg') }}" alt="">
                            <a href="https://www.youtube.com/watch?v=z2X2HaTvkl8" data-fancybox class="playButton">
                                <span class="icon-play"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @if (count($services))
        <section>
            <div class="container-xxl">
                <div class="cards row row-cols-4 justify-content-center mx-0 px-4">
                    @if(request()->segment(1) == 'tr')
                        @php
                            $hizmet = 'hizmetlerimiz';
                        @endphp
                    @else 
                        @php
                            $hizmet = 'services';
                        @endphp
                    @endif
                    @foreach ($services as $service)
                        <div class="card border-0" data-aos="fade" data-aos-duration="1000" data-aos-delay="100"
                            data-aos-easing="ease">
                            <a href="/{{ request()->segment(1) }}/{{ $hizmet }}/{{ $service->slug }}">
                                <img class="d-lg-none" width="29" src="{{ asset('assets/statics/big-logo.png') }}"
                                    alt="">
                                <span>{{ $service->name }}</span>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    @if (count($partners))
        <section id="referencesSection" class="px-lg-5">
            <div class="container-xxl">
                <div class="swiper logoSwiper">
                    <div class="swiper-wrapper">
                        @foreach ($partners as $partner)
                            <div class="swiper-slide" data-aos="fade" data-aos-duration="1000" data-aos-delay="100"
                                data-aos-easing="ease">
                                <a @if ($partner->slug) href="{{ $partner->slug }}" @endif target="_blank">
                                    <div class="imageWrapper">
                                        <img src="{{ asset($partner->image) }}" alt="{{ $partner->name }}">
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination position-relative"></div>
                </div>
            </div>
        </section>
    @endif
@endsection

@section('script')
    <script>
        //anasayfa scroll animasyon
        AOS.init({
            offset: 50,
            once: true,
        });

        //anasayfadaki asagıya kaydıran scroll button
        document.getElementById('scroll-animate').addEventListener('click', function() {
            window.scrollBy({
                top: window.innerHeight,
                left: 0,
                behavior: 'smooth'
            });
        });

        //anasayfa carousel slider
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

        //anasayfa alttaki logo Slider
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

        // anasayfadaki animasyonlu button kodu 
        var animationData = {
            "nm": "Comp 3",
            "ddd": 0,
            "h": 800,
            "w": 500,
            "meta": {
                "g": "LottieFiles AE 0.1.20"
            },
            "layers": [{
                "ty": 4,
                "nm": "Shape Layer 2",
                "sr": 1,
                "st": 0,
                "op": 110.000004480392,
                "ip": 0,
                "hd": false,
                "ddd": 0,
                "bm": 0,
                "hasMask": false,
                "td": 1,
                "ao": 0,
                "ks": {
                    "a": {
                        "a": 0,
                        "k": [-18.609, -103, 0],
                        "ix": 1
                    },
                    "s": {
                        "a": 0,
                        "k": [73.493, 70.792, 100],
                        "ix": 6
                    },
                    "sk": {
                        "a": 0,
                        "k": 0
                    },
                    "p": {
                        "a": 0,
                        "k": [250, 400, 0],
                        "ix": 2
                    },
                    "r": {
                        "a": 0,
                        "k": 0,
                        "ix": 10
                    },
                    "sa": {
                        "a": 0,
                        "k": 0
                    },
                    "o": {
                        "a": 0,
                        "k": 100,
                        "ix": 11
                    }
                },
                "ef": [],
                "shapes": [{
                    "ty": "gr",
                    "bm": 0,
                    "hd": false,
                    "mn": "ADBE Vector Group",
                    "nm": "Rectangle 1",
                    "ix": 1,
                    "cix": 2,
                    "np": 3,
                    "it": [{
                        "ty": "sh",
                        "bm": 0,
                        "hd": false,
                        "mn": "ADBE Vector Shape - Group",
                        "nm": "Path 1",
                        "ix": 1,
                        "d": 1,
                        "ks": {
                            "a": 0,
                            "k": {
                                "c": true,
                                "i": [
                                    [0, -75.771],
                                    [0, 0],
                                    [75.771, 0],
                                    [0, 75.771],
                                    [0, 0],
                                    [-75.771, 0]
                                ],
                                "o": [
                                    [0, 0],
                                    [0, 75.771],
                                    [-75.771, 0],
                                    [0, 0],
                                    [0, -75.771],
                                    [75.771, 0]
                                ],
                                "v": [
                                    [137.195, -120.867],
                                    [137.195, 120.867],
                                    [0, 258.062],
                                    [-137.195, 120.867],
                                    [-137.195, -120.867],
                                    [0, -258.062]
                                ]
                            },
                            "ix": 2
                        }
                    }, {
                        "ty": "st",
                        "bm": 0,
                        "hd": false,
                        "mn": "ADBE Vector Graphic - Stroke",
                        "nm": "Stroke 1",
                        "lc": 2,
                        "lj": 1,
                        "ml": 4,
                        "o": {
                            "a": 0,
                            "k": 100,
                            "ix": 4
                        },
                        "w": {
                            "a": 0,
                            "k": 10,
                            "ix": 5
                        },
                        "c": {
                            "a": 0,
                            "k": [1, 1, 1],
                            "ix": 3
                        }
                    }, {
                        "ty": "fl",
                        "bm": 0,
                        "hd": false,
                        "mn": "ADBE Vector Graphic - Fill",
                        "nm": "Fill 1",
                        "c": {
                            "a": 0,
                            "k": [0.9843, 0.9843, 0.9922],
                            "ix": 4
                        },
                        "r": 1,
                        "o": {
                            "a": 0,
                            "k": 100,
                            "ix": 5
                        }
                    }, {
                        "ty": "tr",
                        "a": {
                            "a": 0,
                            "k": [0, 0],
                            "ix": 1
                        },
                        "s": {
                            "a": 0,
                            "k": [100, 100],
                            "ix": 3
                        },
                        "sk": {
                            "a": 0,
                            "k": 0,
                            "ix": 4
                        },
                        "p": {
                            "a": 0,
                            "k": [-18.609, -103],
                            "ix": 2
                        },
                        "r": {
                            "a": 0,
                            "k": 0,
                            "ix": 6
                        },
                        "sa": {
                            "a": 0,
                            "k": 0,
                            "ix": 5
                        },
                        "o": {
                            "a": 0,
                            "k": 100,
                            "ix": 7
                        }
                    }]
                }, {
                    "ty": "tm",
                    "bm": 0,
                    "hd": false,
                    "mn": "ADBE Vector Filter - Trim",
                    "nm": "Trim Paths 1",
                    "ix": 2,
                    "e": {
                        "a": 0,
                        "k": 100,
                        "ix": 2
                    },
                    "o": {
                        "a": 0,
                        "k": -40,
                        "ix": 3
                    },
                    "s": {
                        "a": 0,
                        "k": 0,
                        "ix": 1
                    },
                    "m": 1
                }],
                "ind": 1
            }, {
                "ty": 0,
                "nm": "arrows2",
                "sr": 1,
                "st": 0,
                "op": 90.0000036657751,
                "ip": 0,
                "hd": false,
                "ddd": 0,
                "bm": 0,
                "tt": 1,
                "hasMask": false,
                "ao": 0,
                "ks": {
                    "a": {
                        "a": 0,
                        "k": [250, 400, 0],
                        "ix": 1
                    },
                    "s": {
                        "a": 0,
                        "k": [40, 40, 100],
                        "ix": 6
                    },
                    "sk": {
                        "a": 0,
                        "k": 0
                    },
                    "p": {
                        "a": 1,
                        "k": [{
                            "o": {
                                "x": 0.333,
                                "y": 0
                            },
                            "i": {
                                "x": 0.667,
                                "y": 0.228
                            },
                            "s": [250, 384, 0],
                            "t": 56,
                            "ti": [0, -57.838, 0],
                            "to": [0, 5.029, 0]
                        }, {
                            "o": {
                                "x": 0.333,
                                "y": 0.326
                            },
                            "i": {
                                "x": 0.667,
                                "y": 1
                            },
                            "s": [250, 494.228, 0],
                            "t": 70,
                            "ti": [0, -25.878, 0],
                            "to": [0, 87.074, 0]
                        }, {
                            "s": [250, 718, 0],
                            "t": 82.0000033399285
                        }],
                        "ix": 2
                    },
                    "r": {
                        "a": 0,
                        "k": 0,
                        "ix": 10
                    },
                    "sa": {
                        "a": 0,
                        "k": 0
                    },
                    "o": {
                        "a": 0,
                        "k": 100,
                        "ix": 11
                    }
                },
                "ef": [],
                "w": 500,
                "h": 800,
                "refId": "comp_0",
                "ind": 2
            }],
            "v": "5.5.7",
            "fr": 29.9700012207031,
            "op": 110.000004480392,
            "ip": 0,
            "assets": [{
                "nm": "",
                "id": "comp_0",
                "layers": [{
                    "ty": 4,
                    "nm": "Layer 2 Outlines",
                    "sr": 1,
                    "st": 0,
                    "op": 90.0000036657751,
                    "ip": 0,
                    "hd": false,
                    "ddd": 0,
                    "bm": 0,
                    "hasMask": false,
                    "ao": 0,
                    "ks": {
                        "a": {
                            "a": 0,
                            "k": [9, 20.5, 0],
                            "ix": 1
                        },
                        "s": {
                            "a": 0,
                            "k": [100, 100, 100],
                            "ix": 6
                        },
                        "sk": {
                            "a": 0,
                            "k": 0
                        },
                        "p": {
                            "a": 0,
                            "k": [249, 140.5, 0],
                            "ix": 2
                        },
                        "r": {
                            "a": 0,
                            "k": 0,
                            "ix": 10
                        },
                        "sa": {
                            "a": 0,
                            "k": 0
                        },
                        "o": {
                            "a": 0,
                            "k": 100,
                            "ix": 11
                        }
                    },
                    "ef": [],
                    "shapes": [{
                        "ty": "gr",
                        "bm": 0,
                        "hd": false,
                        "mn": "ADBE Vector Group",
                        "nm": "Group 1",
                        "ix": 1,
                        "cix": 2,
                        "np": 2,
                        "it": [{
                            "ty": "sh",
                            "bm": 0,
                            "hd": false,
                            "mn": "ADBE Vector Shape - Group",
                            "nm": "Path 1",
                            "ix": 1,
                            "d": 1,
                            "ks": {
                                "a": 0,
                                "k": {
                                    "c": false,
                                    "i": [
                                        [0, 0],
                                        [0, 0]
                                    ],
                                    "o": [
                                        [0, 0],
                                        [0, 0]
                                    ],
                                    "v": [
                                        [9, 9],
                                        [9, 32]
                                    ]
                                },
                                "ix": 2
                            }
                        }, {
                            "ty": "st",
                            "bm": 0,
                            "hd": false,
                            "mn": "ADBE Vector Graphic - Stroke",
                            "nm": "Stroke 1",
                            "lc": 2,
                            "lj": 1,
                            "ml": 10,
                            "o": {
                                "a": 0,
                                "k": 100,
                                "ix": 4
                            },
                            "w": {
                                "a": 0,
                                "k": 18,
                                "ix": 5
                            },
                            "c": {
                                "a": 0,
                                "k": [1, 1, 1],
                                "ix": 3
                            }
                        }, {
                            "ty": "tr",
                            "a": {
                                "a": 0,
                                "k": [0, 0],
                                "ix": 1
                            },
                            "s": {
                                "a": 0,
                                "k": [100, 100],
                                "ix": 3
                            },
                            "sk": {
                                "a": 0,
                                "k": 0,
                                "ix": 4
                            },
                            "p": {
                                "a": 0,
                                "k": [0, 0],
                                "ix": 2
                            },
                            "r": {
                                "a": 0,
                                "k": 0,
                                "ix": 6
                            },
                            "sa": {
                                "a": 0,
                                "k": 0,
                                "ix": 5
                            },
                            "o": {
                                "a": 0,
                                "k": 100,
                                "ix": 7
                            }
                        }]
                    }, {
                        "ty": "tm",
                        "bm": 0,
                        "hd": false,
                        "mn": "ADBE Vector Filter - Trim",
                        "nm": "Trim Paths 1",
                        "ix": 2,
                        "e": {
                            "a": 0,
                            "k": 100,
                            "ix": 2
                        },
                        "o": {
                            "a": 0,
                            "k": 0,
                            "ix": 3
                        },
                        "s": {
                            "a": 1,
                            "k": [{
                                "o": {
                                    "x": 0.333,
                                    "y": 0
                                },
                                "i": {
                                    "x": 0.667,
                                    "y": 1
                                },
                                "s": [100],
                                "t": 30
                            }, {
                                "s": [0],
                                "t": 37.0000015070409
                            }],
                            "ix": 1
                        },
                        "m": 1
                    }],
                    "ind": 1
                }, {
                    "ty": 4,
                    "nm": "Layer 3 Outlines",
                    "sr": 1,
                    "st": 0,
                    "op": 90.0000036657751,
                    "ip": 0,
                    "hd": false,
                    "ddd": 0,
                    "bm": 0,
                    "hasMask": false,
                    "ao": 0,
                    "ks": {
                        "a": {
                            "a": 0,
                            "k": [9, 39, 0],
                            "ix": 1
                        },
                        "s": {
                            "a": 0,
                            "k": [100, 100, 100],
                            "ix": 6
                        },
                        "sk": {
                            "a": 0,
                            "k": 0
                        },
                        "p": {
                            "a": 0,
                            "k": [249, 216, 0],
                            "ix": 2
                        },
                        "r": {
                            "a": 0,
                            "k": 0,
                            "ix": 10
                        },
                        "sa": {
                            "a": 0,
                            "k": 0
                        },
                        "o": {
                            "a": 0,
                            "k": 100,
                            "ix": 11
                        }
                    },
                    "ef": [],
                    "shapes": [{
                        "ty": "gr",
                        "bm": 0,
                        "hd": false,
                        "mn": "ADBE Vector Group",
                        "nm": "Group 1",
                        "ix": 1,
                        "cix": 2,
                        "np": 2,
                        "it": [{
                            "ty": "sh",
                            "bm": 0,
                            "hd": false,
                            "mn": "ADBE Vector Shape - Group",
                            "nm": "Path 1",
                            "ix": 1,
                            "d": 1,
                            "ks": {
                                "a": 0,
                                "k": {
                                    "c": false,
                                    "i": [
                                        [0, 0],
                                        [0, 0]
                                    ],
                                    "o": [
                                        [0, 0],
                                        [0, 0]
                                    ],
                                    "v": [
                                        [9, 9],
                                        [9, 69]
                                    ]
                                },
                                "ix": 2
                            }
                        }, {
                            "ty": "st",
                            "bm": 0,
                            "hd": false,
                            "mn": "ADBE Vector Graphic - Stroke",
                            "nm": "Stroke 1",
                            "lc": 2,
                            "lj": 1,
                            "ml": 10,
                            "o": {
                                "a": 0,
                                "k": 100,
                                "ix": 4
                            },
                            "w": {
                                "a": 0,
                                "k": 18,
                                "ix": 5
                            },
                            "c": {
                                "a": 0,
                                "k": [1, 1, 1],
                                "ix": 3
                            }
                        }, {
                            "ty": "tr",
                            "a": {
                                "a": 0,
                                "k": [0, 0],
                                "ix": 1
                            },
                            "s": {
                                "a": 0,
                                "k": [100, 100],
                                "ix": 3
                            },
                            "sk": {
                                "a": 0,
                                "k": 0,
                                "ix": 4
                            },
                            "p": {
                                "a": 0,
                                "k": [0, 0],
                                "ix": 2
                            },
                            "r": {
                                "a": 0,
                                "k": 0,
                                "ix": 6
                            },
                            "sa": {
                                "a": 0,
                                "k": 0,
                                "ix": 5
                            },
                            "o": {
                                "a": 0,
                                "k": 100,
                                "ix": 7
                            }
                        }]
                    }, {
                        "ty": "tm",
                        "bm": 0,
                        "hd": false,
                        "mn": "ADBE Vector Filter - Trim",
                        "nm": "Trim Paths 1",
                        "ix": 2,
                        "e": {
                            "a": 0,
                            "k": 100,
                            "ix": 2
                        },
                        "o": {
                            "a": 0,
                            "k": 0,
                            "ix": 3
                        },
                        "s": {
                            "a": 1,
                            "k": [{
                                "o": {
                                    "x": 0.333,
                                    "y": 0
                                },
                                "i": {
                                    "x": 0.667,
                                    "y": 1
                                },
                                "s": [100],
                                "t": 23
                            }, {
                                "s": [0],
                                "t": 30.0000012219251
                            }],
                            "ix": 1
                        },
                        "m": 1
                    }],
                    "ind": 2
                }, {
                    "ty": 4,
                    "nm": "Layer 4 Outlines",
                    "sr": 1,
                    "st": 0,
                    "op": 90.0000036657751,
                    "ip": 0,
                    "hd": false,
                    "ddd": 0,
                    "bm": 0,
                    "hasMask": false,
                    "ao": 0,
                    "ks": {
                        "a": {
                            "a": 0,
                            "k": [9, 148.5, 0],
                            "ix": 1
                        },
                        "s": {
                            "a": 0,
                            "k": [100, 100, 100],
                            "ix": 6
                        },
                        "sk": {
                            "a": 0,
                            "k": 0
                        },
                        "p": {
                            "a": 0,
                            "k": [249, 422.5, 0],
                            "ix": 2
                        },
                        "r": {
                            "a": 0,
                            "k": 0,
                            "ix": 10
                        },
                        "sa": {
                            "a": 0,
                            "k": 0
                        },
                        "o": {
                            "a": 0,
                            "k": 100,
                            "ix": 11
                        }
                    },
                    "ef": [],
                    "shapes": [{
                        "ty": "gr",
                        "bm": 0,
                        "hd": false,
                        "mn": "ADBE Vector Group",
                        "nm": "Group 1",
                        "ix": 1,
                        "cix": 2,
                        "np": 2,
                        "it": [{
                            "ty": "sh",
                            "bm": 0,
                            "hd": false,
                            "mn": "ADBE Vector Shape - Group",
                            "nm": "Path 1",
                            "ix": 1,
                            "d": 1,
                            "ks": {
                                "a": 0,
                                "k": {
                                    "c": false,
                                    "i": [
                                        [0, 0],
                                        [0, 0]
                                    ],
                                    "o": [
                                        [0, 0],
                                        [0, 0]
                                    ],
                                    "v": [
                                        [9, 9],
                                        [9, 288]
                                    ]
                                },
                                "ix": 2
                            }
                        }, {
                            "ty": "st",
                            "bm": 0,
                            "hd": false,
                            "mn": "ADBE Vector Graphic - Stroke",
                            "nm": "Stroke 1",
                            "lc": 2,
                            "lj": 1,
                            "ml": 10,
                            "o": {
                                "a": 0,
                                "k": 100,
                                "ix": 4
                            },
                            "w": {
                                "a": 0,
                                "k": 18,
                                "ix": 5
                            },
                            "c": {
                                "a": 0,
                                "k": [1, 1, 1],
                                "ix": 3
                            }
                        }, {
                            "ty": "tr",
                            "a": {
                                "a": 0,
                                "k": [0, 0],
                                "ix": 1
                            },
                            "s": {
                                "a": 0,
                                "k": [100, 100],
                                "ix": 3
                            },
                            "sk": {
                                "a": 0,
                                "k": 0,
                                "ix": 4
                            },
                            "p": {
                                "a": 0,
                                "k": [0, 0],
                                "ix": 2
                            },
                            "r": {
                                "a": 0,
                                "k": 0,
                                "ix": 6
                            },
                            "sa": {
                                "a": 0,
                                "k": 0,
                                "ix": 5
                            },
                            "o": {
                                "a": 0,
                                "k": 100,
                                "ix": 7
                            }
                        }]
                    }, {
                        "ty": "tm",
                        "bm": 0,
                        "hd": false,
                        "mn": "ADBE Vector Filter - Trim",
                        "nm": "Trim Paths 1",
                        "ix": 2,
                        "e": {
                            "a": 0,
                            "k": 100,
                            "ix": 2
                        },
                        "o": {
                            "a": 0,
                            "k": 0,
                            "ix": 3
                        },
                        "s": {
                            "a": 1,
                            "k": [{
                                "o": {
                                    "x": 0.333,
                                    "y": 0
                                },
                                "i": {
                                    "x": 0.667,
                                    "y": 1
                                },
                                "s": [100],
                                "t": 10
                            }, {
                                "s": [0],
                                "t": 22.0000008960784
                            }],
                            "ix": 1
                        },
                        "m": 1
                    }],
                    "ind": 3
                }, {
                    "ty": 4,
                    "nm": "Layer 7 Outlines",
                    "sr": 1,
                    "st": 0,
                    "op": 90.0000036657751,
                    "ip": 0,
                    "hd": false,
                    "ddd": 0,
                    "bm": 0,
                    "hasMask": false,
                    "ao": 0,
                    "ks": {
                        "a": {
                            "a": 0,
                            "k": [180, 85, 0],
                            "ix": 1
                        },
                        "s": {
                            "a": 0,
                            "k": [100, 100, 100],
                            "ix": 6
                        },
                        "sk": {
                            "a": 0,
                            "k": 0
                        },
                        "p": {
                            "a": 0,
                            "k": [249.5, 521.5, 0],
                            "ix": 2
                        },
                        "r": {
                            "a": 0,
                            "k": 0,
                            "ix": 10
                        },
                        "sa": {
                            "a": 0,
                            "k": 0
                        },
                        "o": {
                            "a": 0,
                            "k": 100,
                            "ix": 11
                        }
                    },
                    "ef": [],
                    "shapes": [{
                        "ty": "gr",
                        "bm": 0,
                        "hd": false,
                        "mn": "ADBE Vector Group",
                        "nm": "Group 1",
                        "ix": 1,
                        "cix": 2,
                        "np": 2,
                        "it": [{
                            "ty": "sh",
                            "bm": 0,
                            "hd": false,
                            "mn": "ADBE Vector Shape - Group",
                            "nm": "Path 1",
                            "ix": 1,
                            "d": 1,
                            "ks": {
                                "a": 0,
                                "k": {
                                    "c": false,
                                    "i": [
                                        [0, 0],
                                        [0, 0],
                                        [0, 0],
                                        [4, 118],
                                        [-6, 88],
                                        [0, 0]
                                    ],
                                    "o": [
                                        [0, 0],
                                        [0, 0],
                                        [0, 0],
                                        [-4, -118],
                                        [6, -88],
                                        [0, 0]
                                    ],
                                    "v": [
                                        [-135, -40],
                                        [0, 40],
                                        [135, -40],
                                        [214.5, -201.5],
                                        [100.5, -365.5],
                                        [104.5, -557.5]
                                    ]
                                },
                                "ix": 2
                            }
                        }, {
                            "ty": "st",
                            "bm": 0,
                            "hd": false,
                            "mn": "ADBE Vector Graphic - Stroke",
                            "nm": "Stroke 1",
                            "lc": 2,
                            "lj": 1,
                            "ml": 10,
                            "o": {
                                "a": 0,
                                "k": 100,
                                "ix": 4
                            },
                            "w": {
                                "a": 0,
                                "k": 18,
                                "ix": 5
                            },
                            "c": {
                                "a": 0,
                                "k": [1, 1, 1],
                                "ix": 3
                            }
                        }, {
                            "ty": "tr",
                            "a": {
                                "a": 0,
                                "k": [0, 0],
                                "ix": 1
                            },
                            "s": {
                                "a": 0,
                                "k": [100, 100],
                                "ix": 3
                            },
                            "sk": {
                                "a": 0,
                                "k": 0,
                                "ix": 4
                            },
                            "p": {
                                "a": 0,
                                "k": [180, 85],
                                "ix": 2
                            },
                            "r": {
                                "a": 0,
                                "k": 0,
                                "ix": 6
                            },
                            "sa": {
                                "a": 0,
                                "k": 0,
                                "ix": 5
                            },
                            "o": {
                                "a": 0,
                                "k": 100,
                                "ix": 7
                            }
                        }]
                    }, {
                        "ty": "tm",
                        "bm": 0,
                        "hd": false,
                        "mn": "ADBE Vector Filter - Trim",
                        "nm": "Trim Paths 1",
                        "ix": 2,
                        "e": {
                            "a": 1,
                            "k": [{
                                "o": {
                                    "x": 0.333,
                                    "y": 0
                                },
                                "i": {
                                    "x": 0.667,
                                    "y": 1
                                },
                                "s": [84],
                                "t": 8
                            }, {
                                "s": [34],
                                "t": 18.000000733155
                            }],
                            "ix": 2
                        },
                        "o": {
                            "a": 0,
                            "k": 0,
                            "ix": 3
                        },
                        "s": {
                            "a": 1,
                            "k": [{
                                "o": {
                                    "x": 0.333,
                                    "y": 0
                                },
                                "i": {
                                    "x": 0.667,
                                    "y": 1
                                },
                                "s": [84],
                                "t": 1
                            }, {
                                "s": [0],
                                "t": 14.0000005702317
                            }],
                            "ix": 1
                        },
                        "m": 1
                    }],
                    "ind": 4
                }, {
                    "ty": 4,
                    "nm": "Layer 6 Outlines",
                    "sr": 1,
                    "st": 0,
                    "op": 90.0000036657751,
                    "ip": 0,
                    "hd": false,
                    "ddd": 0,
                    "bm": 0,
                    "hasMask": false,
                    "ao": 0,
                    "ks": {
                        "a": {
                            "a": 0,
                            "k": [180, 85, 0],
                            "ix": 1
                        },
                        "s": {
                            "a": 0,
                            "k": [100, 100, 100],
                            "ix": 6
                        },
                        "sk": {
                            "a": 0,
                            "k": 0
                        },
                        "p": {
                            "a": 1,
                            "k": [{
                                "o": {
                                    "x": 0.333,
                                    "y": 0
                                },
                                "i": {
                                    "x": 0.667,
                                    "y": 1
                                },
                                "s": [249.5, 519.5, 0],
                                "t": 12,
                                "ti": [0, -16.667, 0],
                                "to": [0, 16.667, 0]
                            }, {
                                "s": [249.5, 619.5, 0],
                                "t": 27.0000010997325
                            }],
                            "ix": 2
                        },
                        "r": {
                            "a": 0,
                            "k": 0,
                            "ix": 10
                        },
                        "sa": {
                            "a": 0,
                            "k": 0
                        },
                        "o": {
                            "a": 1,
                            "k": [{
                                "o": {
                                    "x": 0.167,
                                    "y": 0.167
                                },
                                "i": {
                                    "x": 0.833,
                                    "y": 0.833
                                },
                                "s": [0],
                                "t": 16
                            }, {
                                "s": [100],
                                "t": 27.0000010997325
                            }],
                            "ix": 11
                        }
                    },
                    "ef": [],
                    "shapes": [{
                        "ty": "gr",
                        "bm": 0,
                        "hd": false,
                        "mn": "ADBE Vector Group",
                        "nm": "Group 1",
                        "ix": 1,
                        "cix": 2,
                        "np": 2,
                        "it": [{
                            "ty": "sh",
                            "bm": 0,
                            "hd": false,
                            "mn": "ADBE Vector Shape - Group",
                            "nm": "Path 1",
                            "ix": 1,
                            "d": 1,
                            "ks": {
                                "a": 0,
                                "k": {
                                    "c": false,
                                    "i": [
                                        [0, 0],
                                        [0, 0],
                                        [0, 0]
                                    ],
                                    "o": [
                                        [0, 0],
                                        [0, 0],
                                        [0, 0]
                                    ],
                                    "v": [
                                        [-135, -40],
                                        [0, 40],
                                        [135, -40]
                                    ]
                                },
                                "ix": 2
                            }
                        }, {
                            "ty": "st",
                            "bm": 0,
                            "hd": false,
                            "mn": "ADBE Vector Graphic - Stroke",
                            "nm": "Stroke 1",
                            "lc": 2,
                            "lj": 1,
                            "ml": 10,
                            "o": {
                                "a": 0,
                                "k": 100,
                                "ix": 4
                            },
                            "w": {
                                "a": 0,
                                "k": 18,
                                "ix": 5
                            },
                            "c": {
                                "a": 0,
                                "k": [1, 1, 1],
                                "ix": 3
                            }
                        }, {
                            "ty": "tr",
                            "a": {
                                "a": 0,
                                "k": [0, 0],
                                "ix": 1
                            },
                            "s": {
                                "a": 0,
                                "k": [100, 100],
                                "ix": 3
                            },
                            "sk": {
                                "a": 0,
                                "k": 0,
                                "ix": 4
                            },
                            "p": {
                                "a": 0,
                                "k": [180, 85],
                                "ix": 2
                            },
                            "r": {
                                "a": 0,
                                "k": 0,
                                "ix": 6
                            },
                            "sa": {
                                "a": 0,
                                "k": 0,
                                "ix": 5
                            },
                            "o": {
                                "a": 0,
                                "k": 100,
                                "ix": 7
                            }
                        }]
                    }],
                    "ind": 5
                }, {
                    "ty": 4,
                    "nm": "Layer 5 Outlines",
                    "sr": 1,
                    "st": 0,
                    "op": 90.0000036657751,
                    "ip": 0,
                    "hd": false,
                    "ddd": 0,
                    "bm": 0,
                    "hasMask": false,
                    "ao": 0,
                    "ks": {
                        "a": {
                            "a": 0,
                            "k": [180, 85, 0],
                            "ix": 1
                        },
                        "s": {
                            "a": 0,
                            "k": [100, 100, 100],
                            "ix": 6
                        },
                        "sk": {
                            "a": 0,
                            "k": 0
                        },
                        "p": {
                            "a": 1,
                            "k": [{
                                "o": {
                                    "x": 0.333,
                                    "y": 0
                                },
                                "i": {
                                    "x": 0.667,
                                    "y": 1
                                },
                                "s": [249.5, 580.5, 0],
                                "t": 21,
                                "ti": [0, -22.333, 0],
                                "to": [0, 22.333, 0]
                            }, {
                                "s": [249.5, 714.5, 0],
                                "t": 35.0000014255792
                            }],
                            "ix": 2
                        },
                        "r": {
                            "a": 0,
                            "k": 0,
                            "ix": 10
                        },
                        "sa": {
                            "a": 0,
                            "k": 0
                        },
                        "o": {
                            "a": 1,
                            "k": [{
                                "o": {
                                    "x": 0.167,
                                    "y": 0.167
                                },
                                "i": {
                                    "x": 0.833,
                                    "y": 0.833
                                },
                                "s": [0],
                                "t": 23
                            }, {
                                "s": [100],
                                "t": 34.0000013848484
                            }],
                            "ix": 11
                        }
                    },
                    "ef": [],
                    "shapes": [{
                        "ty": "gr",
                        "bm": 0,
                        "hd": false,
                        "mn": "ADBE Vector Group",
                        "nm": "Group 1",
                        "ix": 1,
                        "cix": 2,
                        "np": 2,
                        "it": [{
                            "ty": "sh",
                            "bm": 0,
                            "hd": false,
                            "mn": "ADBE Vector Shape - Group",
                            "nm": "Path 1",
                            "ix": 1,
                            "d": 1,
                            "ks": {
                                "a": 0,
                                "k": {
                                    "c": false,
                                    "i": [
                                        [0, 0],
                                        [0, 0],
                                        [0, 0]
                                    ],
                                    "o": [
                                        [0, 0],
                                        [0, 0],
                                        [0, 0]
                                    ],
                                    "v": [
                                        [-135, -40],
                                        [0, 40],
                                        [135, -40]
                                    ]
                                },
                                "ix": 2
                            }
                        }, {
                            "ty": "st",
                            "bm": 0,
                            "hd": false,
                            "mn": "ADBE Vector Graphic - Stroke",
                            "nm": "Stroke 1",
                            "lc": 2,
                            "lj": 1,
                            "ml": 10,
                            "o": {
                                "a": 0,
                                "k": 100,
                                "ix": 4
                            },
                            "w": {
                                "a": 0,
                                "k": 18,
                                "ix": 5
                            },
                            "c": {
                                "a": 0,
                                "k": [1, 1, 1],
                                "ix": 3
                            }
                        }, {
                            "ty": "tr",
                            "a": {
                                "a": 0,
                                "k": [0, 0],
                                "ix": 1
                            },
                            "s": {
                                "a": 0,
                                "k": [100, 100],
                                "ix": 3
                            },
                            "sk": {
                                "a": 0,
                                "k": 0,
                                "ix": 4
                            },
                            "p": {
                                "a": 0,
                                "k": [180, 85],
                                "ix": 2
                            },
                            "r": {
                                "a": 0,
                                "k": 0,
                                "ix": 6
                            },
                            "sa": {
                                "a": 0,
                                "k": 0,
                                "ix": 5
                            },
                            "o": {
                                "a": 0,
                                "k": 100,
                                "ix": 7
                            }
                        }]
                    }],
                    "ind": 6
                }]
            }]
        }
        var animationContainer = document.getElementById('scroll-animate');
        var animation = bodymovin.loadAnimation({
            container: animationContainer,
            renderer: 'svg',
            loop: true,
            autoplay: true,
            animationData: animationData
        });
    </script>
@endsection
