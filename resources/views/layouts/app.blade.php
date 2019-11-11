<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.js"></script>
    <script type="text/javascript" src="{{ asset('/js/preloader.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/load.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/main.js') }}"></script>


    <script src="{{ asset('js/script.js') }}" defer></script>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/loader-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('ico/minus.png') }}">
</head>

<body>
  <div id="app">

    <!-- Preloader -->
    @include('blocks.preloader')

    <!-- TOP NAVBAR -->
    @include('blocks.top_navbar')

    <!-- SIDE MENU -->
    @include('blocks.side_menu')

    <!--  PAPER WRAP -->
    <div class="wrap-fluid">
      <div class="container-fluid paper-wrap bevel tlbr">

        <div class="row">
          <div id="paper-top">
            @include('blocks.paper.top')
          </div>
        </div>

        <!-- BREADCRUMB -->
        @include('blocks.paper.breadcrumbs')

        <div class="content-wrap">
          <div class="row">
            <div class="col-sm-12">
              <div class="nest" id="Blank_PageClose">
                @include('blocks.paper.header')
                <div class="body-nest" id="Blank_Page_Content">
                  @yield('content')
                </div>
              </div>
            </div>
          </div>
        </div>

        @include('blocks.footer')
      </div>

      <!-- RIGHT SLIDER CONTENT -->
      @include('blocks.right_slidebar')
    </div>
    <!--  END PAPER WRAP -->
  </div>
</body>
</html>
