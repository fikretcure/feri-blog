<!doctype html>
<html lang="en"><!-- [Head] start -->

<head>
    <title>@yield('title','title yok')</title>
    <!-- [Meta] -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description"
          content="Light Able admin and dashboard template offer a variety of UI elements and pages, ensuring your admin panel is both fast and effective.">
    <meta name="author" content="phoenixcoded"><!-- [Favicon] icon -->

    @yield('css_specific')

    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500;600;700&display=swap"
          rel="stylesheet"><!-- [phosphor Icons] https://phosphoricons.com/ -->
    <link rel="stylesheet" href="{{asset('assets/fonts/phosphor/duotone/style.css')}}">
    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="{{asset('assets/fonts/tabler-icons.min.css')}}"><!-- [Feather Icons] https://feathericons.com -->
    <link rel="stylesheet" href="{{asset('assets/fonts/tabler-icons.min.css')}}"><!-- [Feather Icons] https://feathericons.com -->
    <link rel="stylesheet" href="{{asset('assets/fonts/feather.css')}}">
    <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
    <link rel="stylesheet" href="{{asset('assets/fonts/fontawesome.css')}}">
    <!-- [Material Icons] https://fonts.google.com/icons -->
    <link rel="stylesheet" href="{{asset('assets/fonts/material.css')}}"><!-- [Template CSS Files] -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" id="main-style-link">
    <link rel="stylesheet" href="{{asset('assets/css/style-preset.css')}}">
</head><!-- [Head] end --><!-- [Body] Start -->

<body data-pc-preset="preset-1" data-pc-sidebar-theme="light" data-pc-sidebar-caption="true" data-pc-direction="ltr"
      data-pc-theme="light"><!-- [ Pre-loader ] start -->
<div class="loader-bg">
    <div class="loader-track">
        <div class="loader-fill"></div>
    </div>
</div><!-- [ Pre-loader ] End --><!-- [ Sidebar Menu ] start -->
<nav class="pc-sidebar">
    <div class="navbar-wrapper">
        <div class="m-header d-flex justify-content-center align-items-center">
            <a href="#" class="b-brand text-primary">
                <img src="" alt="logo image" class="logo-lg">
            </a>
        </div>

        <div class="navbar-content">
            <ul class="pc-navbar">




                @if(
                    auth()->user()->hasPermissionTo(\App\Enums\PermissionEnum::BlogIndex->value) ||
                    auth()->user()->hasPermissionTo(\App\Enums\PermissionEnum::BlogStore->value)

                    )

                    <li class="pc-item pc-hasmenu"><a href="#!" class="pc-link"><span class="pc-micon"><i
                                    class="ph-duotone ph-layout"></i></span><span class="pc-mtext"
                                                                                  data-i18n="Blog Yönetimi">Blog Yönetimi</span><span
                                class="pc-arrow"><i
                                    data-feather="chevron-right"></i></span></a>
                        <ul class="pc-submenu">

                            @can(\App\Enums\PermissionEnum::BlogStore->value)
                                <li class="pc-item"><a class="pc-link" href="{{ route('panel.blogs.create') }}"
                                                       data-i18n="Blog Ekleme">Blog Ekleme</a></li>
                            @endcan


                            @can(\App\Enums\PermissionEnum::BlogIndex->value)
                                <li class="pc-item"><a class="pc-link" href="{{ route('panel.blogs.index')  }}"
                                                       data-i18n="Blog Listeleme">Blog Listeleme</a></li>
                            @endcan





                        </ul>
                    </li>

                @endif







            </ul>

        </div>
        <div class="card pc-user-card">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0"><img src="" alt="user-image"
                                                    class="user-avtar wid-45 rounded-circle"></div>
                    <div class="flex-grow-1 ms-3">
                        <div class="dropdown"><a href="#" class="arrow-none dropdown-toggle"
                                                 data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="0,20">
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 me-2">
                                        <h6 class="mb-0">{{auth()->user()->name . ' ' . auth()->user()->surname}}</h6>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <div class="btn btn-icon btn-link-secondary avtar"><i
                                                class="ph-duotone ph-windows-logo"></i></div>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu">
                                <ul>

                                    <li><a class="pc-user-links" href="{{route('logout')}}"><i
                                                class="ph-duotone ph-power"></i>
                                            <span>ÇIKIŞ YAP</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav><!-- [ Sidebar Menu ] end --><!-- [ Header Topbar ] start -->
<header class="pc-header">
    <div class="header-wrapper"><!-- [Mobile Media Block] start -->


        <div class="me-auto pc-mob-drp">
            <ul class="list-unstyled"><!-- ======= Menu collapse Icon ===== -->
                <li class="pc-h-item pc-sidebar-collapse"><a href="#" class="pc-head-link ms-0" id="sidebar-hide"><i
                            class="ti ti-menu-2"></i></a></li>
                <li class="pc-h-item pc-sidebar-popup"><a href="#" class="pc-head-link ms-0" id="mobile-collapse"><i
                            class="ti ti-menu-2"></i></a></li>
                <li class="dropdown pc-h-item d-inline-flex d-md-none"><a
                        class="pc-head-link dropdown-toggle arrow-none m-0" data-bs-toggle="dropdown" href="#"
                        role="button" aria-haspopup="false" aria-expanded="false"><i
                            class="ph-duotone ph-magnifying-glass"></i></a>
                    <div class="dropdown-menu pc-h-dropdown drp-search">
                        <form class="px-3">
                            <div class="mb-0 d-flex align-items-center"><input type="search"
                                                                               class="form-control border-0 shadow-none"
                                                                               placeholder="Search...">
                                <button
                                    class="btn btn-light-secondary btn-search">Search
                                </button>
                            </div>
                        </form>
                    </div>
                </li>
                <li class="pc-h-item d-none d-md-inline-flex">
                    <form class="form-search"><i class="ph-duotone ph-magnifying-glass icon-search"></i> <input
                            type="search" class="form-control" placeholder="Search...">
                        <button
                            class="btn btn-search" style="padding: 0"><kbd>ctrl+k</kbd></button>
                    </form>
                </li>
            </ul>
        </div><!-- [Mobile Media Block end] -->




        <div class="ms-auto">
            <ul class="list-unstyled">

                <li class="dropdown pc-h-item d-none d-md-inline-flex"><a
                        class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#"
                        role="button" aria-haspopup="false" aria-expanded="false"><i
                            class="ph-duotone ph-sun-dim"></i></a>
                    <div class="dropdown-menu dropdown-menu-end pc-h-dropdown"><a href="#!" class="dropdown-item"
                                                                                  onclick="layout_change('dark')"><i
                                class="ph-duotone ph-moon"></i> <span>Dark</span>
                        </a><a href="#!" class="dropdown-item" onclick="layout_change('light')"><i
                                class="ph-duotone ph-sun-dim"></i> <span>Light</span> </a><a href="#!"
                                                                                             class="dropdown-item"
                                                                                             onclick="layout_change_default()"><i
                                class="ph-duotone ph-cpu"></i> <span>Default</span></a></div>
                </li>
                <li class="dropdown pc-h-item d-none d-md-inline-flex"><a
                        class="pc-head-link head-link-primary dropdown-toggle arrow-none me-0"
                        data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                        aria-expanded="false"><i class="ph-duotone ph-translate"></i></a>
                    <div class="dropdown-menu dropdown-menu-end pc-h-dropdown lng-dropdown"><a href="#!"
                                                                                               class="dropdown-item"
                                                                                               data-lng="en"><span>English <small>(UK)</small> </span></a><a
                            href="#!" class="dropdown-item" data-lng="fr"><span>français <small>(French)</small>
                                </span></a><a href="#!" class="dropdown-item" data-lng="ro"><span>Română
                                    <small>(Romanian)</small> </span></a><a href="#!" class="dropdown-item"
                                                                            data-lng="cn"><span>中国人 <small>(Chinese)</small></span></a>
                    </div>
                </li>


                {{--                <li class="dropdown pc-h-item"><a class="pc-head-link dropdown-toggle arrow-none me-0"--}}
                {{--                                                  data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"--}}
                {{--                                                  aria-expanded="false"><i class="ph-duotone ph-bell"></i> <span--}}
                {{--                            class="badge bg-success pc-h-badge">3</span></a>--}}
                {{--                    <div class="dropdown-menu dropdown-notification dropdown-menu-end pc-h-dropdown">--}}
                {{--                        <div class="dropdown-header d-flex align-items-center justify-content-between">--}}
                {{--                            <h5 class="m-0">Notifications</h5>--}}
                {{--                            <ul class="list-inline ms-auto mb-0">--}}
                {{--                                <li class="list-inline-item"><a href="../application/mail.html"--}}
                {{--                                                                class="avtar avtar-s btn-link-hover-primary"><i--}}
                {{--                                            class="ti ti-link f-18"></i></a></li>--}}
                {{--                            </ul>--}}
                {{--                        </div>--}}
                {{--                        <div class="dropdown-body text-wrap header-notification-scroll position-relative"--}}
                {{--                             style="max-height: calc(100vh - 235px)">--}}
                {{--                            <ul class="list-group list-group-flush">--}}
                {{--                                <li class="list-group-item">--}}
                {{--                                    <p class="text-span">Today</p>--}}
                {{--                                    <div class="d-flex">--}}
                {{--                                        <div class="flex-shrink-0"><img src="../assets/images/user/avatar-2.jpg"--}}
                {{--                                                                        alt="user-image"--}}
                {{--                                                                        class="user-avtar avtar avtar-s"></div>--}}
                {{--                                        <div class="flex-grow-1 ms-3">--}}
                {{--                                            <div class="d-flex">--}}
                {{--                                                <div class="flex-grow-1 me-3 position-relative">--}}
                {{--                                                    <h6 class="mb-0 text-truncate">Keefe Bond added new tags to 💪--}}
                {{--                                                        Design system</h6>--}}
                {{--                                                </div>--}}
                {{--                                                <div class="flex-shrink-0"><span class="text-sm">2 min ago</span>--}}
                {{--                                                </div>--}}
                {{--                                            </div>--}}
                {{--                                            <p class="position-relative mt-1 mb-2"><br><span--}}
                {{--                                                    class="text-truncate">Lorem Ipsum has been the industry's--}}
                {{--                                                        standard dummy text ever since the 1500s.</span></p><span--}}
                {{--                                                class="badge bg-light-primary border border-primary me-1 mt-1">web--}}
                {{--                                                    design</span> <span--}}
                {{--                                                class="badge bg-light-warning border border-warning me-1 mt-1">Dashobard</span>--}}
                {{--                                            <span--}}
                {{--                                                class="badge bg-light-success border border-success me-1 mt-1">Design--}}
                {{--                                                    System</span>--}}
                {{--                                        </div>--}}
                {{--                                    </div>--}}
                {{--                                </li>--}}
                {{--                                <li class="list-group-item">--}}
                {{--                                    <div class="d-flex">--}}
                {{--                                        <div class="flex-shrink-0">--}}
                {{--                                            <div class="avtar avtar-s bg-light-primary"><i--}}
                {{--                                                    class="ph-duotone ph-chats-teardrop f-18"></i></div>--}}
                {{--                                        </div>--}}
                {{--                                        <div class="flex-grow-1 ms-3">--}}
                {{--                                            <div class="d-flex">--}}
                {{--                                                <div class="flex-grow-1 me-3 position-relative">--}}
                {{--                                                    <h6 class="mb-0 text-truncate">Message</h6>--}}
                {{--                                                </div>--}}
                {{--                                                <div class="flex-shrink-0"><span class="text-sm">1 hour ago</span>--}}
                {{--                                                </div>--}}
                {{--                                            </div>--}}
                {{--                                            <p class="position-relative mt-1 mb-2"><br><span--}}
                {{--                                                    class="text-truncate">Lorem Ipsum has been the industry's--}}
                {{--                                                        standard dummy text ever since the 1500s.</span></p>--}}
                {{--                                        </div>--}}
                {{--                                    </div>--}}
                {{--                                </li>--}}
                {{--                                <li class="list-group-item">--}}
                {{--                                    <p class="text-span">Yesterday</p>--}}
                {{--                                    <div class="d-flex">--}}
                {{--                                        <div class="flex-shrink-0">--}}
                {{--                                            <div class="avtar avtar-s bg-light-danger"><i--}}
                {{--                                                    class="ph-duotone ph-user f-18"></i></div>--}}
                {{--                                        </div>--}}
                {{--                                        <div class="flex-grow-1 ms-3">--}}
                {{--                                            <div class="d-flex">--}}
                {{--                                                <div class="flex-grow-1 me-3 position-relative">--}}
                {{--                                                    <h6 class="mb-0 text-truncate">Challenge invitation</h6>--}}
                {{--                                                </div>--}}
                {{--                                                <div class="flex-shrink-0"><span class="text-sm">12 hour ago</span>--}}
                {{--                                                </div>--}}
                {{--                                            </div>--}}
                {{--                                            <p class="position-relative mt-1 mb-2"><br><span--}}
                {{--                                                    class="text-truncate"><strong>Jonny aber </strong>invites to--}}
                {{--                                                        join the challenge</span></p>--}}
                {{--                                            <button--}}
                {{--                                                class="btn btn-sm rounded-pill btn-outline-secondary me-2">Decline--}}
                {{--                                            </button>--}}
                {{--                                            <button class="btn btn-sm rounded-pill btn-primary">Accept</button>--}}
                {{--                                        </div>--}}
                {{--                                    </div>--}}
                {{--                                </li>--}}
                {{--                                <li class="list-group-item">--}}
                {{--                                    <div class="d-flex">--}}
                {{--                                        <div class="flex-shrink-0">--}}
                {{--                                            <div class="avtar avtar-s bg-light-info"><i--}}
                {{--                                                    class="ph-duotone ph-notebook f-18"></i></div>--}}
                {{--                                        </div>--}}
                {{--                                        <div class="flex-grow-1 ms-3">--}}
                {{--                                            <div class="d-flex">--}}
                {{--                                                <div class="flex-grow-1 me-3 position-relative">--}}
                {{--                                                    <h6 class="mb-0 text-truncate">Forms</h6>--}}
                {{--                                                </div>--}}
                {{--                                                <div class="flex-shrink-0"><span class="text-sm">2 hour ago</span>--}}
                {{--                                                </div>--}}
                {{--                                            </div>--}}
                {{--                                            <p class="position-relative mt-1 mb-2">Lorem Ipsum is simply dummy text--}}
                {{--                                                of the printing and typesetting industry. Lorem Ipsum has been the--}}
                {{--                                                industry's standard dummy text ever since the 1500s.</p>--}}
                {{--                                        </div>--}}
                {{--                                    </div>--}}
                {{--                                </li>--}}
                {{--                                <li class="list-group-item">--}}
                {{--                                    <div class="d-flex">--}}
                {{--                                        <div class="flex-shrink-0"><img src="../assets/images/user/avatar-2.jpg"--}}
                {{--                                                                        alt="user-image"--}}
                {{--                                                                        class="user-avtar avtar avtar-s"></div>--}}
                {{--                                        <div class="flex-grow-1 ms-3">--}}
                {{--                                            <div class="d-flex">--}}
                {{--                                                <div class="flex-grow-1 me-3 position-relative">--}}
                {{--                                                    <h6 class="mb-0 text-truncate">Keefe Bond added new tags to 💪--}}
                {{--                                                        Design system</h6>--}}
                {{--                                                </div>--}}
                {{--                                                <div class="flex-shrink-0"><span class="text-sm">2 min ago</span>--}}
                {{--                                                </div>--}}
                {{--                                            </div>--}}
                {{--                                            <p class="position-relative mt-1 mb-2"><br><span--}}
                {{--                                                    class="text-truncate">Lorem Ipsum has been the industry's--}}
                {{--                                                        standard dummy text ever since the 1500s.</span></p>--}}
                {{--                                            <button--}}
                {{--                                                class="btn btn-sm rounded-pill btn-outline-secondary me-2">Decline--}}
                {{--                                            </button>--}}
                {{--                                            <button class="btn btn-sm rounded-pill btn-primary">Accept</button>--}}
                {{--                                        </div>--}}
                {{--                                    </div>--}}
                {{--                                </li>--}}
                {{--                                <li class="list-group-item">--}}
                {{--                                    <div class="d-flex">--}}
                {{--                                        <div class="flex-shrink-0">--}}
                {{--                                            <div class="avtar avtar-s bg-light-success"><i--}}
                {{--                                                    class="ph-duotone ph-shield-checkered f-18"></i></div>--}}
                {{--                                        </div>--}}
                {{--                                        <div class="flex-grow-1 ms-3">--}}
                {{--                                            <div class="d-flex">--}}
                {{--                                                <div class="flex-grow-1 me-3 position-relative">--}}
                {{--                                                    <h6 class="mb-0 text-truncate">Security</h6>--}}
                {{--                                                </div>--}}
                {{--                                                <div class="flex-shrink-0"><span class="text-sm">5 hour ago</span>--}}
                {{--                                                </div>--}}
                {{--                                            </div>--}}
                {{--                                            <p class="position-relative mt-1 mb-2">Lorem Ipsum is simply dummy text--}}
                {{--                                                of the printing and typesetting industry. Lorem Ipsum has been the--}}
                {{--                                                industry's standard dummy text ever since the 1500s.</p>--}}
                {{--                                        </div>--}}
                {{--                                    </div>--}}
                {{--                                </li>--}}
                {{--                            </ul>--}}
                {{--                        </div>--}}
                {{--                        <div class="dropdown-footer">--}}
                {{--                            <div class="row g-3">--}}
                {{--                                <div class="col-6">--}}
                {{--                                    <div class="d-grid">--}}
                {{--                                        <button class="btn btn-primary">Archive all</button>--}}
                {{--                                    </div>--}}
                {{--                                </div>--}}
                {{--                                <div class="col-6">--}}
                {{--                                    <div class="d-grid">--}}
                {{--                                        <button class="btn btn-outline-secondary">Mark all as--}}
                {{--                                            read--}}
                {{--                                        </button>--}}
                {{--                                    </div>--}}
                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </li>--}}
                <li class="dropdown pc-h-item header-user-profile"><a
                        class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#"
                        role="button" aria-haspopup="false" data-bs-auto-close="outside" aria-expanded="false"><img
                            src="-" alt="user-image" class="user-avtar"></a>
                    <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
                        <div class="dropdown-header d-flex align-items-center justify-content-between">
                            <h5 class="m-0">Profile</h5>
                        </div>
                        <div class="dropdown-body">
                            <div class="profile-notification-scroll position-relative"
                                 style="max-height: calc(100vh - 225px)">
                                <ul class="list-group list-group-flush w-100">
                                    <li class="list-group-item">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0"><img src="-"
                                                                            alt="user-image"
                                                                            class="wid-50 rounded-circle"></div>
                                            <div class="flex-grow-1 mx-3">
                                                <h5 class="mb-0">{{auth()->user()->name . ' ' . auth()->user()->surname}}</h5>
                                                <a class="link-primary"
                                                   href="mailto:{{auth()->user()->email}}">{{auth()->user()->email}}</a>
                                            </div>
                                            <span class="badge bg-primary">HOŞGELDİNİZ</span>
                                        </div>
                                    </li>


                                    <li class="list-group-item"><a href="-"
                                                                   class="dropdown-item"><span
                                                class="d-flex align-items-center"><i
                                                    class="ph-duotone ph-user-circle"></i> <span>PROFİL AYARLARI</span>
                                                </span></a>
                                    </li>
                                    <li class="list-group-item">


                                        <a href="{{route('logout')}}" class="dropdown-item"><span
                                                class="d-flex align-items-center"><i
                                                    class="ph-duotone ph-power"></i> <span>ÇIKIŞ YAP</span></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</header><!-- [ Header ] end --><!-- [ Main Content ] start -->
<div class="pc-container">
    <div class="pc-content"><!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">

                @yield(section: 'breadcrumb')

            </div>
        </div><!-- [ breadcrumb ] end --><!-- [ Main Content ] start -->

        @yield(section: 'content')

    </div>
</div><!-- [ Main Content ] end -->
<footer class="pc-footer">
    <div class="footer-wrapper container-fluid">
        <div class="row">
            <div class="col my-1">
                <p class="m-0">Made with ♥ by Team <a href="-"
                                                      target="_blank">FERISOFT</a></p>
            </div>

        </div>
    </div>
</footer><!-- Required Js -->
<script src="{{ asset('assets/js/plugins/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/i18next.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/i18nextHttpBackend.min.js') }}"></script>
<script src="{{ asset('assets/js/icon/custom-font.js') }}"></script>
<script src="{{ asset('assets/js/script.js') }}"></script>
<script src="{{ asset('assets/js/theme.js') }}"></script>
<script src="{{ asset('assets/js/multi-lang.js') }}"></script>
<script src="{{ asset('assets/js/plugins/feather.min.js') }}"></script>
<script>
    layout_change('light');
</script>
<script>
    layout_sidebar_change('light');
</script>
<script>
    change_box_container('false');
</script>
<script>
    layout_caption_change('true');
</script>
<script>
    layout_rtl_change('false');
</script>
<script>
    preset_change('preset-1');
</script>
<div class="offcanvas border-0 pct-offcanvas offcanvas-end" tabindex="-1" id="offcanvas_pc_layout">
    <div class="offcanvas-header justify-content-between">
        <h5 class="offcanvas-title">Settings</h5>
        <button type="button" class="btn btn-icon btn-link-danger"
                data-bs-dismiss="offcanvas" aria-label="Close"><i class="ti ti-x"></i></button>
    </div>
    <div class="pct-body customizer-body">
        <div class="offcanvas-body py-0">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <div class="pc-dark">
                        <h6 class="mb-1">Theme Mode</h6>
                        <p class="text-muted text-sm">Choose light or dark mode or Auto</p>
                        <div class="row theme-color theme-layout">
                            <div class="col-4">
                                <div class="d-grid">
                                    <button class="preset-btn btn active" data-value="true"
                                            onclick="layout_change('light');"><span class="btn-label">Light</span> <span
                                            class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-grid">
                                    <button class="preset-btn btn" data-value="false"
                                            onclick="layout_change('dark');"><span class="btn-label">Dark</span> <span
                                            class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="d-grid">
                                    <button class="preset-btn btn" data-value="default"
                                            onclick="layout_change_default();" data-bs-toggle="tooltip"
                                            title="Automatically sets the theme based on user's operating system's color scheme."><span
                                            class="btn-label">Default</span> <span
                                            class="pc-lay-icon d-flex align-items-center justify-content-center"><i
                                                class="ph-duotone ph-cpu"></i></span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item pc-sidebar-color">
                    <h6 class="mb-1">Sidebar Theme</h6>
                    <p class="text-muted text-sm">Choose Sidebar Theme</p>
                    <div class="row theme-color theme-sidebar-color">
                        <div class="col-6">
                            <div class="d-grid">
                                <button class="preset-btn btn" data-value="true"
                                        onclick="layout_sidebar_change('dark');"><span class="btn-label">Dark</span>
                                    <span
                                        class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                                </button>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-grid">
                                <button class="preset-btn btn active" data-value="false"
                                        onclick="layout_sidebar_change('light');"><span class="btn-label">Light</span>
                                    <span
                                        class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <h6 class="mb-1">Accent color</h6>
                    <p class="text-muted text-sm">Choose your primary theme color</p>
                    <div class="theme-color preset-color"><a href="#!" class="active" data-value="preset-1"><i
                                class="ti ti-check"></i></a> <a href="#!" data-value="preset-2"><i
                                class="ti ti-check"></i></a> <a href="#!" data-value="preset-3"><i
                                class="ti ti-check"></i></a> <a href="#!" data-value="preset-4"><i
                                class="ti ti-check"></i></a> <a href="#!" data-value="preset-5"><i
                                class="ti ti-check"></i></a> <a href="#!" data-value="preset-6"><i
                                class="ti ti-check"></i></a> <a href="#!" data-value="preset-7"><i
                                class="ti ti-check"></i></a> <a href="#!" data-value="preset-8"><i
                                class="ti ti-check"></i></a> <a href="#!" data-value="preset-9"><i
                                class="ti ti-check"></i></a> <a href="#!" data-value="preset-10"><i
                                class="ti ti-check"></i></a></div>
                </li>
                <li class="list-group-item">
                    <h6 class="mb-1">Sidebar Caption</h6>
                    <p class="text-muted text-sm">Sidebar Caption Hide/Show</p>
                    <div class="row theme-color theme-nav-caption">
                        <div class="col-6">
                            <div class="d-grid">
                                <button class="preset-btn btn active" data-value="true"
                                        onclick="layout_caption_change('true');"><span class="btn-label">Caption
                                            Show</span> <span
                                        class="pc-lay-icon"><span></span><span></span><span><span></span><span></span></span><span></span></span>
                                </button>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-grid">
                                <button class="preset-btn btn" data-value="false"
                                        onclick="layout_caption_change('false');"><span class="btn-label">Caption
                                            Hide</span> <span
                                        class="pc-lay-icon"><span></span><span></span><span><span></span><span></span></span><span></span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="pc-rtl">
                        <h6 class="mb-1">Theme Layout</h6>
                        <p class="text-muted text-sm">LTR/RTL</p>
                        <div class="row theme-color theme-direction">
                            <div class="col-6">
                                <div class="d-grid">
                                    <button class="preset-btn btn active" data-value="false"
                                            onclick="layout_rtl_change('false');"><span class="btn-label">LTR</span>
                                        <span
                                            class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-grid">
                                    <button class="preset-btn btn" data-value="true"
                                            onclick="layout_rtl_change('true');"><span class="btn-label">RTL</span>
                                        <span
                                            class="pc-lay-icon"><span></span><span></span><span></span><span></span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item pc-box-width">
                    <div class="pc-container-width">
                        <h6 class="mb-1">Layout Width</h6>
                        <p class="text-muted text-sm">Choose Full or Container Layout</p>
                        <div class="row theme-color theme-container">
                            <div class="col-6">
                                <div class="d-grid">
                                    <button class="preset-btn btn active" data-value="false"
                                            onclick="change_box_container('false')"><span class="btn-label">Full
                                                Width</span> <span
                                            class="pc-lay-icon"><span></span><span></span><span></span><span><span></span></span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-grid">
                                    <button class="preset-btn btn" data-value="true"
                                            onclick="change_box_container('true')"><span class="btn-label">Fixed
                                                Width</span> <span
                                            class="pc-lay-icon"><span></span><span></span><span></span><span><span></span></span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="d-grid">
                        <button class="btn btn-light-danger" id="layoutreset">Reset Layout</button>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>


@yield('js_specific')


</body><!-- [Body] end -->

</html>
