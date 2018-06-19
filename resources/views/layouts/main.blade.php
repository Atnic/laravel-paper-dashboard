<!DOCTYPE html>
<html lang="@yield('lang', config('app.locale', 'en'))">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

  <title>@yield('title', config('app.name', 'Paper Dashboard'))</title>

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Styles -->
  @section('styles')
  <link href="{{ mix('/css/paper-dashboard.css') }}" rel="stylesheet">
  @show

  @stack('head')
</head>

<body class="">
  <div class="wrapper ">
    @include('paper-dashboard::layouts.sidebar.main')
    @include('paper-dashboard::layouts.main-panel.main')
  </div>

  @section('scripts')
  <script src="{{ mix('/js/manifest.js') }}" charset="utf-8"></script>
  <script src="{{ mix('/js/vendor.js') }}" charset="utf-8"></script>
	<script src="{{ mix('/js/paper-dashboard.js') }}" charset="utf-8"></script>
	@show
	@stack('body')

  <!--   Core JS Files   -->
  {{--
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
  --}}
</body>

</html>
