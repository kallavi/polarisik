@extends('layout.layout')

@section('title')
    Biz Kimiz?
@endsection

@section('content')
    <div class="centerBg">
        <img src="{{asset('assets/statics/contentBg.png') }}" alt="">
    </div>
    @include('include.content-head')
    
    <div class="center pt-lg-5 pt-3">
        <div class="content pt-lg-4">
            <div class="container-xxxl px-xxxl-0 px-4 px-lg-2">
                <div class="row m-0 p-0">
                    <div class="col-xxl-8 col-lg-10 col-12 mx-auto mx-auto px-0">
                        <div class="paragraph text-lg-center text-justify px-lg-5 px-xxxl-0 pt-lg-4 pt-3 px-3">
                            <p>Kurumların ve organizasyonların dönemsel insan kaynakları ihtiyaçlarına yönelik tüm faaliyetlerinde; İlgili işinizi, kültürünüzü, yönetim stratejinizi anlamaya çalışan ve size özel İK hizmetleri üreten bir firmayız.</p>
                            <p>Sahip olduğumuz genç ve dinamik kadromuz ile firmaların, kurumların ve organizasyonların dönemsel insan kaynakları ihtiyaçlarına, özellikle günlük/part-time insan kaynağı pozisyonlarında yaşadıkları sorunlarına tanıklık etmiş bir ekip olarak bizler, sizlerin işinizi, kültürünüzü, yönetim stratejinizi anlamaya çalışan ve size özel İK hizmetleri üreten bir firmayız.</p>
                            <p>Kadrolarımızda genç arkadaşlara yer vererek onlara istihdam sağlamak, iş hayatına adım atmalarına ve kendilerini geliştirmelerine katkıda bulunmak, ayrıca sektörde yapılan bir organizasyonun her birimini görmüş deneyimli personeller yetiştirmeyi hedeflemekteyiz.
                            Ekip olarak birçok festival, konser, ödül töreni, anma programı, kongre ve toplantı organizasyonlarında yer almış bulunmaktayız.</p>
                            <p>Farkını her çalışmasında ortaya koyan firmamız, personellerimizin deneyim ve özverisiyle her organizasyonda işinizi kendi işi gibi severek ve sahiplenerek firmalarınızı en iyi şekilde temsil etmekte ve hizmet kalitesini arttırmaktadır.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
