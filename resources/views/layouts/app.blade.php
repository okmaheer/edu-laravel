<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.partials.head')
</head>

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed">
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <!--begin::Header-->
                <div id="kt_header" class="header">
                    <!--begin::Container-->
                    <div class="container-fluid d-flex flex-stack">
                        <!--begin::Brand-->
                        <div class="d-flex align-items-center me-5">
                            <!--begin::Aside toggle-->
                            <div class="d-lg-none btn btn-icon btn-active-color-white w-30px h-30px ms-n2 me-3"
                                id="kt_aside_toggle">
                                <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                                <span class="svg-icon svg-icon-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                                            fill="black" />
                                        <path opacity="0.3"
                                            d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                                            fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Aside  toggle-->
                            <!--begin::Logo-->
                            <a href="/">
                                {{-- <img alt="Logo" src="assets/media/logos/logo-2.svg" class="h-25px h-lg-30px" /> --}}
                            </a>
                            <!--end::Logo-->
                        </div>
                        <!--end::Brand-->
                        <!--begin::Topbar-->
                        <div class="d-flex align-items-center flex-shrink-0">
                            <!--begin::User-->
                            <div class="d-flex align-items-center ms-1" id="kt_header_user_menu_toggle">
                                <!--begin::User info-->
                                <div class="btn btn-flex align-items-center bg-hover-white bg-hover-opacity-10 py-2 px-2 px-md-3"
                                    data-kt-menu-trigger="click" data-kt-menu-attach="parent"
                                    data-kt-menu-placement="bottom-end">
                                    <!--begin::Name-->
                                    <div
                                        class="d-none d-md-flex flex-column align-items-end justify-content-center me-2 me-md-4">
                                        <span class="text-muted fs-8 fw-bold lh-1 mb-1">
                                            @if (Auth::user())
                                                {{ Auth::user()->name }}
                                            @else
                                                Max
                                            @endif
                                        </span>
                                        <span class="text-white fs-8 fw-bolder lh-1">
                                            @if (Auth::user())
                                                {{ Auth::user()->roles[0]->name }}
                                            @endif
                                        </span>
                                    </div>
                                    <!--end::Name-->
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-30px symbol-md-40px">
                                        <img src="{{ asset('/media/avatars/300-1.jpg') }}" alt="image" />
                                    </div>
                                    <!--end::Symbol-->
                                </div>
                                <!--end::User info-->
                                <!--begin::User account menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content d-flex align-items-center px-3">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-50px me-5">
                                                <img alt="Logo" src="{{ asset('/media/avatars/300-1.jpg') }}" />
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Username-->
                                            <div class="d-flex flex-column">
                                                <div class="fw-bolder d-flex align-items-center fs-5">
                                                    @if (Auth::user())
                                                        {{ Auth::user()->name }}
                                                    @else
                                                        Max
                                                    @endif
                                                </div>
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
                                        <a href="javascript:void(0)" class="menu-link px-5">My Profile</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    @if (Auth::user()->hasRole('Admin'))
                                        <div class="menu-item px-5">
                                            <a href="javascript:void(0)" id="signout-button" class="menu-link px-5"
                                                onclick="document.getElementById('logout-form').submit()">
                                                Sign Out
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="post">

                                                @csrf
                                            </form>
                                        </div>
                                    @else
                                        <div class="menu-item px-5">
                                            <a href="javascript:void(0)" id="signout-button" class="menu-link px-5"
                                                onclick="document.getElementById('logout-form').submit()">
                                                Sign Out
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="post">
                                                <input type="hidden" name="is_user" value="1">
                                                @csrf
                                            </form>
                                        </div>
                                    @endif
                                    <!--end::Menu item-->
                                    <!--begin::Menu separator-->
                                    <div class="separator my-2"></div>
                                    <!--end::Menu separator-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <div class="menu-content px-5">
                                            <label
                                                class="form-check form-switch form-check-custom form-check-solid pulse pulse-success"
                                                for="kt_user_menu_dark_mode_toggle">
                                                <input class="form-check-input w-30px h-20px" type="checkbox"
                                                    value="1" name="mode" id="kt_user_menu_dark_mode_toggle"
                                                    data-kt-url="../../demo14/dist/index.html" />
                                                <span class="pulse-ring ms-n1"></span>
                                                <span class="form-check-label text-gray-600 fs-7">Dark Mode</span>
                                            </label>
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::User account menu-->
                            </div>
                            <!--end::User -->
                        </div>
                        <!--end::Topbar-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Header-->

                <!--begin::Content wrapper-->
                <div class="d-flex flex-column-fluid">
                    @include('layouts.partials.aside')

                    <!--begin::Container-->
                    <div class="d-flex flex-column flex-column-fluid container-fluid">
                        @yield('content')
                    </div>
                    <!--end::Container-->
                </div>
            </div>
        </div>
    </div>
    <!--end::Root-->

    @include('layouts.partials.footer')
    @include('layouts.partials.script')
    @yield('script')
    @include('layouts.partials.custom')
    @include('layouts.partials.errors')
</body>

</html>
