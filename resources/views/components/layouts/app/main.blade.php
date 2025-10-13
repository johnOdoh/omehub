<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">

        <link rel="preconnect" href="https://fonts.gstatic.com/">
        <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" />

        <title>{{ $title ?? config('app.name', 'Laravel') }}</title>

        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&amp;display=swap" rel="stylesheet">

        <!-- Choose your preferred color scheme -->
        <!-- <link href="css/light.css" rel="stylesheet"> -->
        <!-- <link href="css/dark.css" rel="stylesheet"> -->

        <!-- BEGIN SETTINGS -->
        <!-- Remove this after purchasing -->
        <link href="{{ asset('portal-assets/css/light.css') }}" rel="stylesheet">
        {{-- <script src="{{ asset('portal-assets/js/settings.js') }}"></script> --}}
        <style>
            /* Custom Bootstrap-style column for 1.5 of 12 columns (12.5%) */
            .col-0-5 {
                flex: 0 0 auto;
                width: 2.5%;
            }
            .col-1-5 {
                flex: 0 0 auto;
                width: 12.5%;
            }
            .col-2-5 {
                flex: 0 0 auto;
                width: 17.75%;
            }
            @media (max-width: 768px) {
                .col-0-5,
                .col-1-5,
                .col-2-5 {
                    width: 100%;
                }
            }
            @media (min-width: 769px) and (max-width: 1100px) {
                .col-1-5 {
                    width: 48%; /* or whatever suits your layout */
                }
                .col-0-5,
                .col-2-5 {
                    width: 100%;
                }
            }
            .no-spinner::-webkit-inner-spin-button,
            .no-spinner::-webkit-outer-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }

            .no-spinner {
                -moz-appearance: textfield;
            }

            ::placeholder {
                color: #a0a0a0;
                opacity: 1; /* Ensures the placeholder is fully opaque */
                font-style: italic
            }

            /* Global scrollbar styling for WebKit browsers */
            ::-webkit-scrollbar {
                width: 6px;
            }

            ::-webkit-scrollbar-track {
                background: transparent;
            }

            ::-webkit-scrollbar-thumb {
                background-color: #b3b3b3;  /* light gray */
                border-radius: 10px;
                border: 2px solid transparent;
                background-clip: padding-box;
            }

        </style>
        <!-- Smartsupp Live Chat script -->
        <script type="text/javascript" wire:ignore>
            var _smartsupp = _smartsupp || {};
            _smartsupp.key = '4bd5bda4330bf14c7358b9c2923fd361fe9b07fe';
            window.smartsupp||(function(d) {
            var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
            s=d.getElementsByTagName('script')[0];c=d.createElement('script');
            c.type='text/javascript';c.charset='utf-8';c.async=true;
            c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
            })(document);
        </script>
    </script>
        {{-- <noscript> Powered by <a href=“https://www.smartsupp.com” target=“_blank”>Smartsupp</a></noscript> --}}
    </head>
    <body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-layout="default">
        <div class="wrapper">
            @include('partials.sidebar')

            <div class="main">
                @include('partials.header')

                <main class="content">
                    {{ $slot }}
                </main>

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row text-muted">
                            <div class="col-6 text-start">
                                <p class="mb-0">
                                    &copy; {{ date('Y') }} <strong><a href="{{ route('home') }}">{{ config('app.name') }}</a></strong>. All rights reserved.
                                    <span>Powered by
                                        <a href="https://omefreight.com" target="_blank" class="text-decoration-none fw-semibold">
                                            OmeFreight
                                        </a>
                                    </span>
                                </p>
                            </div>
                            <div class="col-6 text-end">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a class="text-muted" href="{{ route('privacy') }}" target="_blank">Privacy</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="text-muted" href="{{ route('terms') }}" target="_blank">Terms</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="{{ asset('portal-assets/js/app.js') }}"></script>
        @stack('scripts')
        <script>
            function notify(message) {
                window.notyf.open({
                    type: 'success',
                    message: message,
                    duration: 2500,
                    ripple: true,
                    dismissible: true,
                    position: {
                        x: 'right',
                        y: 'top'
                    }
                });
            }
            function error(message) {
                window.notyf.open({
                    type: 'error',
                    message: message,
                    duration: 2500,
                    ripple: true,
                    dismissible: true,
                    position: {
                        x: 'right',
                        y: 'top'
                    }
                });
            }
        </script>
            {{-- <script>
                document.addEventListener("DOMContentLoaded", function() {
                    new Choices(document.querySelector(".choices-single1"));
                    new Choices(document.querySelector(".choices-single2"));
                });
            </script> --}}
    </body>
</html>
