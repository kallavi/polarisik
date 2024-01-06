@extends('layout.admin.layout')
@section('pageTitle')
    Bize Katılın Formu
@endsection
@section('rightContent')
    <x-admin.tags-wrapper :class="'d-flex align-items-center'">
        <x-slot:tagsWrapper>
            <x-admin.form-input :class="'form-control form-control-solid w-250px ps-12 me-6'" :placeholder="'Arama Yap'" :data-kt-ecommerce-order-filter="'search'" :iconTag="'i'" :iconClass="'ki-outline ki-magnifier fs-3 position-absolute ms-4'"
                :inputParentClass="'d-flex align-items-center position-relative my-4'" />
            <x-admin.button :title="'İndir'" :class="'d-flex flex-center h-48px h-lg-48px'" :color="'primary'" :iconTag="'i'" :iconClass="'fs-2x me-2'"
                :iconType="'outline'" :iconName="'file-down'" />

        </x-slot:tagsWrapper>
    </x-admin.tags-wrapper>
@endsection
@section('app')
    <x-admin.wrapper-container>
        <x-slot:content>
            <x-admin.card :cardHeaderClass="' border-0 pt-6'" :cardBodyClass="'pt-0'" :class="'bg-gray-300 bg-opacity-20 border-0'">
                <x-slot:cardBody>
                    <x-admin.table :id="'kt_customers_table'" :class="'align-middle table-row-dashed fs-6 gy-5'" ::theadRowClass="'text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0'" :tbodyClass="'fw-semibold text-gray-600'">
                        <x-slot:columns>
                            <th></th>
                            <th class="fw-bolder text-gray-600">AD SOYAD</th>
                            <th class="fw-bolder text-gray-600">TELEFON</th>
                            <th class="fw-bolder text-gray-600">E-POSTA</th>
                            <th class="fw-bolder text-gray-600">YABANCI DİL</th>
                            <th class="fw-bolder text-gray-600">DİL SEVİYESİ</th>
                            <th class="fw-bolder text-gray-600">BAŞVURU TARİHİ</th>
                            <th class="text-end pe-6 fw-bolder text-gray-600">İŞLEMLER</th>
                        </x-slot:columns>
                        <x-slot:rows>
                            @if (count($joins) > 0)
                                @foreach ($joins as $join)
                                    <tr>
                                        <td>
                                            @if ($join->image != null)
                                                <img src="/{{ $join->image }}" alt="" style="width: 100px; height: 100px; object-fit: cover; border-radius: 8px">
                                            @else
                                                <img src="/uploads/setting/657f938490b12.png" alt="" style="width: 100px; height: 100px; object-fit: cover; border-radius: 8px">
                                            @endif
                                        </td>
                                        <td>
                                            {{ $join->name_surname }}
                                        </td>
                                        <td>
                                            {{ $join->phone_number }}
                                        </td>
                                        <td>
                                            {{ $join->e_mail }}
                                        </td>
                                        <td>
                                            {{ $join->language }}
                                        </td>
                                        <td>
                                            {{ $join->language_level }}
                                        </td>
                                        <td class="text-gray-600 fw-medium">
                                            {{ $join->created_at }}
                                        </td>
                                        <td class="text-end">
                                            <x-admin.button :class="'btn-icon me-auto'" :small="''" :light="''"
                                                :color="'success'" :iconTag="'i'" :iconClass="'fs-1'" :iconType="'outline'"
                                                :iconName="'eye'" :modalButton="''" :data="[
                                                    'bs-target' => '#istekoneriform-'.$join->id,
                                                ]" />
                                                <x-admin.form :id="'kt_ecommerce_add_product_form'" :class="'d-inline'" :action="route('joinform.destroy', $join->id)" :method="'POST'">
                                                    <x-slot:form>
                                                        @method('DELETE')
                                                        <x-admin.button :class="'btn-icon'" :small="''" :light="''"
                                                        :color="'danger'" :iconTag="'i'" :iconClass="'fs-1'" :iconType="'outline'"
                                                        :iconName="'trash'" />
                                                    </x-slot:form>
                                                </x-admin.form>

                                        </td>
                                    </tr>
                                    <!---Formlar Detay Modal--->
                                    <x-admin.modal :id="'istekoneriform-'.$join->id" :lg="''" :footerClass="'me-auto px-18'" :headerClass="'px-18'" :modalTitle="'Bize Katılın Formu Kayıt #'.$join->id"
                                        :headerNotBorder="''" :footerNotBorder="''">
                                        <x-slot:modalBody>
                                            <x-admin.custom-grid>
                                                <x-slot:gridRow>
                                                    <img src="/{{ $join->image }}" alt="" style="max-width: 200px; max-height: 200px; object-fit: contain; border-radius: 8px; margin-bottom: 30px;">
                                                    <x-admin.custom-grid :colLg="'12'">
                                                        <x-slot:gridCol>
                                                            <x-admin.form-label :labelTag="'div'" :title="'Adı Soyadı'" :class="'text-gray-300 fs-7 fw-medium'" />
                                                            <x-admin.form-label :labelTag="'div'" :title="$join->name_surname" :class="'text-indigo2 fs-6 fw-medium'" />
                                                        </x-slot:gridCol>
                                                    </x-admin.custom-grid>
                                                    <x-admin.custom-grid :colLg="'6'" :colClass="'mt-10'">
                                                        <x-slot:gridCol>
                                                            <x-admin.form-label :labelTag="'div'" :title="'Cinsiet'" :class="'text-gray-300 fs-7 fw-medium'" />
                                                            <x-admin.form-label :labelTag="'div'" :title="$join->gender" :class="'text-indigo2 fs-6 fw-medium'" />
                                                        </x-slot:gridCol>
                                                    </x-admin.custom-grid>
                                                    <x-admin.custom-grid :colLg="'6'" :colClass="'mt-10'">
                                                        <x-slot:gridCol>
                                                            <x-admin.form-label :labelTag="'div'" :title="'Doğum Tarihi'" :class="'text-gray-300 fs-7 fw-medium'" />
                                                            <x-admin.form-label :labelTag="'div'" :title="$join->birthday" :class="'text-indigo2 fs-6 fw-medium'" />
                                                        </x-slot:gridCol>
                                                    </x-admin.custom-grid>
                                                    <x-admin.custom-grid :colLg="'6'" :colClass="'mt-10'">
                                                        <x-slot:gridCol>
                                                            <x-admin.form-label :labelTag="'div'" :title="'E-Posta'" :class="'text-gray-300 fs-7 fw-medium'" />
                                                            <x-admin.form-label :labelTag="'div'" :title="$join->e_mail" :class="'text-indigo2 fs-6 fw-medium'" />
                                                        </x-slot:gridCol>
                                                    </x-admin.custom-grid>
                                                    <x-admin.custom-grid :colLg="'6'" :colClass="'mt-10'">
                                                        <x-slot:gridCol>
                                                            <x-admin.form-label :labelTag="'div'" :title="'Telefon'" :class="'text-gray-300 fs-7 fw-medium'" />
                                                            <x-admin.form-label :labelTag="'div'" :title="$join->phone_number" :class="'text-indigo2 fs-6 fw-medium'" />
                                                        </x-slot:gridCol>
                                                    </x-admin.custom-grid>
                                                    <x-admin.custom-grid :colLg="'6'" :colClass="'mt-10'">
                                                        <x-slot:gridCol>
                                                            <x-admin.form-label :labelTag="'div'" :title="'Boy'" :class="'text-gray-300 fs-7 fw-medium'" />
                                                            <x-admin.form-label :labelTag="'div'" :title="$join->height" :class="'text-indigo2 fs-6 fw-medium'" />
                                                        </x-slot:gridCol>
                                                    </x-admin.custom-grid>
                                                    <x-admin.custom-grid :colLg="'6'" :colClass="'mt-10'">
                                                        <x-slot:gridCol>
                                                            <x-admin.form-label :labelTag="'div'" :title="'Kilo'" :class="'text-gray-300 fs-7 fw-medium'" />
                                                            <x-admin.form-label :labelTag="'div'" :title="$join->weight" />
                                                        </x-slot:gridCol>
                                                    </x-admin.custom-grid>
                                                    <x-admin.custom-grid :colLg="'6'" :colClass="'mt-10'">
                                                        <x-slot:gridCol>
                                                            <x-admin.form-label :labelTag="'div'" :title="'Yabancı Dil'" :class="'text-gray-300 fs-7 fw-medium'" />
                                                            <x-admin.form-label :labelTag="'div'" :title="$join->language" :class="'text-indigo2 fs-6 fw-medium'" />
                                                        </x-slot:gridCol>
                                                    </x-admin.custom-grid>
                                                    <x-admin.custom-grid :colLg="'6'" :colClass="'mt-10'">
                                                        <x-slot:gridCol>
                                                            <x-admin.form-label :labelTag="'div'" :title="'Yabancı Dil Seviyesi'" :class="'text-gray-300 fs-7 fw-medium'" />
                                                            <x-admin.form-label :labelTag="'div'" :title="$join->language_level" />
                                                        </x-slot:gridCol>
                                                    </x-admin.custom-grid>
                                                    <x-admin.custom-grid :colLg="'6'" :colClass="'mt-10'">
                                                        <x-slot:gridCol>
                                                            <x-admin.form-label :labelTag="'div'" :title="'Ehliyet'" :class="'text-gray-300 fs-7 fw-medium'" />
                                                            <x-admin.form-label :labelTag="'div'" :title="$join->driving_licence" :class="'text-indigo2 fs-6 fw-medium'" />
                                                        </x-slot:gridCol>
                                                    </x-admin.custom-grid>
                                                    <x-admin.custom-grid :colLg="'6'" :colClass="'mt-10'">
                                                        <x-slot:gridCol>
                                                            <x-admin.form-label :labelTag="'div'" :title="'Konaklama Durumu'" :class="'text-gray-300 fs-7 fw-medium'" />
                                                            <x-admin.form-label :labelTag="'div'" :title="$join->dwelling" />
                                                        </x-slot:gridCol>
                                                    </x-admin.custom-grid>
                                                    <x-admin.custom-grid :colLg="'6'" :colClass="'mt-10'">
                                                        <x-slot:gridCol>
                                                            <x-admin.form-label :labelTag="'div'" :title="'Takım Elbise'" :class="'text-gray-300 fs-7 fw-medium'" />
                                                            <x-admin.form-label :labelTag="'div'" :title="$join->is_suit" :class="'text-indigo2 fs-6 fw-medium'" />
                                                        </x-slot:gridCol>
                                                    </x-admin.custom-grid>
                                                    <x-admin.custom-grid :colLg="'6'" :colClass="'mt-10'">
                                                        <x-slot:gridCol>
                                                            <x-admin.form-label :labelTag="'div'" :title="'Konaklama Durumu'" :class="'text-gray-300 fs-7 fw-medium'" />
                                                            <x-admin.form-label :labelTag="'div'" :title="$join->missing_piece" />
                                                        </x-slot:gridCol>
                                                    </x-admin.custom-grid>
                                                    <x-admin.custom-grid :colLg="'6'" :colClass="'mt-10'">
                                                        <x-slot:gridCol>
                                                            <x-admin.form-label :labelTag="'div'" :title="'Semt'" :class="'text-gray-300 fs-7 fw-medium'" />
                                                            <x-admin.form-label :labelTag="'div'" :title="$join->district" :class="'text-indigo2 fs-6 fw-medium'" />
                                                        </x-slot:gridCol>
                                                    </x-admin.custom-grid>
                                                    <x-admin.custom-grid :colLg="'6'" :colClass="'mt-10'">
                                                        <x-slot:gridCol>
                                                            <x-admin.form-label :labelTag="'div'" :title="'T.C. Kimlik Numarası'" :class="'text-gray-300 fs-7 fw-medium'" />
                                                            <x-admin.form-label :labelTag="'div'" :title="$join->identity_number" />
                                                        </x-slot:gridCol>
                                                    </x-admin.custom-grid>
                                                    <x-admin.custom-grid :colLg="'6'" :colClass="'mt-10'">
                                                        <x-slot:gridCol>
                                                            <x-admin.form-label :labelTag="'div'" :title="'Hesap Adı'" :class="'text-gray-300 fs-7 fw-medium'" />
                                                            <x-admin.form-label :labelTag="'div'" :title="$join->account_name" :class="'text-indigo2 fs-6 fw-medium'" />
                                                        </x-slot:gridCol>
                                                    </x-admin.custom-grid>
                                                    <x-admin.custom-grid :colLg="'6'" :colClass="'mt-10'">
                                                        <x-slot:gridCol>
                                                            <x-admin.form-label :labelTag="'div'" :title="'IBAN'" :class="'text-gray-300 fs-7 fw-medium'" />
                                                            <x-admin.form-label :labelTag="'div'" :title="$join->iban" />
                                                        </x-slot:gridCol>
                                                    </x-admin.custom-grid>
                                                </x-slot:gridRow>
                                            </x-admin.custom-grid>
                                        </x-slot:modalBody>
                                        <x-slot:modalFooter>
                                            <x-admin.button :title="'Kapat'" :type="'button'" :color="'danger'" :data="['bs-dismiss' => 'modal']" />
                                        </x-slot:modalFooter>
                                    </x-admin.modal>
                                @endforeach
                            @else
                                <tr>
                                    <td>
                                        Mesaj bulunamadı.
                                    </td>
                                </tr>
                            @endif
                        </x-slot:rows>
                    </x-admin.table>
                </x-slot:cardBody>
            </x-admin.card>
        </x-slot:content>
    </x-admin.wrapper-container>
@endsection

@section('script')
    @if ($status = Session::get('status'))
        @if ($message = Session::get('message'))
            <script>
                $('body').append(`
        <div class="toast align-items-center show bg-{{ $status }} position-fixed py-3 px-3" role="alert" aria-live="assertive" aria-atomic="true" style="right: 10px; bottom: 10px;">
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
@endsection