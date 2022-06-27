<!DOCTYPE html>
<html lang="en" dir="ltr" data-scompiler-id="0">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Stroyka Admin - eCommerce Dashboard Template</title>
    <!-- icon -->
    <link rel="icon" type="image/png" href="images/favicon.png" />
    <!-- fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i" />
    <!-- css -->
    <link rel="stylesheet" href="{{asset('/assets/vendor/bootstrap/css/bootstrap.ltr.css')}}" />
    <link rel="stylesheet" href="{{asset('/assets/vendor/highlight.js/styles/github.css')}}" />
    <link rel="stylesheet" href="{{asset('/assets/vendor/simplebar/simplebar.min.css')}}" />
    <link rel="stylesheet" href="{{asset('/assets/vendor/quill/quill.snow.css')}}" />
    <link rel="stylesheet" href="{{asset('/assets/vendor/air-datepicker/css/datepicker.min.css')}}" />
    <link rel="stylesheet" href="{{asset('/assets/vendor/select2/css/select2.min.css')}}" />
    <link rel="stylesheet" href="{{asset('/assets/vendor/datatables/css/dataTables.bootstrap5.min.css')}}" />
    <link rel="stylesheet" href="{{asset('/assets/vendor/nouislider/nouislider.min.css')}}" />
    <link rel="stylesheet" href="{{asset('/assets/vendor/fullcalendar/main.min.css')}}" />
    <link rel="stylesheet" href="{{asset('/assets/css/style.css')}}" />
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>


</head>
<body>

@if(Route::currentRouteName() === 'login' || Route::currentRouteName() === 'register')
    <div class="min-h-100 p-0 p-sm-6 d-flex align-items-stretch">

@endif

                <div class="sa-app sa-app--desktop-sidebar-shown sa-app--mobile-sidebar-hidden sa-app--toolbar-fixed">



 @if(Auth::guard('admin')->check())
        @include('Includes.sidebar')
        @include('Includes.toolbar')
                    @endif


     <div class="sa-app__content">
    @yield('content')

     </div>
                </div>

    </div>

         <div>
{{--             <script>--}}
{{--                 ClassicEditor--}}
{{--                     .create( document.querySelector( '#editor' ) )--}}
{{--                     .catch( error => {--}}
{{--                         console.error( error );--}}
{{--                     } );--}}
{{--             </script>--}}
             <script>
                 CKEDITOR.replace( 'description' );
             </script>
</div>
<!-- scripts -->

<script src="{{asset('/assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('/assets/vendor/feather-icons/feather.min.js')}}"></script>
<script src="{{asset('/assets/vendor/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('/assets/vendor/highlight.js/highlight.pack.js')}}"></script>
<script src="{{asset('/assets/vendor/quill/quill.min.js')}}"></script>
<script src="{{asset('/assets/vendor/air-datepicker/js/datepicker.min.js')}}"></script>
<script src="{{asset('/assets/vendor/air-datepicker/js/i18n/datepicker.en.js')}}"></script>
<script src="{{asset('/assets/vendor/select2/js/select2.min.js')}}"></script>
<script src="{{asset('/assets/vendor/fontawesome/js/all.min.js')}}" data-auto-replace-svg="" async=""></script>
<script src="{{asset('/assets/vendor/chart.js/chart.min.js')}}"></script>
<script src="{{asset('/assets/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/assets/vendor/datatables/js/dataTables.bootstrap5.min.js')}}"></script>
<script src="{{asset('/assets/vendor/nouislider/nouislider.min.js')}}"></script>
<script src="{{asset('/assets/vendor/fullcalendar/main.min.js')}}"></script>
<script src="{{asset('/assets/js/stroyka.js')}}"></script>
<script src="{{asset('/assets/js/custom.js')}}"></script>
<script src="{{asset('/assets/js/calendar.js')}}"></script>
<script src="{{asset('/assets/js/demo.js')}}"></script>
<script src="{{asset('/assets/js/demo-chart-js.js')}}"></script>
</body>
</html>
