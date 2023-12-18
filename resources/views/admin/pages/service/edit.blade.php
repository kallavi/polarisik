@extends('layout.admin.layout')
@section('pageTitle')
    Hizmet Güncelle
@endsection
@section('breadcrumbs')
    <x-admin.breadcrumb-item :parent="''">
        <x-slot:item>
            <x-admin.breadcrumb-item :icon="'true'" :fontSize="'fs-6'" :link="route('backoffice.index')" :iconName="'ki-home'" />
            <x-admin.breadcrumb-item :icon="'true'" />
            <x-admin.breadcrumb-item :title="'Hizmetler'" :link="route('services.index')" :class="'text-gray-600 fw-bold lh-1'" />
            <x-admin.breadcrumb-item :icon="'true'" />
            <x-admin.breadcrumb-item :title="'Hizmet Güncelle'" :class="'text-gray-600 fw-bold lh-1'" />

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
    <!--begin:::Tabs-->

    <x-admin.wrapper-container>
        <x-slot:content>
            <x-admin.tab :tabsType1="'true'" :class="'nav-custom nav-line-tabs-2x border-0 fs-4 fw-semibold mb-8'" :tabNavs="'true'" :tabItem="[
                'kt_customer_view_overview_tab' => 'Türkçe',
                'kt_customer_view_overview_events_and_logs_tab' => 'İngilizce',
                'kt_customer_view_overview_events_and_logs_tab2' => 'Arapça',
            ]" />
            <x-admin.form id="'kt_ecommerce_add_product_form'" :action="route('services.update', $service->id)" :method="'POST'" :class="'create_form'">
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
                                                                <x-admin.form-input :inputParentClass="'input-group-lg mb-6 fv-row col-6'" :labelTag="'label'"
                                                                    :labelText="'Başlık'" :labelClass="'form-label required'" :placeholder="'Hizmet Başlık'"
                                                                    :class="'form-control name-tr'" :name="'name:tr'"
                                                                    :value="$service->{'name:tr'}" />
                                                                <x-admin.form-input :inputParentClass="'input-group-lg mb-6 fv-row col-6'" :labelTag="'label'"
                                                                    :labelText="'Url'" :labelClass="'form-label'" :placeholder="'Hizmet Url'"
                                                                    :class="'form-control url-tr'" :name="'slug:tr'"
                                                                    :value="$service->{'slug:tr'}" />
                                                            </x-slot:gridRow>
                                                        </x-admin.custom-grid>
                                                    </x-slot:cardBody>
                                                </x-admin.card>
                                                <x-admin.card :class="'card-flush border-0 bg-gray-300 bg-opacity-20 pt-12'" :cardHeaderClass="'min-h-25px'">
                                                    <x-slot:cardHeader>
                                                        <div class="card-title m-0">
                                                            <h2>İçerik</h2>
                                                        </div>
                                                    </x-slot:cardHeader>
                                                    <x-slot:cardBody>
                                                        <x-admin.form-textarea :labelTag="'label'" :labelText="'İçerik'"
                                                            :labelClass="'form-label'" :placeholder="'İçerik'" :rows="'9'"
                                                            :resizeNone="''" :id="'description-tr'" :name="'description:tr'"
                                                            :textareaContent="$service->{'description:tr'}" />
                                                    </x-slot:cardBody>
                                                </x-admin.card>
                                                <x-admin.card :class="'card-flush border-0 bg-gray-300 bg-opacity-20 pt-12'" :cardHeaderClass="'min-h-25px'">
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
                                                        <x-admin.form-dropzone :class="'fv-row mb-2 mt-5'" :id="'kt_ecommerce_add_product_media'"
                                                            :name="'photos[]'" />

                                                    </x-slot:cardBody>
                                                </x-admin.card>
                                            </div>
                                        </div>
                                        <div
                                            class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px min-w-lg-300px mb-7 ms-lg-10">
                                            <x-admin.card :class="'border-0 card-flush bg-gray-300 bg-opacity-20'">
                                                <x-slot:cardHeader>
                                                    <div class="card-title">
                                                        <h2>Görsel</h2>
                                                    </div>
                                                </x-slot:cardHeader>
                                                <x-slot:cardBody>
                                                    <x-admin.image-input :changeAvatar="''" :size="'w-150px h-150px'"
                                                        :parentClass="'my-3 text-center'" :class="'mb-3'" :textMuted="'Sadece *.png, *.jpg veya *.jpeg uzantılı görsel yükleyebilirsiniz'"
                                                        :name="'image'" :imgUrl="'/' . $service->image" />
                                                </x-slot:cardBody>
                                            </x-admin.card>
                                            <x-admin.card :class="'border-0 card-flush bg-gray-300 bg-opacity-20 py-4'" :cardBodyClass="'pt-0'">
                                                <x-slot:cardHeader>
                                                    <div class="card-title">
                                                        <h2>Status</h2>
                                                    </div>
                                                    <div class="card-toolbar">
                                                        <div class="rounded-circle bg-success w-15px h-15px"
                                                            id="kt_ecommerce_add_product_status"></div>
                                                    </div>
                                                </x-slot:cardHeader>
                                                <x-slot:cardBody>
                                                    <x-admin.form-select :defaultValue="$service->status" :options="[
                                                        'published' => 'Yayınlanmış',
                                                        'draft' => 'Pasif',
                                                    ]"
                                                        :name="'status'" />
                                                </x-slot:cardBody>
                                            </x-admin.card>
                                            <x-admin.card :class="'card-flush py-4 bg-gray-300 bg-opacity-20 border-0'">
                                                <x-slot:cardHeader>
                                                    <div class="card-title">
                                                        <h2>SEO</h2>
                                                    </div>
                                                </x-slot:cardHeader>
                                                <x-slot:cardBody>
                                                    <x-admin.form-input :inputParentClass="'input-group-lg mb-6'" :labelTag="'label'"
                                                        :labelText="'Etiketler'" :labelClass="'form-label'" :placeholder="'Anahtar Kelime'"
                                                        :class="'form-control'" :id="'seo_keywords_tr'" :name="'seo_keywords:tr'"
                                                        :value="$service->{'seo_keywords:tr'}" />
                                                    <x-admin.form-textarea :inputParentClass="'mb-6'" :labelTag="'label'"
                                                        :labelText="'Hizmet Açıklaması'" :labelClass="'form-label'" :placeholder="'Açıklama Girin'"
                                                        :rows="'4'" :name="'seo_description:tr'" :textareaContent="$service->{'seo_description:tr'}" />
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
                                                                <x-admin.form-input :inputParentClass="'input-group-lg mb-6 fv-row col-6'" :labelTag="'label'"
                                                                    :labelText="'Başlık'" :labelClass="'form-label required'"
                                                                    :placeholder="'Hizmet Başlık'" :class="'form-control name-en'"
                                                                    :name="'name:en'" :value="$service->{'name:en'}" />
                                                                <x-admin.form-input :inputParentClass="'input-group-lg mb-6 fv-row col-6'" :labelTag="'label'"
                                                                    :labelText="'Url'" :labelClass="'form-label'"
                                                                    :placeholder="'Hizmet Url'" :class="'form-control url-en'"
                                                                    :name="'slug:en'" :value="$service->{'slug:en'}" />
                                                            </x-slot:gridRow>
                                                        </x-admin.custom-grid>
                                                    </x-slot:cardBody>
                                                </x-admin.card>
                                                <x-admin.card :class="'card-flush border-0 bg-gray-300 bg-opacity-20 pt-12'" :cardHeaderClass="'min-h-25px'">
                                                    <x-slot:cardHeader>
                                                        <div class="card-title m-0">
                                                            <h2>İçerik</h2>
                                                        </div>
                                                    </x-slot:cardHeader>
                                                    <x-slot:cardBody>
                                                        <x-admin.form-textarea :labelTag="'label'" :labelText="'İçerik'"
                                                            :labelClass="'form-label'" :placeholder="'İçerik'" :rows="'9'"
                                                            :resizeNone="''" :id="'description-en'" :name="'description:en'"
                                                            :textareaContent="$service->{'description:en'}" />
                                                    </x-slot:cardBody>
                                                </x-admin.card>
                                            </div>
                                        </div>
                                        <div
                                            class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px min-w-lg-300px mb-7 ms-lg-10">
                                            <x-admin.card :class="'card-flush py-4 bg-gray-300 bg-opacity-20 border-0'">
                                                <x-slot:cardHeader>
                                                    <div class="card-title">
                                                        <h2>SEO</h2>
                                                    </div>
                                                </x-slot:cardHeader>
                                                <x-slot:cardBody>
                                                    <x-admin.form-input :inputParentClass="'input-group-lg mb-6'" :labelTag="'label'"
                                                        :labelText="'Etiketler'" :labelClass="'form-label'" :placeholder="'Anahtar Kelime'"
                                                        :class="'form-control'" :id="'seo_keywords_en'" :name="'seo_keywords:en'"
                                                        :value="$service->{'seo_keywords:en'}" />
                                                    <x-admin.form-textarea :inputParentClass="'mb-6'" :labelTag="'label'"
                                                        :labelText="'Hizmet Açıklaması'" :labelClass="'form-label'" :placeholder="'Açıklama Girin'"
                                                        :rows="'4'" :name="'seo_description:en'" :textareaContent="$service->{'seo_description:en'}" />
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
                                                                <x-admin.form-input :inputParentClass="'input-group-lg mb-6 fv-row col-6'" :labelTag="'label'"
                                                                    :labelText="'Başlık'" :labelClass="'form-label required'"
                                                                    :placeholder="'Hizmet Başlık'" :class="'form-control text-end name-ar'"
                                                                    :name="'name:ar'" :value="$service->{'name:ar'}" />
                                                                <x-admin.form-input :inputParentClass="'input-group-lg mb-6 fv-row col-6'" :labelTag="'label'"
                                                                    :labelText="'Url'" :labelClass="'form-label'"
                                                                    :placeholder="'Hizmet Url'" :class="'form-control text-end url-ar'"
                                                                    :name="'slug:ar'" :value="$service->{'slug:ar'}" />
                                                            </x-slot:gridRow>
                                                        </x-admin.custom-grid>
                                                    </x-slot:cardBody>
                                                </x-admin.card>
                                                <x-admin.card :class="'card-flush border-0 bg-gray-300 bg-opacity-20 pt-12'" :cardHeaderClass="'min-h-25px'">
                                                    <x-slot:cardHeader>
                                                        <div class="card-title m-0">
                                                            <h2>İçerik</h2>
                                                        </div>
                                                    </x-slot:cardHeader>
                                                    <x-slot:cardBody>
                                                        <x-admin.form-textarea :labelTag="'label'" :labelText="'İçerik'"
                                                            :labelClass="'form-label'" :placeholder="'İçerik'" :rows="'9'"
                                                            :resizeNone="''" :id="'description-ar'" :name="'description:ar'"
                                                            :textareaContent="$service->{'description:ar'}" />
                                                    </x-slot:cardBody>
                                                </x-admin.card>
                                            </div>
                                        </div>
                                        <div
                                            class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px min-w-lg-300px mb-7 ms-lg-10">
                                            <x-admin.card :class="'card-flush py-4 bg-gray-300 bg-opacity-20 border-0'">
                                                <x-slot:cardHeader>
                                                    <div class="card-title">
                                                        <h2>SEO</h2>
                                                    </div>
                                                </x-slot:cardHeader>
                                                <x-slot:cardBody>
                                                    <x-admin.form-input :inputParentClass="'input-group-lg mb-6'" :labelTag="'label'"
                                                        :labelText="'Etiketler'" :labelClass="'form-label'" :placeholder="'Anahtar Kelime'"
                                                        :class="'form-control text-end'" :id="'seo_keywords_ar'" :name="'seo_keywords:ar'"
                                                        :value="$service->{'seo_keywords:ar'}" />
                                                    <x-admin.form-textarea :inputParentClass="'mb-6'" :labelTag="'label'"
                                                        :class="'text-end'" :labelText="'Hizmet Açıklaması'" :labelClass="'form-label'"
                                                        :placeholder="'Açıklama Girin'" :rows="'4'" :name="'seo_description:ar'"
                                                        :textareaContent="$service->{'seo_description:ar'}" />
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
        new Tagify(seo_tr);
        var seo_en = document.querySelector("#seo_keywords_en");
        new Tagify(seo_en);
        var seo_ar = document.querySelector("#seo_keywords_ar");
        new Tagify(seo_ar);

        $('.btn-create').click(function() {
            $('.create_form').trigger('submit');
        });

        $('.btn-reset').click(function() {
            $('.create_form').trigger('reset');
        });

        $('.btn-back').click(function() {
            window.history.back();
        });

        $('.remove-gallery').click(function() {
            var slug = $(this).parent().children('.image-input-wrapper').attr('style');
            slug = slug.replace("background-image: url('/", "").replace("')", "").replace('uploads/news/', '');
            var token = $('input[name=_token]').val();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': token
                },
                url: "/news-gallery-delete/" + slug,
                type: 'POST',
                data: {
                    slug: slug,
                    "_token": token
                },
                dataType: 'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success: function(result) {
                    alert(result);
                },
            });
        });

        $('.name-tr').on('keyup', function() {
            var fd = new FormData;
            fd.append('name', $(this).val());
            fd.append('_token', '{{ @csrf_token() }}');
            $.ajax({
                url: "{{ route('slug.generate') }}",
                // datatype: "html",
                processData: false, // Important!
                contentType: false,
                type: "post",
                data: fd,
                success: function(result) {
                    $('.url-tr').val(result);
                },
            });
        });

        $('.name-en').on('keyup', function() {
            var fd = new FormData;
            fd.append('name', $(this).val());
            fd.append('_token', '{{ @csrf_token() }}');
            $.ajax({
                url: "{{ route('slug.generate') }}",
                // datatype: "html",
                processData: false, // Important!
                contentType: false,
                type: "post",
                data: fd,
                success: function(result) {
                    $('.url-en').val(result);
                },
            });
        });

        $('.name-ar').on('keyup', function() {
            var fd = new FormData;
            fd.append('name', $(this).val());
            fd.append('_token', '{{ @csrf_token() }}');
            $.ajax({
                url: "{{ route('slug.generate') }}",
                // datatype: "html",
                processData: false, // Important!
                contentType: false,
                type: "post",
                data: fd,
                success: function(result) {
                    $('.url-ar').val(result);
                },
            });
        });

        ClassicEditor.create(document.querySelector('#description-tr'), {
                image: {
                    toolbar: ['imageStyle:full', 'imageStyle:side', '|', 'imageTextAlternative'],
                    upload: {
                        types: ['webp', 'tiff', 'jpeg', 'jpg', 'png', 'gif', 'bmp', 'svg+xml']
                    }
                }
            })
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });

        ClassicEditor.create(document.querySelector('#description-en'), {
                image: {
                    toolbar: ['imageStyle:full', 'imageStyle:side', '|', 'imageTextAlternative'],
                    upload: {
                        types: ['webp', 'tiff', 'jpeg', 'jpg', 'png', 'gif', 'bmp', 'svg+xml']
                    }
                }
            })
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });

        ClassicEditor.create(document.querySelector('#description-ar'), {
                image: {
                    toolbar: ['imageStyle:full', 'imageStyle:side', '|', 'imageTextAlternative'],
                    upload: {
                        types: ['webp', 'tiff', 'jpeg', 'jpg', 'png', 'gif', 'bmp', 'svg+xml']
                    }
                }
            })
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection