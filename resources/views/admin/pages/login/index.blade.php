@extends('layout.admin.single-layout')

@section('app')
    <style>
        body {
            background-image: url('assets/images/bg.png');
        }

        [data-bs-theme="dark"] body {
            background-image: url('assets/images/bg-dark.png');
        }
    </style>
    <div class="d-flex flex-column flex-column-fluid flex-lg-row align-items-center">
        <div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">
            <div class="d-flex flex-center flex-lg-start flex-column">
                <a class="mb-7">
                    <img alt="Logo" src="/uploads/setting/657757d2cec9a.svg" />
                </a>
            </div>
        </div>
        <!--begin::Body-->
        <div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12 p-lg-20">
            <!--begin::Card-->
            <div class="bg-body d-flex flex-column align-items-stretch flex-center rounded-4 w-md-475px p-20">
                <!--begin::Wrapper-->
                <div class="d-flex flex-center flex-column flex-column-fluid px-lg-10 py-15 py-lg-20">
                    <!--begin::Form-->

                    <x-admin.form :class="'form w-100'" :novalidate="'novalidate'" :id="'kt_sign_in_form'" :action="'/authAdmin'" :method="'POST'">

                        <x-slot:form>
                            <x-admin.tags-wrapper :class="'text-center mb-11'">
                                <x-slot:tagsWrapper>
                                    <x-admin.form-label :title="'Giriş Yap'" :titleTag="'h1'" :class="'text-dark fw-bolder mb-3'" />
                                </x-slot:tagsWrapper>
                            </x-admin.tags-wrapper>
                            <x-admin.form-input :inputParentClass="'fv-row mb-6'" :placeholder="'Email'" :name="'email'" :class="'form-control bg-transparent'" :autocomplete="'off'" :required="''" />
                            <x-admin.form-input :inputParentClass="'fv-row mb-6'" :type="'password'" :placeholder="'Password'" :name="'password'" :class="'form-control bg-transparent'" :autocomplete="'off'"
                                :required="''" />

                            <button class="btn text-white btn-danger w-100">Giriş Yap</button>

                        </x-slot:form>

                        @csrf
                    </x-admin.form>

                    <!--end::Form-->
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Body-->
    </div>
@endsection


@section('script')
    @if ($errors->all() != null)
        <script>
            Swal.fire({
                title: "Hatalı Giriş!",
                text: "Girilen e-mail veya şifre hatalıdır. Lütfen tekrar deneyiniz.",
                icon: "error",
                buttonsStyling: false,
                confirmButtonText: "Kapat",
                customClass: {
                    confirmButton: "btn btn-primary"
                }
            });
        </script>
    @endif
@endsection
