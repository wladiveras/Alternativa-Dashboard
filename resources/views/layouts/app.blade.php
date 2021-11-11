<!DOCTYPE html>

<!-- 
//#===========================================================#//
//#                     Phoenix Dashboard                     #// 
//#                         v1.0.2.53                         #//
//#===========================================================#//
//#===========================================================#//
//#                                                           #//
//#                                                           #//
//#                   🆂🅾🆄🅻 🅽🅴🆃🆆🅾🆁🅺                     #//  
//#                                                           #//
//#                 Copyright (C) 2016 - 2021                 #//
//#                                                           #//
//#          ▁ ▂ ▄ ▅ ▆ ▇ █ Wladi  Veras █ ▇ ▆ ▅ ▄ ▂ ▁         #//
//#===========================================================#//

@Template: Metronic - Bootstrap 4 HTML, React, Angular 11 & VueJS Admin Dashboard Theme
@Author:   Wladi Veras
@Website:  https://www.wladiveras.com 
@Website:  https://www.wladi.com.br
@Contact:  hi@wladiveras.com.br
@Follow:   www.twitter.com/wladiveras

=================================================================================================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software *
=================================================================================================================================
 -->

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--begin::Head-->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title>{{ env('APP_NAME') }} | {{ $title }}</title>

    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="{{ env('SEO_DESC') }}" />
    <meta name="application-name" content="{{ env('APP_NAME') }}">

    <meta property="og:title" content="{{ env('APP_NAME') }} | {{ $title }}">
    <meta property="og:description" content="{{ env('SEO_DESC') }}">
    <meta property="og:url" content="{{ env('SEO_URL') }}">
    <meta property="og:site_name" content={{ env('APP_NAME') }}>

    <meta name="author" content="Wladi Veras">
    <meta name="creator" content="Wladi Veras">
    <link rel="canonical" href="{{ env('SEO_URL') }}" />

    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendors-->
    @yield("style")
    @yield("front_style")
    @yield("back_style")
    <!--end::Page Vendors Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css?v=7.2.8') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.css?v=7.2.8') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/style.bundle.css?v=7.2.8') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="{{ asset('assets/media/logos/logo.png') }}" />
    <style>
        .swal-wide{
            width:850px !important;
            text-align:left;
        }
    </style>
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" style="background-image: url({{ asset('assets/media/bg/bg-10.jpg') }})"
    class="quick-panel-right demo-panel-right offcanvas-right header-fixed subheader-enabled page-loading">
    <!--begin::Main-->
   
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="flex-row d-flex flex-column-fluid page">
            <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

                <!--begin::Header-->
                @yield("header")
                <!--end::Header-->
                <!--begin::Content-->
                @yield("wrapper")
                <!--end::Content-->
                <!--begin::Footer-->
                <div class="py-4 bg-white footer d-flex flex-lg-column" id="kt_footer">
                    <!--begin::Container-->
                    <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
                        <!--begin::Copyright-->
                        <div class="order-2 text-dark order-md-1">
                            <span class="mr-2 text-muted font-weight-bold">2021 ©</span> Desenvolvido com <font color="red" size="4">♥</font> por 
                            <a href="https://wladiveras.com" target="_blank" class="text-dark-75 text-bold text-hover-primary">Wladi Veras</a>
                        </div>
                        <!--end::Copyright-->
                        <!--begin::Nav-->
                        <div class="order-1 nav nav-dark order-md-2">
                            <a href="https://alternativacard.com" target="_blank" class="pl-0 pr-3 nav-link">Alternativa Card</a>
                            <a href="mailto:operacional@alternativacard.com" class="pl-3 pr-0 nav-link">Suporte</a>
                        </div>
                        <!--end::Nav-->
                    </div>
                    <!--end::Container-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Main-->

    <!--star::Panels-->
    @include("layouts.panels")
    <!--end:Panels-->

    <!--begin::Global Config (global config for global JS scripts)-->
    <script>
        var HOST_URL = '{{ env("APP_URL") }}/';

        var KTAppSettings = {
            "breakpoints": {
                "sm": 576,
                "md": 768,
                "lg": 992,
                "xl": 1200,
                "xxl": 1200
            },
            "colors": {
                "theme": {
                    "base": {
                        "white": "#ffffff",
                        "primary": "#6993FF",
                        "secondary": "#E5EAEE",
                        "success": "#1BC5BD",
                        "info": "#8950FC",
                        "warning": "#FFA800",
                        "danger": "#F64E60",
                        "light": "#F3F6F9",
                        "dark": "#212121"
                    },
                    "light": {
                        "white": "#ffffff",
                        "primary": "#E1E9FF",
                        "secondary": "#ECF0F3",
                        "success": "#C9F7F5",
                        "info": "#EEE5FF",
                        "warning": "#FFF4DE",
                        "danger": "#FFE2E5",
                        "light": "#F3F6F9",
                        "dark": "#D6D6E0"
                    },
                    "inverse": {
                        "white": "#ffffff",
                        "primary": "#ffffff",
                        "secondary": "#212121",
                        "success": "#ffffff",
                        "info": "#ffffff",
                        "warning": "#ffffff",
                        "danger": "#ffffff",
                        "light": "#464E5F",
                        "dark": "#ffffff"
                    }
                },
                "gray": {
                    "gray-100": "#F3F6F9",
                    "gray-200": "#ECF0F3",
                    "gray-300": "#E5EAEE",
                    "gray-400": "#D6D6E0",
                    "gray-500": "#B5B5C3",
                    "gray-600": "#80808F",
                    "gray-700": "#464E5F",
                    "gray-800": "#1B283F",
                    "gray-900": "#212121"
                }
            },
            "font-family": "Poppins"
        };

    </script>
    <!--end::Global Config-->

    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js?v=7.2.8') }}"></script>
    <script src="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.2.8') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js?v=7.2.8') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    
    <!--end::Global Theme Bundle-->
    @auth
    <script>
        Echo.private('App.Models.User.{{ Auth::user()->id }}')
    .notification((notification) => {
        $( ".app__notify" ).append('<b>'+ notification.message +'</b><br>');
    });
    </script>
    @endauth

    @if(Session::get('alert-type'))
    <script>
        //Sistema de Alertas
        $(document).ready(function () {
            @if(Session::get('alert-type') == 'success')

            Swal.fire({
                icon: 'success',
                title: '{!! Session::get("alert-title") !!}',
                html: '{!! Session::get("alert-response") !!}',
                footer: '...'
            })

            @elseif(Session::get('alert-type') == 'error')
            Swal.fire({
                icon: 'error',
                title: '{!! Session::get("alert-title") !!}',
                html: '{!! Session::get("alert-response") !!}',
                footer: '...'
            })

            @elseif(Session::get('alert-type') == 'warning')
            Swal.fire({
                icon: 'warning',
                title: '{!! Session::get("alert-title") !!}',
                html: '{!! Session::get("alert-response") !!}',
                confirmButtonText: 'Concordo',
                customClass: 'swal-wide',
                footer: '...'
            })
            @elseif(Session::get('alert-type') == 'info')
            Swal.fire({
                icon: 'info',
                title: '{!! Session::get("alert-title") !!}',
                html: '{!! Session::get("alert-response") !!}',
                footer: '...'
            })
            @endif
        });

    </script>
    @endif

    <!--begin::Page Scripts(used by this page)-->
    @yield("script")
    <!--end::Page Scripts-->
</body>
<!--end::Body-->
</html>
