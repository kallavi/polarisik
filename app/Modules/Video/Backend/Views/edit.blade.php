@extends('layout.admin.layout')
@section('pageTitle')
    Video Galeri Güncelle
@endsection
@section('breadcrumbs')
    <x-admin.breadcrumb-item :parent="''">
        <x-slot:item>
            <x-admin.breadcrumb-item :icon="'true'" :fontSize="'fs-6'" :link="route('backoffice.index')" :iconName="'ki-home'" />
            <x-admin.breadcrumb-item :icon="'true'" />
            <x-admin.breadcrumb-item :title="'Video Galeri'" :link="route('admin.video.index')" :class="'text-gray-600 fw-bold lh-1'" />
            <x-admin.breadcrumb-item :icon="'true'" />
            <x-admin.breadcrumb-item :title="'Video Galeri Güncelle'" :class="'text-gray-600 fw-bold lh-1'" />

        </x-slot:item>
    </x-admin.breadcrumb-item>
@endsection
@section('rightContent')
    <x-admin.tags-wrapper :class="'d-flex align-items-center'">
        <x-slot:tagsWrapper>
            <x-admin.button :title="'Değişiklikleri Geri Al'" :class="'d-flex flex-center h-35px h-lg-40px ms-5 btn-reset'" :light="''" :data="[
                'bs-toggle' => 'modal',
                'bs-target' => '#kt_modal_create_campaign',
            ]" />
            <x-admin.button :title="'Vazgeç'" :class="'d-flex flex-center h-35px h-lg-40px ms-5 btn-back'" :color="'danger'" :data="[
                'bs-toggle' => 'modal',
                'bs-target' => '#kt_modal_create_campaign',
            ]" />
            <x-admin.button :title="'Güncelle'" :class="'d-flex flex-center h-35px h-lg-40px ms-5 btn-create'" :color="'success'" :data="[
                'bs-toggle' => 'modal',
                'bs-target' => '#kt_modal_create_campaign',
            ]" />
        </x-slot:tagsWrapper>
    </x-admin.tags-wrapper>
@endsection
@section('app')
    <x-admin.wrapper-container>
        <x-slot:content>
            <!--begin:::Tabs-->
            <x-admin.tab :tabsType1="'true'" :class="'nav-custom nav-line-tabs-2x border-0 fs-4 fw-semibold mb-8'" :tabNavs="'true'" :tabItem="[
                'kt_customer_view_overview_tab' => 'Türkçe',
                'kt_customer_view_overview_events_and_logs_tab' => 'İngilizce',
                {{-- 'kt_customer_view_overview_events_and_logs_tab2' => 'Arapça', --}}
            ]">
            </x-admin.tab>

            <x-admin.form :id="'kt_ecommerce_add_product_form'" :action="route('admin.video.update', $video->id)" :method="'POST'" :class="'blog_create_form'">
                <x-slot:form>
                    @method('PUT')
                    <x-admin.tab :tabsContentId="'myTabContent'" :tabsType1="'true'">
                        <x-slot:tabsContent>
                            <x-admin.tab :tabsType1="'true'" :tabId="'kt_customer_view_overview_tab'" :tabPaneClass="'show active'">
                                <x-slot:tabContent>
                                    <div class="d-flex flex-column flex-xl-row">
                                        <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10 ">
                                            <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                                                <x-admin.card :class="'card-flush border-0 bg-gray-300 bg-opacity-20 mb-6 pt-12'" :cardHeaderClass="'min-h-25px'">
                                                    <x-slot:cardHeader>
                                                        <div class="card-title m-0">
                                                            <h2>Genel</h2>
                                                        </div>
                                                    </x-slot:cardHeader>
                                                    <x-slot:cardBody>
                                                        <x-admin.custom-grid>
                                                            <x-slot:gridRow>
                                                                <x-admin.form-input :type="'hidden'" :id="'video_id'" :value="$video->id" />
                                                                <x-admin.form-input :inputParentClass="'input-group-lg mb-6 fv-row col-6'" :labelTag="'label'" :labelText="'Başlık'" :labelClass="'form-label required'" :name="'name:tr'"
                                                                    :placeholder="'Video Galeri Başlık'" :class="'form-control name-tr'" :value="$video->{'name:tr'}" />
                                                                <x-admin.form-input :inputParentClass="'input-group-lg mb-6 fv-row col-6'" :labelTag="'label'" :labelText="'Video Bağlantı'" :labelClass="'form-label'" :name="'url:tr'"
                                                                    :placeholder="'Video Bağlantı'" :class="'form-control '" :value="$video->{'url:tr'}" />
 
                                                            </x-slot:gridRow>
                                                        </x-admin.custom-grid>
                                                    </x-slot:cardBody>
                                                </x-admin.card>
                                                {{-- <x-admin.card :class="'card-flush border-0 bg-gray-300 bg-opacity-20 pt-12'" :cardHeaderClass="'min-h-25px'">
                                                    <x-slot:cardHeader>
                                                        <div class="card-title m-0">
                                                            <h2>Medya Galeri</h2>
                                                        </div>
                                                    </x-slot:cardHeader>
                                                    <x-slot:cardBody>
                                                        <x-admin.tags-wrapper :class="'mx-n3 d-flex flex-wrap'">
                                                            <x-slot:tagsWrapper>
                                                                @foreach ($gallery->gallery as $galleryImage)
                                                                    <x-admin.image-input :removaAvatar="''"
                                                                        :size="'w-150px h-150px'" :placeholderImg="''"
                                                                        :parentClass="'px-3 my-3'" :imgUrl="'/' . $galleryImage->slug" />
                                                                @endforeach
                                                            </x-slot:tagsWrapper>
                                                        </x-admin.tags-wrapper>
                                                        <div class="row col-lg-12 fv-row mt-5 mb-10">
                                                            <div class="fv-row">
                                                                <div class="dropzone dz-clickable" id="gallery">
                                                                    <div
                                                                        class="dz-message needsclick d-flex align-items-center">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="43" height="40"
                                                                            viewBox="0 0 43 40" fill="none">
                                                                            <path
                                                                                d="M41.2502 14.2436C40.846 7.35029 35.4752 1.96029 28.988 1.96029H19.363C18.7811 1.3857 18.0847 0.927563 17.3145 0.612744C16.5443 0.297924 15.7158 0.132764 14.8777 0.126953H11.0277C9.67795 0.129333 8.34201 0.385802 7.0967 0.881613C5.85138 1.37742 4.72127 2.10279 3.77133 3.01601C2.82139 3.92923 2.07038 5.01229 1.56147 6.2029C1.05256 7.3935 0.795803 8.66818 0.805954 9.95362V28.6536C0.805954 31.571 2.02283 34.3689 4.18887 36.4318C6.35492 38.4947 9.2927 39.6536 12.356 39.6536H30.605C33.6682 39.6536 36.606 38.4947 38.772 36.4318C40.9381 34.3689 42.155 31.571 42.155 28.6536V18.827C42.0138 17.2744 41.7107 15.739 41.2502 14.2436V14.2436ZM28.988 4.58195C30.7235 4.63585 32.4092 5.14777 33.8572 6.06063C35.3051 6.97349 36.4584 8.25143 37.1885 9.75195C35.2676 8.46204 32.9745 7.77035 30.6242 7.77195H24.8492C24.1265 7.76627 23.422 7.55572 22.8254 7.16716C22.2289 6.77861 21.7674 6.22965 21.4997 5.59029L21.0762 4.58195H28.988ZM39.4407 28.6536C39.4407 30.8839 38.5131 33.0235 36.8608 34.604C35.2084 36.1845 32.966 37.0773 30.6242 37.087H12.3752C10.0334 37.0773 7.79096 36.1845 6.13865 34.604C4.48633 33.0235 3.55868 30.8839 3.5587 28.6536V9.95362C3.5587 8.06536 4.34499 6.25416 5.74515 4.91724C7.14531 3.58032 9.04503 2.82681 11.0277 2.82195H14.8777C15.607 2.82033 16.3199 3.02747 16.924 3.4165C17.5282 3.80552 17.9956 4.35847 18.2657 5.00362L18.9202 6.56195C19.3915 7.69805 20.2109 8.67279 21.2717 9.35942C22.3326 10.0461 23.5858 10.4128 24.8685 10.412H30.6435C32.9835 10.4168 35.226 11.3055 36.8788 12.8831C38.5317 14.4607 39.46 16.5983 39.46 18.827L39.4407 28.6536Z"
                                                                                fill="#3E97FF" />
                                                                            <path
                                                                                d="M28.2756 21.5764C28.1534 21.7153 28.0034 21.8298 27.8345 21.9133C27.6656 21.9968 27.481 22.0477 27.2914 22.0631C27.1018 22.0784 26.9108 22.0579 26.7295 22.0027C26.5483 21.9475 26.3802 21.8587 26.2351 21.7414L23.1551 19.1747V28.543C23.1551 28.9077 23.003 29.2575 22.7323 29.5153C22.4615 29.7732 22.0943 29.918 21.7114 29.918C21.3285 29.918 20.9612 29.7732 20.6905 29.5153C20.4197 29.2575 20.2676 28.9077 20.2676 28.543V19.0464L16.7064 21.8331C16.4172 22.0389 16.056 22.1308 15.6977 22.0899C15.3393 22.0489 15.0112 21.8782 14.7814 21.6131C14.5431 21.3222 14.4338 20.954 14.477 20.5874C14.5202 20.2207 14.7124 19.8848 15.0124 19.6514L20.8066 15.0497L21.0184 14.9397L21.1916 14.848C21.5261 14.7251 21.8966 14.7251 22.2311 14.848L22.4236 14.9581L22.6546 15.0864L28.1216 19.6147C28.4102 19.8584 28.5877 20.1995 28.6165 20.5658C28.6452 20.9321 28.523 21.2946 28.2756 21.5764V21.5764Z"
                                                                                fill="#3E97FF" />
                                                                        </svg>
                                                                        <div class="ms-4">
                                                                            <h3 class="fs-5 fw-bold text-gray-900 mb-1">
                                                                                Dosyaları buraya bırakın veya yüklemek için
                                                                                tıklayın.</h3>
                                                                            <span
                                                                                class="fs-7 fw-semibold text-dark opacity-50">10
                                                                                dosyaya kadar yükleme</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </x-slot:cardBody>
                                                </x-admin.card> --}}
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px min-w-lg-300px mb-7 ms-lg-10">
                                            <x-admin.card :class="'border-0 card-flush bg-gray-300 bg-opacity-20'">
                                                <x-slot:cardHeader>
                                                    <div class="card-title">
                                                        <h2>Görsel</h2>
                                                    </div>
                                                </x-slot:cardHeader>
                                                <x-slot:cardBody>
                                                    <x-admin.image-input :changeAvatar="''" :removeAvatar="''" :name="'image'" :size="'w-150px h-150px'" :parentClass="'my-3 text-center'"
                                                        :class="'mb-3'" :textMuted="'Sadece *.png, *.jpg veya *.jpeg uzantılı görsel yükleyebilirsiniz'" :imgUrl="'/' . $video->image" />
                                                </x-slot:cardBody>
                                            </x-admin.card>
                                            <x-admin.card :class="'border-0 card-flush bg-gray-300 bg-opacity-20 py-4'" :cardBodyClass="'pt-0'">
                                                <x-slot:cardHeader>
                                                    <div class="card-title">
                                                        <h2>Durum</h2>
                                                    </div>
                                                    <div class="card-toolbar">
                                                        <div class="rounded-circle bg-primary w-15px h-15px" id="kt_ecommerce_add_product_status"></div>
                                                    </div>
                                                </x-slot:cardHeader>
                                                <x-slot:cardBody>
                                                    <x-admin.form-select :defaultValue="$video->status" :name="'status'" :options="[
                                                        'published' => 'Yayınlanmış',
                                                        'draft' => 'Pasif',
                                                    ]" />
                                                </x-slot:cardBody>
                                            </x-admin.card>
                                            <x-admin.card :class="'card-flush py-4 bg-gray-300 bg-opacity-20 border-0'">
                                                <x-slot:cardHeader>
                                                    <div class="card-title">
                                                        <h2>SEO</h2>
                                                    </div>
                                                </x-slot:cardHeader>
                                                <x-slot:cardBody>
                                                    <x-admin.form-input :inputParentClass="'input-group-lg mb-6'" :name="'seo_keywords:tr'" :labelTag="'label'" :labelText="'Etiketler'" :labelClass="'form-label'"
                                                        :placeholder="'Anahtar Kelime'" :class="'form-control'" :id="'seo_keywords_tr'" :value="$video->{'seo_keywords:tr'}" />
                                                    <x-admin.form-textarea :inputParentClass="'mb-6'" :name="'seo_description:tr'" :labelTag="'label'" :labelText="'Sayfa Açıklaması'" :labelClass="'form-label'"
                                                        :placeholder="'Açıklama Girin'" :rows="'4'" :textareaContent="$video->{'seo_description:tr'}" />
                                                </x-slot:cardBody>
                                            </x-admin.card>
                                        </div>
                                    </div>
                                </x-slot:tabContent>
                            </x-admin.tab>
                            <x-admin.tab :tabsType1="'true'" :tabId="'kt_customer_view_overview_events_and_logs_tab'">
                                <x-slot:tabContent>
                                    <div class="d-flex flex-column flex-xl-row">
                                        <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10 ">
                                            <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                                                <x-admin.card :class="'card-flush border-0 bg-gray-300 bg-opacity-20 mb-6 pt-12'" :cardHeaderClass="'min-h-25px'">
                                                    <x-slot:cardHeader>
                                                        <div class="card-title m-0">
                                                            <h2>Genel</h2>
                                                        </div>
                                                    </x-slot:cardHeader>
                                                    <x-slot:cardBody>
                                                        <x-admin.custom-grid>
                                                            <x-slot:gridRow>
                                                                <x-admin.form-input :inputParentClass="'input-group-lg mb-6 fv-row col-6'" :labelTag="'label'" :labelText="'Başlık'" :name="'name:en'"
                                                                    :labelClass="'form-label required'" :placeholder="'Video Galeri Başlık'" :class="'form-control name-en'" :value="$video->{'name:en'}" />
                                                                <x-admin.form-input :inputParentClass="'input-group-lg mb-6 fv-row col-6'" :labelTag="'label'" :labelText="'Video Bağlantı'" :labelClass="'form-label'" :name="'url:en'"
                                                                    :placeholder="'Video Bağlantı'" :class="'form-control '" :value="$video->{'url:en'}" />
                                                            </x-slot:gridRow>
                                                        </x-admin.custom-grid>
                                                    </x-slot:cardBody>
                                                </x-admin.card>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px min-w-lg-300px mb-7 ms-lg-10">
                                            <x-admin.card :class="'card-flush py-4 bg-gray-300 bg-opacity-20 border-0'">
                                                <x-slot:cardHeader>
                                                    <div class="card-title">
                                                        <h2>SEO</h2>
                                                    </div>
                                                </x-slot:cardHeader>
                                                <x-slot:cardBody>
                                                    <x-admin.form-input :inputParentClass="'input-group-lg mb-6'" :labelTag="'label'" :labelText="'Etiketler'" :labelClass="'form-label'" :id="'seo_keywords_en'"
                                                        :name="'seo_keywords:en'" :placeholder="'Anahtar Kelime'" :class="'form-control'" :value="$video->{'seo_keywords:en'}" />
                                                    <x-admin.form-textarea :inputParentClass="'mb-6'" :labelTag="'label'" :labelText="'Sayfa Açıklaması'" :labelClass="'form-label'" :name="'seo_description:en'"
                                                        :placeholder="'Açıklama Girin'" :rows="'4'" :textareaContent="$video->{'seo_description:en'}" />
                                                </x-slot:cardBody>
                                            </x-admin.card>
                                        </div>
                                    </div>
                                </x-slot:tabContent>
                            </x-admin.tab>
                            <x-admin.tab :tabsType1="'true'" :tabId="'kt_customer_view_overview_events_and_logs_tab2'">
                                <x-slot:tabContent>
                                    <div class="d-flex flex-column flex-xl-row">
                                        <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10 ">
                                            <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                                                <x-admin.card :class="'card-flush border-0 bg-gray-300 bg-opacity-20 mb-6 pt-12'" :cardHeaderClass="'min-h-25px'">
                                                    <x-slot:cardHeader>
                                                        <div class="card-title m-0">
                                                            <h2>Genel</h2>
                                                        </div>
                                                    </x-slot:cardHeader>
                                                    <x-slot:cardBody>
                                                        <x-admin.custom-grid>
                                                            <x-slot:gridRow>
                                                                <x-admin.form-input :inputParentClass="'input-group-lg mb-6 fv-row col-6'" :labelTag="'label'" :labelText="'Başlık'" :name="'name:ar'"
                                                                    :labelClass="'form-label required'" :placeholder="'Video Galeri Başlık'" :class="'form-control text-end name-ar'" :value="$video->{'name:ar'}" />
                                                                    <x-admin.form-input :inputParentClass="'input-group-lg mb-6 fv-row col-6'" :labelTag="'label'" :labelText="'Video Bağlantı'" :labelClass="'form-label'" :name="'url:ar'"
                                                                    :placeholder="'Video Bağlantı'" :class="'form-control '" :value="$video->{'url:ar'}" />
                                                            </x-slot:gridRow>
                                                        </x-admin.custom-grid>
                                                    </x-slot:cardBody>
                                                </x-admin.card>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px min-w-lg-300px mb-7 ms-lg-10">
                                            <x-admin.card :class="'card-flush py-4 bg-gray-300 bg-opacity-20 border-0'">
                                                <x-slot:cardHeader>
                                                    <div class="card-title">
                                                        <h2>SEO</h2>
                                                    </div>
                                                </x-slot:cardHeader>
                                                <x-slot:cardBody>
                                                    <x-admin.form-input :inputParentClass="'input-group-lg mb-6'" :labelTag="'label'" :labelText="'Etiketler'" :labelClass="'form-label'" :id="'seo_keywords_ar'"
                                                        :name="'seo_keywords:ar'" :placeholder="'Anahtar Kelime'" :class="'form-control text-end'" :value="$video->{'seo_keywords:ar'}" />
                                                    <x-admin.form-textarea :inputParentClass="'mb-6'" :labelTag="'label'" :labelText="'Sayfa Açıklaması'" :labelClass="'form-label'" :name="'seo_description:ar'"
                                                        :placeholder="'Açıklama Girin'" :rows="'4'" :textareaContent="$video->{'seo_description:ar'}" :class="'text-end'" />
                                                </x-slot:cardBody>
                                            </x-admin.card>
                                        </div>
                                    </div>
                                </x-slot:tabContent>
                            </x-admin.tab>
                        </x-slot:tabsContent>
                    </x-admin.tab>
                </x-slot:form>
            </x-admin.form>
        </x-slot:content>
    </x-admin.wrapper-container>
@endsection

@section('script')
    @if ($status = Session::get('status'))
        @if ($message = Session::get('message'))
            <script>
                $('body').append(`
        <div class="toast align-items-center show bg-{{ $status }} position-absolute py-3 px-3" role="alert" aria-live="assertive" aria-atomic="true" style="right: 10px; bottom: 10px;">
            <div class="d-flex">
                <img class="me-3" src="../../assets/images/{{ $status }}.svg" alt="">
            <div class="toast-body text-white fw-medium fs-6">
                {{ $message }}
            </div>
                <button type="button" style="filter:invert(1)" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
        `);
            </script>
        @endif
    @endif
    <script>
        //Tagify
        var seo_tr = document.querySelector("#seo_keywords_tr");
        var seo_en = document.querySelector("#seo_keywords_en");
        var seo_ar = document.querySelector("#seo_keywords_ar");
        new Tagify(seo_tr);
        new Tagify(seo_en);
        new Tagify(seo_ar);

        $('.btn-create').click(function() {
            $('.blog_create_form').trigger('submit');
        });

        $('.btn-reset').click(function() {
            $('.blog_create_form').trigger('reset');
        });

        $('.btn-back').click(function() {
            window.history.back();
        });
    </script>
@endsection
