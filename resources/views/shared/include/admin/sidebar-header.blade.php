<a href="{{ route('backoffice.index') }}" class="pb-4 pt-4 mx-auto">
    <img width="128px" alt="Logo" src="/uploads/setting/657757d2cec9a.svg" />
</a>
<div class="app-sidebar-header px-9" id="kt_app_sidebar_header">
    <x-admin.tags-wrapper :class="'w-100 d-flex flex-stack bg-black bg-opacity-20 py-3 rounded-2'">
        <x-slot:tagsWrapper>

        <!--begin::User menu-->
        <div class="">
            <!--begin::Menu wrapper-->
            <x-admin.tags-wrapper :class="'d-flex align-items-center ps-4'"
                data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-overflow="true"
                data-kt-menu-placement="top-start">
                <x-slot:tagsWrapper>
                    <div class="cursor-pointer symbol symbol-circle symbol-40px">
                        <img src="{{ asset($data['setting']['favicon']) }}" alt="image" />
                    </div>
                    <div class="fw-bold d-flex align-items-center fs-5 text-white ps-4 text-break">Admin</div>
                </x-slot:tagsWrapper>
            </x-admin.tags-wrapper>
            <!----İsim e basınca acılan menu tasarımda yok kullanılıp kullanılmayacagı bellı olmadıgı ıcın kaldırılmadı---->
            <!--begin::User account menu-->
            {{--  <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                data-kt-menu="true">
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <div class="menu-content d-flex align-items-center px-3">
                        <!--begin::Avatar-->
                                <div class="symbol symbol-50px me-5">
                                    <img alt="Logo" src="{{ asset('assets/media/avatars/300-2.jpg') }}" />
                                </div>

                        <!--end::Avatar-->
                        <!--begin::Username-->
                        <div class="d-flex flex-column">
                            <div class="fw-bold d-flex align-items-center fs-5">Alice Page
                                <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span>
                            </div>
                            <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">alice@kt.com</a>
                        </div>
                        <!--end::Username-->
                    </div>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu separator-->
                <div class="separator my-2"></div>
                <!--end::Menu separator-->
                <!--begin::Menu item-->
                <div class="menu-item px-5">
                    <a href="../../demo27/dist/account/overview.html" class="menu-link px-5">My Profile</a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-5">
                    <a href="../../demo27/dist/apps/projects/list.html" class="menu-link px-5">
                        <span class="menu-text">My Projects</span>
                        <span class="menu-badge">
                            <span class="badge badge-light-danger badge-circle fw-bold fs-7">3</span>
                        </span>
                    </a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                    data-kt-menu-placement="right-end" data-kt-menu-offset="-15px, 0">
                    <a href="#" class="menu-link px-5">
                        <span class="menu-title">My Subscription</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <!--begin::Menu sub-->
                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="../../demo27/dist/account/referrals.html" class="menu-link px-5">Referrals</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="../../demo27/dist/account/billing.html" class="menu-link px-5">Billing</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="../../demo27/dist/account/statements.html" class="menu-link px-5">Payments</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="../../demo27/dist/account/statements.html"
                                class="menu-link d-flex flex-stack px-5">Statements
                                <span class="ms-2 lh-0" data-bs-toggle="tooltip" title="View your statements">
                                    <i class="ki-outline ki-information-5 fs-5"></i>
                                </span></a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu separator-->
                        <div class="separator my-2"></div>
                        <!--end::Menu separator-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <div class="menu-content px-3">
                                <label class="form-check form-switch form-check-custom form-check-solid">
                                    <input class="form-check-input w-30px h-20px" type="checkbox" value="1"
                                        checked="checked" name="notifications" />
                                    <span class="form-check-label text-muted fs-7">Notifications</span>
                                </label>
                            </div>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu sub-->
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-5">
                    <a href="../../demo27/dist/account/statements.html" class="menu-link px-5">My Statements</a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu separator-->
                <div class="separator my-2"></div>
                <!--end::Menu separator-->
                <!--begin::Menu item-->
                <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                    data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                    <a href="#" class="menu-link px-5">
                        <span class="menu-title position-relative">Mode
                            <span class="ms-5 position-absolute translate-middle-y top-50 end-0">
                                <i class="ki-outline ki-night-day theme-light-show fs-2"></i>
                                <i class="ki-outline ki-moon theme-dark-show fs-2"></i>
                            </span></span>
                    </a>
                    <!--begin::Menu-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
                        data-kt-menu="true" data-kt-element="theme-mode-menu">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3 my-0">
                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
                                <span class="menu-icon" data-kt-element="icon">
                                    <i class="ki-outline ki-night-day fs-2"></i>
                                </span>
                                <span class="menu-title">Light</span>
                            </a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3 my-0">
                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
                                <span class="menu-icon" data-kt-element="icon">
                                    <i class="ki-outline ki-moon fs-2"></i>
                                </span>
                                <span class="menu-title">Dark</span>
                            </a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3 my-0">
                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
                                <span class="menu-icon" data-kt-element="icon">
                                    <i class="ki-outline ki-screen fs-2"></i>
                                </span>
                                <span class="menu-title">System</span>
                            </a>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu-->
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                    data-kt-menu-placement="right-end" data-kt-menu-offset="-15px, 0">
                    <a href="#" class="menu-link px-5">
                        <span class="menu-title position-relative">Language
                            <span
                                class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">English
                                <img class="w-15px h-15px rounded-1 ms-2"
                                    src="{{ asset('assets/media/flags/united-states.svg') }}"
                                    alt="" /></span></span>
                    </a>
                    <!--begin::Menu sub-->
                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="../../demo27/dist/account/settings.html" class="menu-link d-flex px-5 active">
                                <span class="symbol symbol-20px me-4">
                                    <img class="rounded-1" src="{{ asset('assets/media/flags/united-states.svg') }}"
                                        alt="" />
                                </span>English</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="../../demo27/dist/account/settings.html" class="menu-link d-flex px-5">
                                <span class="symbol symbol-20px me-4">
                                    <img class="rounded-1" src="{{ asset('assets/media/flags/spain.svg') }}"
                                        alt="" />
                                </span>Spanish</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="../../demo27/dist/account/settings.html" class="menu-link d-flex px-5">
                                <span class="symbol symbol-20px me-4">
                                    <img class="rounded-1" src="{{ asset('assets/media/flags/germany.svg') }}"
                                        alt="" />
                                </span>German</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="../../demo27/dist/account/settings.html" class="menu-link d-flex px-5">
                                <span class="symbol symbol-20px me-4">
                                    <img class="rounded-1" src="{{ asset('assets/media/flags/japan.svg') }}"
                                        alt="" />
                                </span>Japanese</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="../../demo27/dist/account/settings.html" class="menu-link d-flex px-5">
                                <span class="symbol symbol-20px me-4">
                                    <img class="rounded-1" src="{{ asset('assets/media/flags/france.svg') }}"
                                        alt="" />
                                </span>French</a>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu sub-->
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-5 my-1">
                    <a href="../../demo27/dist/account/settings.html" class="menu-link px-5">Account Settings</a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-5">
                    <a href="../../demo27/dist/authentication/layouts/corporate/sign-in.html" class="menu-link px-5">Sign
                        Out</a>
                </div>
                <!--end::Menu item-->
            </div>  --}}
        </div>

        <x-admin.button
            :title="'Çıkış'"
            :class="'text-gray-light me-4 border-1 border-dashed border-gray border-opacity-25 exitButton'"
            :ButtonRouteLink="'logout'"
            :iconTag="'i'"
            :iconClass="'ki-outline ki-entrance-left fs-2 me-2'"
             />

        {{-- <a href="../../demo27/dist/authentication/layouts/corporate/sign-in.html"
            class="btn btn-sm btn-outline btn-flex btn-custom px-3 text-white">
            <i class="ki-outline ki-entrance-left fs-2 me-2"></i>Çıkış</a> --}}
        <!--end::Logout-->
        <!--end::Menu-->

    {{-- <div id="kt_app_sidebar_toggle" class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary h-30px w-30px position-absolute top-50 start-100 translate-middle rotate " data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="app-sidebar-minimize">

        <i class="ki-duotone ki-black-left-line fs-3 rotate-180"><span class="path1"></span><span class="path2"></span></i>        </div> --}}
    </x-slot:tagsWrapper>
</x-admin.tags-wrapper>
</div>
